<?php
add_shortcode('contact-form', 'cscf_ContactForm');
add_shortcode('cscf-contact-form', 'cscf_ContactForm');

function cscf_ContactForm() 
{
    
    $contact = new cscf_Contact;
    
    if ($contact->IsValid()) 
    {
        if ( $contact->SendMail() )

        {
            $view = new CSCF_View('message-sent'); 
            $view->Set('heading',cscf_PluginSettings::SentMessageHeading());
            $view->Set('message',cscf_PluginSettings::SentMessageBody());
        }
        else
        {
            $view = new CSCF_View('message-not-sent');
        }
        
        return $view->Render();
    }
  
    //here we need some jquery scripts and styles, so load them here
    if ( cscf_PluginSettings::UseClientValidation() == true) {
        wp_enqueue_script('jquery-validate');
        wp_enqueue_script('cscf-validate');
    }

    //only load the stylesheet if required
    if ( cscf_PluginSettings::LoadStyleSheet() == true)
         wp_enqueue_style('cscf-bootstrap');

    $messageSentView = new CSCF_View('message-sent'); 
    $messageSentView->Set('heading',cscf_PluginSettings::SentMessageHeading());
    $messageSentView->Set('message',cscf_PluginSettings::SentMessageBody());
    
    $view = new CSCF_View('contact-form'); 
    $view->Set('contact',$contact);
    $view->Set('message',cscf_PluginSettings::Message());
    $view->Set('version', CSCF_VERSION_NUM);
    $view->Set('confirmEmail',  cscf_PluginSettings::ConfirmEmail());
    $view->Set('postID', get_the_ID());

    
    $view->Set('messageSentView',$messageSentView);
    $view->Set('messageNotSentView',new CSCF_View('message-not-sent'));
    
    return $view->Render();

}


