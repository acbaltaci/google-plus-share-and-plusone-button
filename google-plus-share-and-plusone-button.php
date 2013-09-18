<?php
/**
 * Plugin Name: Google Plus Share and Plusone Button
 * Plugin URI: http://www.dmgcreative.net
 * Description: Puts a Google Plus +1 Button to top of Pages and Posts. 3oopx wide..
 * Version: 1.0
 * Author: A.Cihangir BALTACI
 * Author URI: http://www.dmgcreative.net
 * License: GPL
 */
 
add_filter( 'the_content', 'gpsb_the_content' );
 
function gpsb_the_content($content) {

        $gpsb_lang = get_option('gpsb_lang');  
        $gpsb_width = get_option('gpsb_width');  
		
	$googleplus_script = '<!-- Place this tag where you want the +1 button to render. -->
<div id="googleplussharebutton" class="g-plusone" data-annotation="inline" data-width="'.$gpsb_width.'"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  window.___gcfg = {lang: \''.$gpsb_lang.'\'};

  (function() {
    var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
    po.src = \'https://apis.google.com/js/plusone.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>';
	
	
  return $googleplus_script . $content;
}
 
 
function gpsb_settings() {  
    include('gpsb-settings.php');  
}  
  
function gpsb_admin_actions() {  
    add_options_page("Google Plus Settings", "Google Plus Settings", 1, "Google_Plus_Settings", "gpsb_settings");  
}  
  
add_action('admin_menu', 'gpsb_admin_actions');  
?>