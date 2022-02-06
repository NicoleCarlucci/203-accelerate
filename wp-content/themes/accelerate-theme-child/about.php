<?php
/**
 * Template Name: About
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

	<!-- OUR SERVICES -->
  <section class="about-services">
    <div class="site-content">
      <h4 class="about-services-presentation">Our Services</h4>
			<p class="about-services-presentation">We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p>

      <ul class="about-services-list">
        <?php query_posts('posts_per_page=4&post_type=page'); ?>
 					 <!-- the loop -->
 					<?php while ( have_posts() ) : the_post();
            $about_service_1=get_field('about_service_1');
            $size="medium";
          ?>
            <li class="individual-about-service">
              <figure><?php echo wp_get_attachment_image($about_service_1, $size); ?></figure>
								<div class="service-description">
              		<h4><?php the_title(); ?></h4>
									<p><?php the_content(); ?></p>
								</div>
 						</li>
 					<?php endwhile; // end of the loop. ?>
 				<?php wp_reset_query(); // resets the altered query back to the original ?>
      </ul>
    </div>
  </section>

	<!-- CONTACT BUTTON -->
 	<section class="contact-section">
 		<div class="site-content">
 			<div class="contact-button">
 				<h4>Interested in working with us?</h4>
 				<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
 			</div>
 		</div>
 	</section>

<?php get_footer(); ?>
