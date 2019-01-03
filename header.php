<?php
/**
* Template Name: Header
*/
?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<title>

	<?php wp_title( '|', true, 'right' ); ?>

	<?php bloginfo('name'); ?>

	</title>

	<!-- Google Fonts -->

	<link href="https://fonts.googleapis.com/css?family=Oswald|Arsenal" rel="stylesheet">

	<?php wp_head() ?>

	<?php 
		global $post;
		global $mbc_img_path;
		$post_slug = isset( $post->post_name ) ? $post->post_name : null;
		$page_slug = 'page-'.$post_slug;
		$fouc      = 'fouc';
		$classes   = array( $page_slug );
	?>

	</head>

<body <?php body_class( $classes ) ?>>

<div id="top"></div><!-- #top -->

	<nav class="navbar navbar-default navbar-fixed-top navbar-lg">

			<div id="navbar" class="navbar-collapse collapse">

				<?php 
					$args = array(
					'menu'          => 'menu-1',
					'menu_class'    => 'nav navbar-nav',
					'container'     => 'false'
				);
					wp_nav_menu( $args );
				?>

			</div><!-- .navbar-collapse -->

	</nav><!-- .navbar .navbar-inverse .navbar-fixed-top -->

	<div id="navbar-sm">

		<?php include( 'partials/navbar-sm.php' ); ?> 

	</div><!-- #navbar-sm -->

<header>

	<div class="header">

		<div class="row">

			<?php if ( is_front_page() ) { ?>

				<div class="header-parallax bkgd-img" style="background-image: url( '<?php the_field( 'header_img', 'option' ); ?>' )">

					<div class="site-name">

						<img src="<?php the_field( 'logo', 'option' ) ?>">

						<h1><?php the_field( 'name', 'option' ); ?></h1>

						<p><?php the_field( 'description', 'option' ); ?></p>

					</div><!-- .site-name -->

				</div><!-- .header-parallax .bkgd-img -->

			<?php } else { ?>

			<?php } ?>

		</div><!-- .row -->

	</div><!-- .header -->

</header>











