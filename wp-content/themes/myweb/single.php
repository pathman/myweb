<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package myweb
 */

get_header(); ?>

    <section  class="feature-image feature-image-default-alt" data-type="background" data-speed="4">
        <h1 class="page-title" > Blog </h1>  
    </section>

	   <div class="container">
            <div class="row" id="primary">
                <main id="content" class="col-sm-8">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
                <aside class="col-sm-4">
                    <?php
get_sidebar(); ?>
                </aside>
	</div><!-- #primary -->
           </div> <!-- .container -->

<?php
get_sidebar();
get_footer();