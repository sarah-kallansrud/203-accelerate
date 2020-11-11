<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

    <div id="primary" class="home-page hero-content">
            <div class="main-content" role="main">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; // end of the loop. ?>
            </div><!-- .main-content -->
    </div><!-- #primary -->

    <nav id="navigation" class="container">
        <h2>Interested in working with us?</h2>
	    <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
        
    </nav>

	

<?php get_footer(); ?>
