<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package activello
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="site-navigation-inner col-lg-3 col-lg-push-2">
						<div class="navbar-header">
							<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only"><?php _e( 'Toggle navigation', 'activello' ); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<?php activello_header_menu(); // main navigation ?>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 text-center">
						<img src="http://thejbac.com/jacuzziboysfavicon.png" style="height: 20%; width: 20%">
					</div>

<!-- 					<div class="site-navigation-outer col-lg-3 col-lg-pull-2" style="float: right">
					<?php wp_nav_menu('navigation-two'); 	?>
					</div> -->

			</div>
		</nav><!-- .site-navigation -->


		<?php
		$show_logo = true;
		$show_title = false;
		$show_tagline = true;
		$logo = get_theme_mod('header_logo', '');
		$header_show = get_theme_mod('header_show', 'logo-text');

		if( $header_show == 'logo-only' ){
			$show_tagline = false;
		}
		elseif( $header_show == 'title-only' ){
			$show_tagline = $show_logo = false;
		}
		elseif( $header_show == 'title-text' ){
			$show_logo = false;
			$show_title = true;
		}?>




<!-- 		<div style="background-color: #000; height: 100px"> -->
<!-- Not supposed to add in an image this way, but doing so now for timliness -->
<!-- 		<img src="http://thejbac.com/JBACClear.png" class="center-block" style="height: 75%; width: 75%">

		</div> -->

	</header><!-- #masthead -->


	<div id="content" class="site-content">



		<div class="top-section">
			<?php activello_featured_slider(); ?>
		</div>

<div class="container">
<?php
  $home_page_post_id = 40;
  $home_page_post = get_post( $home_page_post_id, ARRAY_A );
  $content_home = $home_page_post['post_content'];
  echo $content_home;
?>
</div>

<div id="content" class="narrowcolumn">


		<div class="container main-content-area">

			<?php if( is_single() && has_category() ) : ?>
			<div class="cat-title">
				<?php echo get_the_category_list(); ?>
			</div>
			<?php endif; ?>
                        <?php
                            global $post;
                            if( is_singular() && get_post_meta($post->ID, 'site_layout', true) ){
                                $layout_class = get_post_meta($post->ID, 'site_layout', true);
                            }
                            else{
                                $layout_class = get_theme_mod( 'activello_sidebar_position' );
                            }?>


			<div class="row">
				<div class="main-content-inner <?php echo activello_main_content_bootstrap_classes(); ?> <?php echo $layout_class; ?>">

