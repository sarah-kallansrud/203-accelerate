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

    <section class="our-services">
        <div class="site-content">
            <h4>Our Services</h4>
            <p>We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p>
            <ul class="about-services">
            <?php query_posts('posts_per_page=4&post_type=our_services'); ?>
                    <?php while ( have_posts() ) : the_post(); 
                        $image= get_field("image");
                        $size = "medium";
                        ?>
                        <li class="individual-services">
                            <figure>
                                <?php echo wp_get_attachment_image($image, $size); ?>
                            </figure>
                            <div class="services-text">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>
                            </div>
                        </li>
                    <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
		</ul>
        
        </div>



    </section>

    <nav id="navigation" class="container">
        <h2>Interested in working with us?</h2>
	    <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
    </nav>

	

<?php get_footer(); ?>
