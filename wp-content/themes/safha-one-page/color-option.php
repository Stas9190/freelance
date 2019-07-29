<?php
	
	$safha_one_page_theme_color_first = get_theme_mod('safha_one_page_theme_color_first');

	$custom_css = '';

	if($safha_one_page_theme_color_first != false){
		$custom_css .='span.carousel-control-prev-icon i:hover,span.carousel-control-next-icon i:hover, .readbutton a:hover, #features hr, .woocommerce span.onsale, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, nav.woocommerce-MyAccount-navigation ul li, .post-link a:hover, .post-info, #sidebox h2, button.search-submit:hover, .search-form button.search-submit, .copyright, .widget .tagcloud a:hover,.widget .tagcloud a:focus,.widget.widget_tag_cloud a:hover,.widget.widget_tag_cloud a:focus,.wp_widget_tag_cloud a:hover,.wp_widget_tag_cloud a:focus, .main-navigation li li a:hover,.main-navigation li li a.focus, button,input[type="button"],input[type="submit"], .prev.page-numbers:focus,.prev.page-numbers:hover,.next.page-numbers:focus,.next.page-numbers:hover{';
			$custom_css .='background-color: '.esc_html($safha_one_page_theme_color_first).';';
		$custom_css .='}';
	}
	if($safha_one_page_theme_color_first != false){
		$custom_css .='.social-icon{
			background: linear-gradient(90deg,'.esc_html($safha_one_page_theme_color_first).' 100%, #132f5c 0%);
		}';
	}
	if($safha_one_page_theme_color_first != false){
		$custom_css .='a, .readbutton a,.main-navigation li li:focus > a,.main-navigation a:hover,span.call i, .main-navigation ul ul li a, .social-icon i:hover{';
			$custom_css .='color: '.esc_html($safha_one_page_theme_color_first).';';
		$custom_css .='}';
	}
	if($safha_one_page_theme_color_first != false){
		$custom_css .='span.carousel-control-next-icon i, span.carousel-control-prev-icon i, .main-navigation ul ul, .readbutton a, .post-link a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, span.carousel-control-prev-icon i:hover, span.carousel-control-next-icon i:hover, .social-icon i, .social-icon i:hover{';
			$custom_css .='border-color: '.esc_html($safha_one_page_theme_color_first).';';
		$custom_css .='}';
	}
	
	if($safha_one_page_theme_color_first != false){
		$custom_css .='.site-footer ul li a:hover{';
			$custom_css .='color: '.esc_html($safha_one_page_theme_color_first).'!important;';
		$custom_css .='}';
	}

	/*---------------------------Theme color option-------------------*/

	$safha_one_page_theme_color_second = get_theme_mod('safha_one_page_theme_color_second');

	if($safha_one_page_theme_color_second != false){
		$custom_css .='button:hover,button:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus, .search-box span i, .site-footer{';
			$custom_css .='background-color: '.esc_html($safha_one_page_theme_color_second).';';
		$custom_css .='}';
	}

	if($safha_one_page_theme_color_second != false){
		$custom_css .='.logo-text h1 a, #slider .inner_carousel h2, #features h3, #features h4 a, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .blogger h3 a, .post-link a, span.carousel-control-next-icon i, span.carousel-control-prev-icon i, h2.woocommerce-loop-product__title, .woocommerce div.product .product_title,#slider .inner_carousel p{';
			$custom_css .='color: '.esc_html($safha_one_page_theme_color_second).';';
		$custom_css .='}';
	}

	if($safha_one_page_theme_color_second != false){
		$custom_css .='#sidebox .widget, .post-link a{';
			$custom_css .='border-color: '.esc_html($safha_one_page_theme_color_second).';';
		$custom_css .='}';
	}


	if($safha_one_page_theme_color_first != false || $safha_one_page_theme_color_second != false){
		$custom_css .='.topbar{
		background: linear-gradient(90deg, '.esc_html($safha_one_page_theme_color_first).' 78%, '.esc_html($safha_one_page_theme_color_second).' 20%);
	 	}';
	}