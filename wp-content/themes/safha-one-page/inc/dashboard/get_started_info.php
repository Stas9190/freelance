<?php

add_action( 'admin_menu', 'safha_one_page_gettingstarted' );
function safha_one_page_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'safha-one-page'), esc_html__('About Theme', 'safha-one-page'), 'edit_theme_options', 'safha-one-page-guide-page', 'safha_one_page_guide');   
}

function safha_one_page_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', get_template_directory_uri() . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'safha_one_page_admin_theme_style');

function safha_one_page_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<p><img src="<?php echo esc_url( get_template_directory_uri() .'/inc/dashboard/media/logo.png' ); ?>" width="200"></p>
			<h2><?php esc_html_e( 'Thanks for installing Safha One Page Lite Theme', 'safha-one-page' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'safha-one-page' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=safha-one-page-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'safha-one-page' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'safha_one_page_notice');

/**
 * Theme Info Page
 */
function safha_one_page_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'safha-one-page' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
			<div class="intro">
				<div class="pad-box">
					<h2 align="center"><?php esc_html_e( 'Welcome to Safha One Page Theme', 'safha-one-page' ); ?>
					<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
					</span>
					<div class="powered-by">
						<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'safha-one-page' ); ?></strong></p>
						<p align="center">
							<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
						</p>
					</div>
				</div>
			</div>

			<div class="tab">
			  <button class="tablinks" onclick="openCity(event, 'lite_theme')">Getting Started</button>		  
			  <button class="tablinks" onclick="openCity(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Safha One Page Lite Theme', 'safha-one-page' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		</div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <p><?php esc_html_e( 'Safha One Page is a technologically advanced, flexible, clutter-free and super stylish one page WordPress theme which is developed to suit multiple businesses like corporate company, small enterprise, personal website, blog, portfolio, eCommerce portal, IT startup, web designing company, landing page, digital agencies, local business and any other vocation. Its design is beautifully and thoughtfully crafted to become perfect skin for any type of website giving the most professional look to any business. Its layout can be changed from boxed to full width to full screen so that website appearance and feel will change accordingly. Safha One Page is totally responsive, multilingual, cross-browser compatible, social media integrated and retina ready. It supports languages with RTL style. Its header and footer can be configured according to your needs and inclusion or exclusion of sidebar is totally up to you. It has call to action (CTA) button to convert mere website surfer to potential customer. It has a simple backend that comes handy for anyone using it for the first time.', 'safha-one-page' ); ?></p>
							<ol>
								<li><?php esc_html_e( 'Start','safha-one-page'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','safha-one-page'); ?></a> <?php esc_html_e( 'your website.','safha-one-page'); ?> </li>
								<li><?php esc_html_e( 'Safha One Page','safha-one-page'); ?> <a target="_blank" href="<?php echo esc_url( SAFHA_ONE_PAGE_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','safha-one-page'); ?></a> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>
				
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','safha-one-page'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( SAFHA_ONE_PAGE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'safha-one-page'); ?></a>
							<a href="<?php echo esc_url( SAFHA_ONE_PAGE_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'safha-one-page'); ?></a>
							<a href="<?php echo esc_url( SAFHA_ONE_PAGE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'safha-one-page'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','safha-one-page'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'This one page WordPress theme is powerful, bold, versatile, beautiful and well-structured with modern layout that perfectly fits all types of websites ranging from small business to large corporate company, online store, blog and portfolio. Array of advanced functionality will make potent website that will be ready to face tough competition without ever bloating. Amazing features and numerous design options aid you in designing a unique website that will make the most of your online presence and take your business to great height of success. This one page WordPress theme offers multiple choices for blog template, website layout, header and footer styles and menu styles so that you can decide the look of your website and give it personalized touch. We offer premium membership along with this premium theme wherein you get complete access to our customer support and regular theme updates for one year.', 'safha-one-page' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','safha-one-page'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Documention','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','safha-one-page'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','safha-one-page'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','safha-one-page'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( SAFHA_ONE_PAGE_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','safha-one-page'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( SAFHA_ONE_PAGE_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','safha-one-page'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','safha-one-page'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','safha-one-page'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','safha-one-page'); ?></a> <?php esc_html_e( 'your website.','safha-one-page'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','safha-one-page'); ?></h3>
						<ol>
							<a href="<?php echo esc_url( SAFHA_ONE_PAGE_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'safha-one-page'); ?></a>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php 
}?>