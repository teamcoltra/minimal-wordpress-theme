<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<!-- wFDpP5CWcLeBpj6Su4ZS8PVJbOY -->

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> <?php } ?><?php wp_title(); ?></title>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,800' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">

</style>

<?php wp_head(); ?>
</head>
<body>

<div id="container">


<div id="header">
	<a href="<?php echo get_option('home'); ?>/"><?php echo get_avatar(get_bloginfo( admin_email )); ?></a>
		<h2><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h2>
		<div class="about"><?php bloginfo('description'); ?></div>
		<div class="headlinks"><?php wp_nav_menu( array('menu' => 'headlinks' )); ?></div>
</div>