jQuery(function($) {
    
    function SetSortable() {
        //if more than one list item, then it's sortable
        if ( $('li.recipient_email').length > 1 ) {
            $('#recipients').sortable({disabled:false,cursor:'move',axis: "y"});
        }
        else {
            $('#recipients').sortable({disabled:true});
        }
        
        //set the cursor depending on how many list items there are    
        $('#recipients li').hover( 
                function(){
                    if ( $('li.recipient_email').length > 1 ) 
                        $(this).css('cursor','move');
                }, 
                function(){
                    $(this).css('cursor','default');
                }
        );        
        
    }    

    function add_recipient(e) {
        e.preventDefault();

        //find the next id
        var $nextID=0;
        $('li.recipient_email').each(function() {
            if ( $(this).data('element') > $nextID) {
                $nextID = $(this).data('element');
            }
        });
        $nextID++;

        //make the new element
        var $eleToClone=$(this).parent();
        $eleToClone.after('<li class="recipient_email" data-element="'+$nextID+'">'+$eleToClone.html()+'</li>');

        //get the new element
        var $newEle=$('li.recipient_email[data-element="'+$nextID+'"]');

        //update the array element of the new html
        var $eleToUpdate = $newEle.find('.enter_recipient');
        var $oldName = $eleToUpdate.attr('name');
        var $newName = $oldName.replace('['+$eleToClone.data('element')+']', '['+$nextID+']');
        $eleToUpdate.attr('name', $newName);
        $eleToUpdate.val('');

        var $eleToUpdate = $newEle.find('.remove_recipient');
        var $oldName = $eleToUpdate.attr('name');
        var $newName = $oldName.replace('['+$eleToClone.data('element')+']', '['+$nextID+']');
        $eleToUpdate.attr('name', $newName);   

        //add events for the new elements
        $newEle.find('.add_recipient').click(add_recipient);
        $newEle.find('.remove_recipient').click(remove_recipient);
        
        //set focus
        $newEle.find('.enter_recipient').focus();
        
        SetSortable();
    }

    function remove_recipient(e) {
        e.preventDefault();
        if ( $('li.recipient_email').length < 2 )
            return;
        $(this).parent().remove();
        SetSortable();
    }

    $('.add_recipient').click(add_recipient);
    $('.remove_recipient').click(remove_recipient);
    
    
    SetSortable();

    
    $('#use_recaptcha').change(function() {
        $('#theme').attr('disabled', ! this.checked);
        $('#recaptcha_public_key').attr('readonly', ! this.checked);
        $('#recaptcha_private_key').attr('readonly', ! this.checked);
    });   

    $('#override-from').change(function() {
        $('#from-email').attr('readonly', ! this.checked);
    }); 
    
});