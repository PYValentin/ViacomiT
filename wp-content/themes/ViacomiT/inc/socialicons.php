<?php
/**
 * Include social icons.
 */

function blackandwhite_social_media_array() {
 
    // store social site names in array
    $social_sites = array('twitter', 'facebook', 'google-plus', 'flickr', 'pinterest', 'youtube', 'vimeo', 'tumblr', 'dribbble', 'rss', 'linkedin', 'instagram');
 
    return $social_sites;
}

// add settings to create various social media text areas.
add_action('customize_register', 'blackandwhite_social_sites_customizer');
 
function blackandwhite_social_sites_customizer($wp_customize) {
 
    $wp_customize->add_section( 'blackandwhite_settings', array(
            'title'          => 'Social Media Icons',
            'priority'       => 38, 
    ) );
 
    $social_sites = blackandwhite_social_media_array();
    $priority = 5;
 
    foreach($social_sites as $social_site) {
		
		$wp_customize->add_setting(
        	'blackandwhite_url_path',
        array(
            'sanitize_callback' => 'blackandwhite_sanitize_checkbox',
            'default' => 0,
    	));
	
    	$wp_customize->add_control( 
        	'blackandwhite_url_path',
        array(
            'type' => 'checkbox',
            'label' => __('Check this box to open links in new window.', 'blackandwhite'),
            'section' => 'blackandwhite_settings',  
            'priority' => 1,           
    	));
 
        $wp_customize->add_setting( "$social_site", array( 
                'type'        => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'sanitize_callback'        => 'esc_url_raw'
        ) );
 
        $wp_customize->add_control( $social_site, array(
                'label'   => __( "$social_site url:", 'social_icon' ),
                'section' => 'blackandwhite_settings',
                'type'    => 'text',
                'priority'=> $priority,
        ) );
 
        $priority = $priority + 5; 
    }
}

// takes user input from the customizer and outputs linked social media icons
function blackandwhite_media_icons() {
 
    $social_sites = blackandwhite_social_media_array();
 
    // any inputs that aren't empty are stored in $active_sites array
    foreach($social_sites as $social_site) {
        if( strlen( get_theme_mod( $social_site ) ) > 0 ) {
            $active_sites[] = $social_site;
        }
    }
 
    // for each active social site, add it as a list item
    if(!empty($active_sites)) {
        echo "<ul class='social-media-icons'>";
        foreach ($active_sites as $active_site) {?>
            <li>
                <a href="<?php echo get_theme_mod( $active_site ); ?>"  <?php if( get_theme_mod( 'blackandwhite_url_path' ) ) : ?>target="_blank"<?php endif; ?> >
                    <?php if( $active_site == "vimeo") { ?>
                        <i class="fa fa-<?php echo $active_site; ?>-square"></i> <?php
                    } else { ?>
                        <i class="fa fa-<?php echo $active_site; ?>"></i><?php
                    } ?>
                </a>
            </li><?php
        }
        echo "</ul>";
    }
}

?>