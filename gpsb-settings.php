<?php 

 if($_POST['gpsb_hidden'] == 'Y') {  
        //Form data sent  
        $gpsb_lang = $_POST['gpsb_lang'];  
		$gpsb_width = $_POST['gpsb_width'];
		if($gpsb_lang){
        update_option('gpsb_lang', $gpsb_lang);  
		} else {
		update_option('gpsb_lang', 'en');
		}
		if($gpsb_width){
        update_option('gpsb_width', $gpsb_width);  
		} else {
		update_option('gpsb_width', '300');
		}
		
        ?>  
        <div class="updated"><p><strong><?php _e('Settings saved.' ); ?></strong></p></div>  
        <?php  
    } else {  
        //Normal page display  
        $gpsb_lang = get_option('gpsb_lang');  
        $gpsb_width = get_option('gpsb_width');  

    }  
?>
		<div class="wrap">
			<?php    echo "<h2>Google+ Settings</h2>"; ?>
			
			<form name="gpsb_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
				<input type="hidden" name="gpsb_hidden" value="Y">
				<?php    echo "<h4>Google+ Button Parameters</h4>"; ?>
				<p>Language <input type="text" name="gpsb_lang" value="<?php echo $gpsb_lang; ?>" size="20"><?php _e(" 2 Letter Code ex: en" ); ?></p>
				<p>Button Width <input type="text" name="gpsb_width" value="<?php echo $gpsb_width; ?>" size="20"><?php _e(" Min : 120" ); ?></p>
				
				<hr />
							
				<p class="submit">
				<input type="submit" name="Submit" value="Update Options" />
				</p>
			</form>
		</div>