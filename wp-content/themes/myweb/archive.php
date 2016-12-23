 <?php

/**

* The template for displaying archive pages.

*

* Learn more: http://codex.wordpress.org/Template_Hierarchy

*

* @package Bootstrap to WordPress

*/

get_header(); ?>

<?php if ( have_posts() ) : ?>

<!-- FEATURE IMAGE -->

<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">

<h1 class="page-title">

<?php

if ( is_category() ) {

$title = sprintf( __( '%s' ), single_cat_title( '', false ) ); //Modified 'Category: %s' to '%s' by Carlos

} elseif ( is_tag() ) {

$title = sprintf( __( '%s' ), single_tag_title( '', false ) ); //Modified 'Tag: %s' to '%s' by Carlos

} elseif ( is_author() ) {

$title = sprintf( __( 'Author: %s' ), '<span>' . get_the_author() . '</span>' );

} elseif ( is_year() ) {

$title = sprintf( __( 'Year: %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );

} elseif ( is_month() ) {

$title = sprintf( __( 'Month: %s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );

} elseif ( is_day() ) {

$title = sprintf( __( 'Day: %s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );

} elseif ( is_tax( 'post_format' ) ) {

if ( is_tax( 'post_format', 'post-format-aside' ) ) {

$title = _x( 'Asides', 'post format archive title' );

} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {

$title = _x( 'Galleries', 'post format archive title' );

} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {

$title = _x( 'Images', 'post format archive title' );

} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {

$title = _x( 'Videos', 'post format archive title' );

} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {

$title = _x( 'Quotes', 'post format archive title' );

} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {

$title = _x( 'Links', 'post format archive title' );

} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {

$title = _x( 'Statuses', 'post format archive title' );

} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {

$title = _x( 'Audio', 'post format archive title' );

} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {

$title = _x( 'Chats', 'post format archive title' );

}

} elseif ( is_post_type_archive() ) {

$title = sprintf( __( 'Archives: %s' ), post_type_archive_title( '', false ) );

} elseif ( is_tax() ) {

$tax = get_taxonomy( get_queried_object()->taxonomy );

/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */

$title = sprintf( __( '%1$s: %2$s' ), $tax->labels->singular_name, single_term_title( '', false ) );

} else {

$title = __( 'Archives' );

}

?>

<?php

//the_archive_title();

echo $title;

?>

<?php

// Show an optional term description

$term_description = term_description();

if ( ! empty( $term_description ) ) :

printf( '<small>%s</small>', $term_description);

endif;

?>

</h1>

</section><!-- end .feature-image -->

<div class="container">

<div class="row" id="primary">

<main id="content">

<?php /* Start the Loop */ ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php

/* Include the Post-Format-specific template for the content.

* If you want to override this in a child theme, then include a file

* called content-___.php (where ___ is the Post Format name) and that will be used instead.

*/

get_template_part( 'content', get_post_format() );

?>

<?php endwhile; ?>

<?php the_posts_navigation(); ?>

<?php else : ?>

<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

</main><!-- end #content .col-sm-8 -->

<!-- SIDEBAR -->

<aside class="col-sm-4">

<?php get_sidebar(); ?>

</aside><!-- end .col-sm-4 -->

</div><!-- end .row #primary -->

</div><!-- end .container -->

<?php get_footer(); ?> 