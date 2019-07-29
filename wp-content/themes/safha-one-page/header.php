<?php
/**
 * The header for our theme 
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'safha-one-page' ) ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php if( get_theme_mod( 'safha_one_page_email_address','' ) != ''|| get_theme_mod( 'safha_one_page_time','' ) != '' || get_theme_mod( 'safha_one_page_facebook_url','' ) != ''|| get_theme_mod( 'safha_one_page_twitter_url','' ) != '' || get_theme_mod( 'safha_one_page_youtube_url','' ) != '' || get_theme_mod( 'safha_one_page_googleplus_url','' ) != '' || get_theme_mod( 'safha_one_page_linkedin_url','' ) != '') { ?>
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-11 offset-lg-1 col-md-12">
						<div class="row">
							<div class="col-lg-3 col-md-6">
					            <?php if( get_theme_mod( 'safha_one_page_email_address','' ) != '') { ?>
					                <span class="email"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('safha_one_page_email_address','') ); ?></span>
					            <?php } ?>
					        </div>
							<div class="col-lg-4 col-md-6">
								<?php if( get_theme_mod( 'safha_one_page_time','' ) != '') { ?>
					                <span class="time"><i class="far fa-clock" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('safha_one_page_time','' )); ?></span>
					            <?php } ?>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="social-icon">
									<?php if( get_theme_mod( 'safha_one_page_facebook_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'safha_one_page_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
									<?php } ?>
									<?php if( get_theme_mod( 'safha_one_page_twitter_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'safha_one_page_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
									<?php } ?>
									<?php if( get_theme_mod( 'safha_one_page_youtube_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'safha_one_page_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
									<?php } ?>
									<?php if( get_theme_mod( 'safha_one_page_googleplus_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'safha_one_page_googleplus_url','' ) ); ?>"><i class="fab fa-google-plus-g"></i></a>
									<?php } ?>
									<?php if( get_theme_mod( 'safha_one_page_linkedin_url') != '') { ?>
									    <a href="<?php echo esc_url( get_theme_mod( 'safha_one_page_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
									<?php } ?>
								</div>
							</div>
							<div class="col-lg-2 col-md-6">
								<?php if( get_theme_mod( 'safha_one_page_contact_number','' ) != '') { ?>
					                <span class="call"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('safha_one_page_contact_number','' )); ?></span>
					            <?php } ?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	<?php }?>
	<header id="masthead" class="site-header" role="banner">
		<div class="main-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4">
						<div class="<?php if(has_custom_logo()) { ?>logo-img"<?php } else { ?>logo-text"<?php } ?>">
							<?php if( has_custom_logo() ){ the_custom_logo();
				             }else{ ?>
				            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				            <?php $description = get_bloginfo( 'description', 'display' );
				            if ( $description || is_customize_preview() ) : ?> 
				              <p class="site-description"><?php echo esc_html($description); ?></p>
				            <?php endif; }?>
				        </div>
					</div>
					<div class="col-lg-9 col-md-8">
						<?php if ( has_nav_menu( 'top' ) ) : ?>
							<div class="navigation-top">
								<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="site-content-contain">
		<div id="content">