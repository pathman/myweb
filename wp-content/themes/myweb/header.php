<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Bootstrap core CSS
=========================================== -->

<!-- Font Awesome Icons
=========================================== -->
<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/font-awesome/font-awesome.min.css" rel="stysheet">

<!-- Custum Css
=========================================== -->
<link href=" <?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/custum.css" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Raleway%3A400%2
' rel='stylesheet' type='text/css'>
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js
"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'my' ); ?></a>

<!-- HEADER
=========================================== -->
<header class="site-header" role="banner">
<!-- NAVBAR
=========================================== -->
<div class="navbar-wrapper">
    <div  class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle"
                        data-toggle="collapse"
                        data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation 
                    </span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                    
                </button>
                <a class="navbar-brand" href="/"><img src="<?php bloginfo(stylesheet_directory);?>/assets/img/logo.png" alt="Bootstrap to Wordpress"></a>
                
            </div><!-- navbar-header-->
                   <?php
            wp_nav_menu( array(
                    
                'theme_location'    => 'primary',
                'container'         => 'nav',
                'container_class'   =>'navbar-collapse collapse',
                'menu_class'        => 'nav navbar-nav navbar-right',
     
           ) );
            ?>
            
        </div> <!-- container--> 
    </div><!-- navbar-->
</div><!-- navbar-wrapper-->
</header>


	<div id="content" class="site-content">
