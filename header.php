<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<nav class="main-menu">
<div class="main-menu-wrapper">
Test of the Menu
</div>
</nav>
<header id="header" role="banner">
<section id="branding" class="clear">
<div id="site-title"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><h1></div>
<div id="site-description"><?php bloginfo( 'description' ); ?></div>
<a href="#" class="menu"><i class="fa fa-bars"></i></a>
<div id="search">
<?php get_search_form(); ?>
</div>
</section>
</header>
<div id="container clear">