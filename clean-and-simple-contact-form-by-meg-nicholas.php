<?php
/**
 * @package Clean and Simple Contact Form
 */

/*
Plugin Name: Clean and Simple Contact Form
Plugin URI: http://www.megnicholas.co.uk/wordpress-plugins/clean-and-simple-contact-form
Description: A clean and simple contact form with Google reCAPTCHA and Twitter Bootstrap markup.
Version: 4.4.1
Author: Meghan Nicholas
Author URI: http://www.megnicholas.co.uk
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/*
 * @package Main
*/
include ('shortcodes/contact-form.php');
include ('class.cscf.php');
include ('class.cscf_pluginsettings.php');
include ('class.cscf_settings.php');
include ('class.cscf_contact.php');
include ('class.view.php');
include ('class.cscf_filters.php');
include ('ajax.php');
include ('recaptchalib-1.11.php');

if (!defined('CSCF_THEME_DIR')) define('CSCF_THEME_DIR', ABSPATH . 'wp-content/themes/' . get_template());

if (!defined('CSCF_PLUGIN_NAME')) define('CSCF_PLUGIN_NAME', 'clean-and-simple-contact-form-by-meg-nicholas');

if (!defined('CSCF_PLUGIN_DIR')) define('CSCF_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . CSCF_PLUGIN_NAME);

if (!defined('CSCF_PLUGIN_URL')) define('CSCF_PLUGIN_URL', WP_PLUGIN_URL . '/' . CSCF_PLUGIN_NAME);

if (!defined('CSCF_VERSION_KEY')) define('CSCF_VERSION_KEY', 'cscf_version');

if (!defined('CSCF_VERSION_NUM')) define('CSCF_VERSION_NUM', '4.4.1');

if (!defined('CSCF_OPTIONS_KEY')) define('CSCF_OPTIONS_KEY', 'cscf_options');

$cscf = new cscf();

/*get the current version and update options to the new option*/
$oldVersion = get_option(CSCF_VERSION_KEY);
update_option(CSCF_VERSION_KEY, CSCF_VERSION_NUM);

/*If this is a new installation then set some defaults*/
if ( $oldVersion == false ) {
    $options = get_option(CSCF_OPTIONS_KEY);
    $options['use_client_validation'] = true;
    $options['load_stylesheet'] = true;
    $options['confirm-email'] = true;
    update_option(CSCF_OPTIONS_KEY,$options);
}
 
/*if necessary do an upgrade*/
if ($oldVersion < CSCF_VERSION_NUM) {
    $cscf->Upgrade($oldVersion);
}