=== Contact Form Clean and Simple ===
Contributors: megnicholas
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=AKQM4KSBQ4H66
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl.html
Tags: simple, contact, form, contact button, contact form, contact form plugin, akismet, contacts, contacts form plugin, contact me, feedback form, bootstrap, twitter, google, reCAPTCHA, ajax, secure
Requires at least: 3.3
Tested up to: 4.0
Stable tag: 4.4.1

A clean and simple AJAX contact form with Google reCAPTCHA, Twitter Bootstrap markup and Akismet spam filtering.

== Description ==
A clean and simple AJAX contact form with Google reCAPTCHA, Twitter Bootstrap markup and Akismet spam filtering.

*   **Clean**: all user inputs are stripped in order to avoid cross-site scripting (XSS) vulnerabilities. 

*   **Simple**: AJAX enabled validation and submission for immediate response and guidance for your users (can be switched off). 

*   **Stylish**: Use the included stylesheet or switch it off and use your own for seamless integration with your website. 
Uses **Twitter Bootstrap** classes.

*   **Safe**: All incoming data is scanned for spam with **Akismet**.

This is a straightforward contact form for your WordPress site. There is very minimal set-up 
required. Simply install, activate, and then place the short code **[cscf-contact-form]** on your web page.

A standard set of input boxes are provided, these include Email Address, Name, Message and a nice big ‘Send Message’ button. 

When your user has completed the form an email will be sent to you containing your user’s message. 
To reply simply click the ‘reply’ button on your email client. 
The email address used is the one you have set up in WordPress under ‘Settings’ -> ‘General’, so do check this is correct. 

To help prevent spam all data is scanned via Akismet. 
For this to work you must have the [Akismet Plugin](http://wordpress.org/plugins/akismet/ "Akismet Plugin") installed and activated.
All spam will be placed in your 'comments' list which you can then review if you want to 
[learn more](http://www.megnicholas.co.uk/articles/contact-form-plugin-can-detect-spam/ "Learn More").

For added piece of mind this plugin also allows you to add a ‘**reCAPTCHA**’. 
This adds a picture of a couple of words to the bottom of the contact form. 
Your user must correctly type the words before the form can be submitted, and in so doing, prove that they are human.

= Why Choose This Plugin? =
Granted there are many plugins of this type in existence already. Why use this one in-particular? 

Here’s why:

*   Minimal setup. Simply activate the plugin and place the shortcode [cscf-contact-form] on any post or page.

*   **Safe**. All input entered by your user  is stripped back to minimise as far as possible the likelihood of any 
malicious user attempting to inject a script into your website. 
If the Akismet plugin is activated all form data will be scanned for spam.
You can turn on reCAPTCHA to avoid your form being abused by bots.

*   **Ajax enabled**. You have the option to turn on AJAX (client-side) validation and submission which gives your users an immediate response when completing the form without having to wait for the page to refresh.

*   The form can **integrate seamlessly into your website**. Turn off the plugin’s default css style sheet so that your theme’s style sheet can be used instead.

*   If your theme is based on **twitter bootstrap** then this plugin will fit right in because it already has all the right div’s and CSS classes for bootstrap.

*   This plugin will only link in its jQuery file where it’s needed, it **will not impose** itself on every page of your whole site!

*   Works with the **latest version of WordPress**.

*   Written by an **experienced PHP programmer**, the code is rock solid, safe, and rigorously tested as standard practice.

Hopefully this plugin will fulfil all your needs, if not [get in-touch](http://www.megnicholas.co.uk/contact-me "Get In Touch") and I will customise to your exact requirements.


== Installation ==
There are two ways to install:

1. Click the ‘Install Now’ link from the plugin library listing to automatically download and install.

2. Download the plugin as a zip file. To install the zip file simply double click to extract it and place the whole folder in your wordpress plugins folder, e.g. [wordpress]/wp-content/plugins where [wordpress] is the directory that you installed WordPress in.

Then visit the plugin page on your wordpress site and click ‘Activate’ against the ‘Clean and Simple Contact Form’ plugin listing.

To place the contact form on your page use the shortcode [cscf-contact-form]

[More information on how to use the plugin.](http://www.megnicholas.co.uk/wordpress-plugins/clean-and-simple-contact-form/ "More Information")

== How to Use ==
Unless you want to change messages or add reCAPTCHA to your contact form then this plugin will work out of the box without any additional setup.

Important: Check that you have an email address set-up in your WordPress ‘Settings’->’General’ page. This is the address that the plugin will use to send the contents of the contact form.

To add the contact form to your WordPress website simply place the shortcode [cscf-contact-form] on the post or page that you wish the form to appear on.

**If you have Jetpack plugin installed disable the contact form otherwise the wrong form might display.**

[More information on how to use the plugin.](http://www.megnicholas.co.uk/wordpress-plugins/clean-and-simple-contact-form/ "More Information")

== Additional Settings ==
This plugin will work out of the box without any additional setup. You have the option to change the default messages that are displayed to your user and to add reCAPTCHA capabilities.

Go to the settings screen for the contact form plugin.

You will find a link to the setting screen against the entry of this plugin on the ‘Installed Plugins’ page.

Here is a list of things that you can change

*   **Message**: The message displayed to the user at the top of the contact form.

*   **Message Sent Heading**: The message heading or title displayed to the user after the message has been sent.

*   **Message Sent Content**: The message content or body displayed to the user after the message has been sent.

*   **Use this plugin’s default stylesheet**: The plugin comes with a default style sheet to make the form look nice for your user. Untick this if you want to use your theme’s stylesheet instead. The default stylesheet will simply not be linked in.

*   **Use client side validation (Ajax)**: When ticked the contact form will be validated and submitted on the client giving your user instant feedback if they have filled the form in incorrectly. If you wish the form to be validated and submitted only to the server then untick this option.

*   **Use reCAPTCHA**: Tick this option if you wish your form to have a reCAPTCHA box. ReCAPTCHA helps to avoid spam bots using your form by checking that the form filler is actually a real person. To use reCAPTCHA you will need to get a some special keys from google https://www.google.com/recaptcha/admin/create. Once you have your keys enter them into the Public key and Private key boxes

*   **reCAPTCHA Public Key**: Enter the public key that you obtained from here.

*   **reCAPTCHA Private Key**: Enter the private key that you obtained from here.

*   **reCAPTCHA Theme**: Here you can change the reCAPTCHA box theme so that it fits with the style of your website.

*   **!NEW! Recipient Emails**: The email address where you would like all messages to be sent. 
    This will default to the email address you have specified under 'E-Mail Address' in your WordPress General Settings. 
    If you want your mail sent to a different address then enter it here.
    You may enter multiple email addresses by clicking the '+' button.

*   **!NEW! Confirm Email Address**: Email confirmation is now optional. To force your user to re-type their email address tick 'Confirm Email Address'.
    It is recommended that you leave this option on. If you turn this option off your user will only have to enter their email address once,
    but if they enter it incorrectly you will have no way of getting back to them!

*   **Email Subject**: This is the email subject that will appear on all messages. If you would like to set it to something different then enter it here.

*   **!NEW! Override 'From' Address**: If you tick this and then fill in the 'From Address:' box then all email will be sent from the given address NOT from the email address given by the form filler.

*   **!NEW! Option to allow enquiry to email themselves a copy of the message.

== Screenshots ==
1. Contact Form With reCAPTCHA
2. Contact Form Without reCAPTCHA
3. Message Sent
4. Contact Form Options Screen
5. Place this shortcode on your post or page to deploy

== Demo ==
This is a demonstration of this plugin working on the default Twenty Twelve theme ->
[Clean and Simple Contact Form Demonstration](http://demo.megnicholas.co.uk/wordpress-clean-and-simple-contact-form "Plugin Demonstration")

==About Meg Nicholas ==
I am a freelance WordPress Developer. 
[Hire me for all your Wordpress needs](http://www.megnicholas.co.uk "Hire Me").

== Frequently Asked Questions ==
= I get a message to say that the message could not be sent =

If you get this message then you have a general problem with email on your server. This plugin uses Wordpress's send mail function.
So a problem sending mail from this plugin indicates that Wordpress as a whole cannot send email.
Contact your web host provider for help, or use an SMTP plugin to use a third party email service.

= I don't receive the email =

* Check the recipient email on your settings screen, is it correct?
* Check in your spam or junk mail folder
* For Gmail check in 'All Mail', the email might have gone straight to archive
* Try overriding the 'From' email address in the settings screen. Use an email address you own or is from your own domain

= Why is a different contact form displayed? =

You may have a conflict with another plugin. Either deactivate the other contact form plugin, if you don't need it, or use
this alternative short code on your webpage - `[cscf-contact-form]`.
This problem often occurs when Jetpack plugin is installed.

= How do I display the contact form on my page/post? =

To put the contact form on your page, add the text:
`[cscf-contact-form]`

The contact form will appear when you view the page.

= When I use the style sheet that comes with the plugin my theme is affected =

It is impossible to test this plugin with all themes. Styling incompatibilities can occur. In this case, switch off the default stylesheet on the settings
screen so you can add your own styles to your theme's stylesheet.

= Can I have this plugin in my own language? =

Yes, I am currently building up translation files for this plugin. If your language is not yet available you are very welcome to translate it.
If you are not sure how to go about doing this [get in touch](http://www.megnicholas.co.uk/contact-me/ "Contact Me").

= How do I change the text box sizes? = 

The plugin now uses Bootstrap 3. The text box widths now use up 100% of the available width. 
This makes the form responsive to all types of media. If you want to have a fixed width for the form you can put some styling around the shortcode:
`<div style="width:600px;">[cscf-contact-form]</div>`

= Can I have multiple forms? =

Currently you may only have one contact form per page. You CAN however put the contact form on more than one page using the same shortcode.
Note that making changes to the settings will affect all implementations of the plugin across your site.

= Will this work with other plugins that use Google reCAPTCHA? =
Yes it will. HOWEVER, you cannot have more than one reCAPTCHA on a page. This is a constraint created by Google.
So for example, if your 'Contact Me' page has comments below it, 
the reCAPTCHA for the contact form will be displayed correctly but not in the comments form below.
The comments form will never validate due to no supplied reCAPTCHA code.

== Changelog ==
= 4.4.0 =
* Fixed XSS issue
= 4.4.1 =
* Add option for enquiry to email themselves a copy of the message
* Update to Polish translation thanks to Radosław “Robaczek” Rak
= 4.3.4 =
* Added the wordpress page of contact form to the email
* Removed link in main contact form view
= 4.3.3 =
* Before overriding the from address, check that another plugin has not done it first. 
Any plugin that overrides 'from email address' and 'from name' such as wp-mail-smtp plugin will take precedence over the settings in this plugin.
* Added 'reply-to' to the email header
* Moved the Name field before Email field
* Added Hebrew translation thanks to Shay Cohen
= 4.3.2 =
* Added Norwegian Bokmål translation thanks to Jann Vestby
* Added Brazilian Portugese translation originally a Portugese translation by Ricardo Santos aka BogasoBogolha
= 4.3.1 =
* Polish translation has been updated thanks to Arkadiusz Baron
* Updated Turkish translations thanks again to [Abdullah Manaz](http://manaz.net "Abdullah Manaz")
* New installations now have default stylesheet, ajax, and confirm-email options turned on
* Compatibility with WordPress 3.8
* Tested with twentyfourteen theme
= 4.3.0 =
* Contact form is now filtered for spam when the Akisturkishturkishturkmet plugin is present.
[Learn more](http://www.megnicholas.co.uk/articles/contact-form-plugin-can-detect-spam/ "Learn More").
= 4.2.5 =
* Fixed bug that caused a PHP notice to be generated when 'Confirm Email Message' option is switched off.
Thanks to MarrsAttax
= 4.2.4 =
* The requirement for users to confirm their email address is now optional. 
  When turned off users only need to enter their email address once.
* Added Arabic translation thanks to [Omar AlQabandi](http://www.PlusOmar.com "Omar AlQabandi")
= 4.2.3 =
* Added ability to specify multiple recipient email addresses
* Fix settings gui - there was a problem enabling 'From' Address option when javascript is not enabled.
= 4.2.2 =
* Recaptcha library has now been namespaced to 'cscf' to remove ALL possibility of conflicts with other plugins that also include this library.
= 4.2.1 =
* Fixed potential conflict with other themes or plugins that use Google reCAPTCHA. reCAPTCHA library is not loaded if it already loaded by another plugin or theme.
* Recaptcha library function is now used to generate the sign up url on the settings page. The site domain is passed into the url for convenience.
* Options subject, message, heading, and body text are now translated when they are retrieved from the the database. Previously only the default messages were translated when no values were found in the database.
* Improved housekeeping: generic name for settings array has been changed from 'array_key' to 'cscf-options'
= 4.2.0 =
* Updated Turkish translations thanks again to [Abdullah Manaz](http://manaz.net "Abdullah Manaz")
* Fixed a problem where certain texts on the settings screen were not being translated 
thanks to [Abdullah Manaz](http://manaz.net "Abdullah Manaz") again for finding this
* Updates to FAQ section
* The settings link on the plugin page may now be translated
* The text 'Contact Form' on the admin screen menu may now be translated
* Added Greek translations thanks to Georgios Diamantopoulos
= 4.1.9 =
* Added support for Bootstrap 3.0.0. Plugin is still compatible with Bootstrap 2.3.2, but if your theme uses this version 
please do not use the plugin's default style sheet (uncheck the box in the settings screen)
[more information here](http://www.megnicholas.co.uk/articles/version-4-1-9-supports-bootstrap-3/ "more information").
= 4.1.8 =
* Added Russian Translation thanks to Oleg
* Correct character encoding in Estonian translation thanks to [Marko Punnar](http://aretaja.org "Marko Punnar")
* Correct some Spanish translation errors thanks to rowanda
= 4.1.7 = 
* Added a note about the short code to use on the settings screen.
* Added Estonian Translation thanks to [Marko Punnar](http://aretaja.org "Marko Punnar")
* Added Japanese language thanks to Nikhil Khullar
* Updated Turkish translation thanks again to Abdullah Manaz http://manaz.net
= 4.1.6 =
* Added ability to specify a 'from' address. When supplied the email will come from that address instead of the form filler's email address.
* Changed type of email input boxes to "email"
* Added Turkish translation thanks to Abdullah Manaz http://manaz.net
= 4.1.5 =
* Removed all carriage returns from views to avoid problems with wptexturize
* Fixed typo in Dutch translation.
= 4.1.4 = 
* Added Slovak translation file - thanks to Peter Gašparík
* Added Catalan translation file - thanks to Llorenç
= 4.1.3 =
* Fixed escaped characters.
* Added more translation files
* Forms now submit via ajax.
* Upgraded jquery-validate.js to 1.11. Removed jquery metadata plugin, form validation is now built with data attributes instead of json in classes.
* Improved view html.
* Added translations: Dutch thanks to Daniel Tetteroo, Armenian thanks to [Artak Kolyan](http://ablog.gratun.am "Artak Kolyan"), 
Polish thanks to Patryk Peas
= 4.1.2 =
* Added some FAQs
* Added alternative shortcode [cscf-contact-form] for use when conflicts could occur.
* Updated the documentation.
* Recaptcha form now responds to language changes
* Updated pot file to reflect new name space
* Changed name space from cff to cscf
* Settings screen: recaptcha theme and key inputs are immediately enabled/disabled as the 'Use reCAPTCHA' box is clicked. 
* Corrected some html seen as invalid by http://validator.w3.org/
* removed '<?=' and replaced with '<?php echo' in cscf_settings, thanks go to andrewbacon
* Added notice to setting screen when JetPack's contact form is active
* Fixed problem where 'Please enter a valid email address' was not translating in the 'confirm email address' input
= 4.1.1 =
* Fixed potential conflicts with themes that use bootstrap
* Enabled internationalisation, this plugin will now work with multiple languages
* Added German translation file for my German friends, thanks to faktorzweinet for the translation
= 4.1.0 =
* Fixed a bug in class.cff_settings.php where php opening tag had got missed off. This problem caused the settings screen not to display correctly but only occurred with some versions of php. Please upgrade if you have this problem.
= 4.0.9 =
* Switched header argument of wp_mail over to a filter to remove any potential conflicts with other emailing plugins or themes
* The ability to set a different recipient email address. Previously all email was sent to the WordPress administrator email address.
* Allow the email subject to be customised.
= 4.0.8 =
* Fixed a bug: When using reCAPTCHA ajax did not work.
* Fixed a bug: Ajax validation was not checking email address were equal (server side was doing it instead)
* Improvement: Ajax now works better.
* Documentation update: nicer links (worked how to do them in markdown!), changelog and upgrade notice sections now correctly formatted.
= 4.0.7 =
* Fixed a bug: Plugin name is actually clean-and-simple-contact-form-by-meg-nicholas now (not contact-form) but this new name needed to be updated in the plugin settings definitions. I also needed to rename contact-form.php to clean-and-simple-contact-form-by-meg-nicholas.php. My thanks to Jakub for finding this bug.
* If your webpage is ssl then reCAPTCHA will now also use ssl mode.


== Upgrade Notice ==
= 4.4.1 =
Fixed XSS issue
= 4.4.0 =
Added option for enquiry to email themselves a copy of the message plus Polish translation updated
= 4.3.4 =
Email now includes page url of contact form, removed link in main contact form view
= 4.3.3 =
Hebrew Language added, name field moved to top of form, added 'reply-to'
= 4.3.2 =
Added Norwegian and Brazilian Portugese Translations
= 4.3.1 =
Checked compatibility with WP 3.8 and TwentyFourteen theme, translation updates, defaults for new installations
= 4.3.0 =
Contact form is now filtered for spam when the Akismet plugin is present.
[Learn more](http://www.megnicholas.co.uk/articles/contact-form-plugin-can-detect-spam/ "Learn More").
= 4.2.5 =
Small bug fix
= 4.2.4 =
'Confirm Email' can now be turned off. Arabic translation added.
= 4.2.3 =
Multiple recipients are now possible
= 4.2.2 =
Remove ALL possibility of conflicts with other plugins that also include Google reCAPTCHA library
= 4.2.1 =
Translation and housekeeping updates
= 4.2.0 =
Translation and documentation updates
= 4.1.9 =
Support for [Bootstrap 3](http://www.megnicholas.co.uk/articles/version-4-1-9-supports-bootstrap-3/ "More information on 4.1.9")
= 4.1.8 =
Added Russian translation and some modifications to Estonian and Spanish translations
= 4.1.7
More translations. A helpful note about the short code to use has been put on the settings screen
= 4.1.6 =
Ability to specify a 'From' address. This email will be used to send the mail instead of the form filler's email address.
= 4.1.5 = 
Works with themes that pre-process the html.
= 4.1.4 =
New translations - Slovak and Catalan
= 4.1.3 =
Form now submits via ajax!
= 4.1.2 =
Alternative shortcode, recaptcha internationalisation, Jetpack conflict warning notice
= 4.1.1 =
Internationalisation, fixed conflict with some bootstrapped themes.
= 4.1.0 =
Please upgrade if your settings screen is not displaying.
= 4.0.9 =
More customisation: recipient email address, and email subject.
= 4.0.8 =
Ajax now works when your form has reCAPTCHA on it. Ajax validation is now cleaner.
= 4.0.7 =
Fixed a bug which occurred when plugin name was changed. reCAPTCHA will now use ssl if your webpage is ssl.
