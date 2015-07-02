jQuery(document).ready(function($) {
    
    var $div = $("#cscf");
    
    var $form = $div.find("#frmCSCF");
    
    $form.find("#recaptcha_response_field").focus(function() {

        $errele = $form.find("div[for='cscf_recaptcha']");
        $errele.html('');
        
    });
    
    $form.validate({ 

        errorElement: "span",

        highlight: function(label, errorClass, validClass) {
                               $(label).closest('.form-group').removeClass('has-success').addClass('has-error'); 
                               $(label).closest('.control-group').removeClass('success').addClass('error'); // support for bootstrap 2
                               
                       },
        unhighlight: function(label, errorClass, validClass) {
               $(label).closest('.form-group').removeClass('has-error').addClass('has-success');
               $(label).closest('.control-group').removeClass('error').addClass('success'); // support for bootstrap 2
        }
     });
        
    $form.submit(function (event) {

          $button = $(this).find("button");
          $button.attr("disabled","disabled");

          event.preventDefault();

          if ($form.validate().valid() ) {

              $.ajax({
              type : "post",
              dataType : "json",
              cache: false,
              url : cscfvars.ajaxurl,
              data : $($form).serialize() + "&action=cscf-submitform", 
              success: function(response,strText) {
                                                      if (response.valid === true) { 
                                                          //show sent message div
                                                          $formdiv=$div.find(".cscfForm");
                                                          $formdiv.css('display','none');
                                                          $messagediv=$div.find(".cscfMessageSent");
                                                          if (response.sent === false ) {
                                                              $messagediv=$div.find(".cscfMessageNotSent");
                                                          }

                                                          $messagediv.css('display','block');

                                                          if ( isScrolledIntoView($div) == false) {
                                                              scrollTo($div.selector);
                                                          }
                                                      }

                                                      else { 
                                                          $.each(response.errorlist, function(name, value) {
                                                              $errele = $form.find("div[for='cscf_" + name +"']");
                                                              $errele.html(value);
                                                              $errele.closest('.form-group').removeClass('has-success').addClass('has-error');
                                                              $errele.closest('.control-group').removeClass('success').addClass('error'); // support for bootstrap 2
                                                          });
                                                      }
                                                   },
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                      if (window.console) {
                          console.log("Status: " + textStatus + "Error: " + errorThrown + "Response: " + XMLHttpRequest.responseText);
                      }

                  } 													

              }); 

          };
          $button.removeAttr("disabled");
      });         
        
});

function scrollTo(id)
{
  // Scroll
  jQuery('html,body').animate({scrollTop: jQuery(id).offset().top},'slow');
}

function isScrolledIntoView(elem)
{
    var docViewTop = jQuery(window).scrollTop();
    var docViewBottom = docViewTop + jQuery(window).height();

    var elemTop = jQuery(elem).offset().top;
    var elemBottom = elemTop + jQuery(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}