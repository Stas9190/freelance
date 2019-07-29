<?php
/**
 * Safha One Page: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function safha_one_page_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'safha_one_page_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'safha-one-page' ),
	    'description' => __( 'Description of what this panel does.', 'safha-one-page' ),
	) );

	// font array
	$font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );
    
	//Typography
	$wp_customize->add_section( 'safha_one_page_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'safha-one-page' ),
		'priority'   => 30,
		'panel' => 'safha_one_page_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'safha_one_page_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'safha_one_page_paragraph_color', array(
		'label' => __('Paragraph Color', 'safha-one-page'),
		'section' => 'safha_one_page_typography',
		'settings' => 'safha_one_page_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('safha_one_page_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'safha_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'safha_one_page_paragraph_font_family', array(
	    'section'  => 'safha_one_page_typography',
	    'label'    => __( 'Paragraph Fonts','safha-one-page'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('safha_one_page_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('safha_one_page_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','safha-one-page'),
		'section'	=> 'safha_one_page_typography',
		'setting'	=> 'safha_one_page_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'safha_one_page_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'safha_one_page_atag_color', array(
		'label' => __('"a" Tag Color', 'safha-one-page'),
		'section' => 'safha_one_page_typography',
		'settings' => 'safha_one_page_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('safha_one_page_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'safha_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'safha_one_page_atag_font_family', array(
	    'section'  => 'safha_one_page_typography',
	    'label'    => __( '"a" Tag Fonts','safha-one-page'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'safha_one_page_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'safha_one_page_li_color', array(
		'label' => __('"li" Tag Color', 'safha-one-page'),
		'section' => 'safha_one_page_typography',
		'settings' => 'safha_one_page_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('safha_one_page_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'safha_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'safha_one_page_li_font_family', array(
	    'section'  => 'safha_one_page_typography',
	    'label'    => __( '"li" Tag Fonts','safha-one-page'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'safha_one_page_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'safha_one_page_h1_color', array(
		'label' => __('H1 Color', 'safha-one-page'),
		'section' => 'safha_one_page_typography',
		'settings' => 'safha_one_page_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('safha_one_page_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'safha_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'safha_one_page_h1_font_family', array(
	    'section'  => 'safha_one_page_typography',
	    'label'    => __( 'H1 Fonts','safha-one-page'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('safha_one_page_h1_font_size',array(
		'default'	=> '50px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('safha_one_page_h1_font_size',array(
		'label'	=> __('H1 Font Size','safha-one-page'),
		'section'	=> 'safha_one_page_typography',
		'setting'	=> 'safha_one_page_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'safha_one_page_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'safha_one_page_h2_color', array(
		'label' => __('h2 Color', 'safha-one-page'),
		'section' => 'safha_one_page_typography',
		'settings' => 'safha_one_page_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('safha_one_page_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'safha_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'safha_one_page_h2_font_family', array(
	    'section'  => 'safha_one_page_typography',
	    'label'    => __( 'h2 Fonts','safha-one-page'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('safha_one_page_h2_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('safha_one_page_h2_font_size',array(
		'label'	=> __('h2 Font Size','safha-one-page'),
		'section'	=> 'safha_one_page_typography',
		'setting'	=> 'safha_one_page_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'safha_one_page_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'safha_one_page_h3_color', array(
		'label' => __('h3 Color', 'safha-one-page'),
		'section' => 'safha_one_page_typography',
		'settings' => 'safha_one_page_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('safha_one_page_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'safha_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'safha_one_page_h3_font_family', array(
	    'section'  => 'safha_one_page_typography',
	    'label'    => __( 'h3 Fonts','safha-one-page'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('safha_one_page_h3_font_size',array(
		'default'	=> '36px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('safha_one_page_h3_font_size',array(
		'label'	=> __('h3 Font Size','safha-one-page'),
		'section'	=> 'safha_one_page_typography',
		'setting'	=> 'safha_one_page_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'safha_one_page_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'safha_one_page_h4_color', array(
		'label' => __('h4 Color', 'safha-one-page'),
		'section' => 'safha_one_page_typography',
		'settings' => 'safha_one_page_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('safha_one_page_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'safha_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'safha_one_page_h4_font_family', array(
	    'section'  => 'safha_one_page_typography',
	    'label'    => __( 'h4 Fonts','safha-one-page'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('safha_one_page_h4_font_size',array(
		'default'	=> '30px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('safha_one_page_h4_font_size',array(
		'label'	=> __('h4 Font Size','safha-one-page'),
		'section'	=> 'safha_one_page_typography',
		'setting'	=> 'safha_one_page_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'safha_one_page_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'safha_one_page_h5_color', array(
		'label' => __('h5 Color', 'safha-one-page'),
		'section' => 'safha_one_page_typography',
		'settings' => 'safha_one_page_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('safha_one_page_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'safha_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'safha_one_page_h5_font_family', array(
	    'section'  => 'safha_one_page_typography',
	    'label'    => __( 'h5 Fonts','safha-one-page'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('safha_one_page_h5_font_size',array(
		'default'	=> '25px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('safha_one_page_h5_font_size',array(
		'label'	=> __('h5 Font Size','safha-one-page'),
		'section'	=> 'safha_one_page_typography',
		'setting'	=> 'safha_one_page_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'safha_one_page_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'safha_one_page_h6_color', array(
		'label' => __('h6 Color', 'safha-one-page'),
		'section' => 'safha_one_page_typography',
		'settings' => 'safha_one_page_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('safha_one_page_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'safha_one_page_sanitize_choices'
	));
	$wp_customize->add_control(
	    'safha_one_page_h6_font_family', array(
	    'section'  => 'safha_one_page_typography',
	    'label'    => __( 'h6 Fonts','safha-one-page'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('safha_one_page_h6_font_size',array(
		'default'	=> '18px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('safha_one_page_h6_font_size',array(
		'label'	=> __('h6 Font Size','safha-one-page'),
		'section'	=> 'safha_one_page_typography',
		'setting'	=> 'safha_one_page_h6_font_size',
		'type'	=> 'text'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'safha_one_page_theme_color_option', 
		array( 'panel' => 'safha_one_page_panel_id', 'title' => esc_html__( 'Theme Color Option', 'safha-one-page' ) )
	);

  	$wp_customize->add_setting( 'safha_one_page_theme_color_first', array(
	    'default' => '#00c7fe',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'safha_one_page_theme_color_first', array(
  		'label' =>__( 'Color Option', 'safha-one-page' ),
	    'description' => __('One can change complete theme color on just one click.', 'safha-one-page'),
	    'section' => 'safha_one_page_theme_color_option',
	    'settings' => 'safha_one_page_theme_color_first',
  	)));

  	$wp_customize->add_setting( 'safha_one_page_theme_color_second', array(
	    'default' => '#01305c',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'safha_one_page_theme_color_second', array(
  		'label' =>__( 'Color Option', 'safha-one-page' ),
	    'description' => __('One can change complete theme color on just one click.', 'safha-one-page'),
	    'section' => 'safha_one_page_theme_color_option',
	    'settings' => 'safha_one_page_theme_color_second',
  	)));

	$wp_customize->add_section( 'safha_one_page_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'safha-one-page' ),
		'priority'   => 30,
		'panel' => 'safha_one_page_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('safha_one_page_layout_settings',array(
        'default' => __('Right Sidebar','safha-one-page'),
        'sanitize_callback' => 'safha_one_page_sanitize_choices'	        
	));
	$wp_customize->add_control('safha_one_page_layout_settings',array(
        'type' => 'radio',
        'label'     => __('Theme Sidebar Layouts', 'safha-one-page'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'safha-one-page'),
        'section' => 'safha_one_page_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','safha-one-page'),
            'Right Sidebar' => __('Right Sidebar','safha-one-page'),
            'One Column' => __('Full Width','safha-one-page'),
            'Grid Layout' => __('Grid Layout','safha-one-page')
        ),
	));

	//Topbar section
	$wp_customize->add_section('safha_one_page_contact_details',array(
		'title'	=> __('Topbar Section','safha-one-page'),
		'description'	=> __('Add Header Content here','safha-one-page'),
		'priority'	=> null,
		'panel' => 'safha_one_page_panel_id',
	));

	$wp_customize->add_setting('safha_one_page_email_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('safha_one_page_email_address',array(
		'label'	=> __('Add Email','safha-one-page'),
		'section'	=> 'safha_one_page_contact_details',
		'setting'	=> 'safha_one_page_email_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('safha_one_page_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('safha_one_page_time',array(
		'label'	=> __('Add Time','safha-one-page'),
		'section'	=> 'safha_one_page_contact_details',
		'setting'	=> 'safha_one_page_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('safha_one_page_contact_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('safha_one_page_contact_number',array(
		'label'	=> __('Add Phone Number','safha-one-page'),
		'section'	=> 'safha_one_page_contact_details',
		'setting'	=> 'safha_one_page_contact_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('safha_one_page_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('safha_one_page_facebook_url',array(
		'label'	=> __('Add Facebook link','safha-one-page'),
		'section'	=> 'safha_one_page_contact_details',
		'setting'	=> 'safha_one_page_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('safha_one_page_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('safha_one_page_twitter_url',array(
		'label'	=> __('Add Twitter link','safha-one-page'),
		'section'	=> 'safha_one_page_contact_details',
		'setting'	=> 'safha_one_page_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('safha_one_page_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('safha_one_page_youtube_url',array(
		'label'	=> __('Add Youtube link','safha-one-page'),
		'section'	=> 'safha_one_page_contact_details',
		'setting'	=> 'safha_one_page_youtube_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('safha_one_page_googleplus_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('safha_one_page_googleplus_url',array(
		'label'	=> __('Add Google Plus link','safha-one-page'),
		'section'	=> 'safha_one_page_contact_details',
		'setting'	=> 'safha_one_page_googleplus_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('safha_one_page_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('safha_one_page_linkedin_url',array(
		'label'	=> __('Add Linkedin link','safha-one-page'),
		'section'	=> 'safha_one_page_contact_details',
		'setting'	=> 'safha_one_page_linkedin_url',
		'type'	=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'safha_one_page_slider' , array(
    	'title'      => __( 'Slider Settings', 'safha-one-page' ),
		'priority'   => null,
		'panel' => 'safha_one_page_panel_id'
	) );

	$wp_customize->add_setting('safha_one_page_slider_arrows',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('safha_one_page_slider_arrows',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','safha-one-page'),
      	'section' => 'safha_one_page_slider',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'safha_one_page_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'safha_one_page_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'safha_one_page_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'safha-one-page' ),
			'section'  => 'safha_one_page_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	//Our Features
	$wp_customize->add_section('safha_one_page_features',array(
		'title'	=> __('Our Features Section','safha-one-page'),
		'description'	=> __('Add Our Features sections below.','safha-one-page'),
		'panel' => 'safha_one_page_panel_id',
	));

	$wp_customize->add_setting('safha_one_page_features_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('safha_one_page_features_title',array(
		'label'	=> __('Section Title','safha-one-page'),
		'section'	=> 'safha_one_page_features',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('safha_one_page_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('safha_one_page_text',array(
		'label'	=> __('Add Text','safha-one-page'),
		'section'	=> 'safha_one_page_features',
		'type'		=> 'text'
	));

	$categories = get_categories();
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';	
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('safha_one_page_features_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('safha_one_page_features_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display Latest Post','safha-one-page'),
		'section' => 'safha_one_page_features',
	));

	//Footer
	$wp_customize->add_section( 'safha_one_page_footer' , array(
    	'title'      => __( 'Footer Text', 'safha-one-page' ),
		'priority'   => null,
		'panel' => 'safha_one_page_panel_id'
	) );

	$wp_customize->add_setting('safha_one_page_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('safha_one_page_footer_text',array(
		'label'	=> __('Add Copyright Text','safha-one-page'),
		'section'	=> 'safha_one_page_footer',
		'setting'	=> 'safha_one_page_footer_text',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'safha_one_page_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'safha_one_page_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'safha_one_page_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Safha One Page 1.0
 * @see safha-one-page_customize_register()
 *
 * @return void
 */
function safha_one_page_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Safha One Page 1.0
 * @see safha-one-page_customize_register()
 *
 * @return void
 */
function safha_one_page_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function safha_one_page_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Safha_One_Page_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Safha_One_Page_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Safha_One_Page_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Safha One Page Pro', 'safha-one-page' ),
					'pro_text' => esc_html__( 'Go Pro', 'safha-one-page' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/one-page-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'safha-one-page-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'safha-one-page-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Safha_One_Page_Customize::get_instance();