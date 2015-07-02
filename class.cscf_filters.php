<?php

/*
 * Add and remove filters as we need in order to play nicely
  */

class cscf_Filters {
    
    var $fromEmail;
    var $fromName;
    
    function wp_mail_from ($orig) {
        
	// This is copied from pluggable.php lines 348-354 as at revision 10150
	// http://trac.wordpress.org/browser/branches/2.7/wp-includes/pluggable.php#L348
	
	// Get the site domain and get rid of www.
	$sitename = strtolower( $_SERVER['SERVER_NAME'] );
	if ( substr( $sitename, 0, 4 ) == 'www.' ) {
		$sitename = substr( $sitename, 4 );
	}

	$default_from = 'wordpress@' . $sitename;
	// End of copied code
	
	// If the from email is not the default, return it unchanged
	if ( $orig != $default_from ) {
		return $orig;
        }
        return $this->fromEmail;
    }
    
    //strip slashes from the name
    function wp_mail_from_name ($orig) {
        
        if ( $orig != 'WordPress') {
            return $orig;
        }
        return stripslashes($this->fromName);
    }
    
    function add($filter, $priority = 10, $args = 1) {
        add_filter ($filter, array($this,$filter),$priority,$args);
    }
    
    function remove($filter, $priority = 10, $args = 1) {
        remove_filter ($filter, array($this,$filter),$priority,$args);
    }
    
}