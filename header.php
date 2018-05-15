<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and header
 *
 * @package WordPress
 * @subpackage TTC
 * @since 1.0
 * @version 1.0
 */

wp_head(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tea Trade Cafe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/style.css">
</head>
<body>
	<header>
		<div class="stripe-pattern" height="100px">&nbsp;</div><div class="clearfix"></div>
		<hr><hr>
		<a href=<?php get_bloginfo( 'url' ); ?>"/home"><img id="logo" src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/logo.png"></a>
		<div class="nav">
			<ul>
				<li><a href=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/menu.pdf" target="_blank">menu</a></li>
				<li id="nav-loc"><a href="#loc-hrs-bar">Location</a></li>
				<li><a href=<?php get_bloginfo( 'url' ); ?>"/shop/">shop</a></li>
        <li><a href=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/catering-menu.pdf" target="_blank">catering</a></li>
			</ul>
		</div>
		<hr><hr>
	</header>