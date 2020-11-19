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


<section class="error-page">
    <div class="error-page-text">
        <h1>This is <span>not</span> the way.<h1>
        <h3>
            <a href="<?php echo site_url('/homepage/') ?>">Oops! This is not the page you are looking for. Click here to go back.</a>
        </h3>   
    </div>
</section> 
    
<?php get_footer(); ?>

