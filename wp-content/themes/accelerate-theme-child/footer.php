<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<p><?php bloginfo('description'); ?></p>
					<p>&copy; <?php bloginfo('title'); ?>, LLC
				</div>

				<nav class="social-media-navigation" role="navigation">
					<!--<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?> -->
					<div class="menu-social-media-nav-container">
						<ul id="menu-social-media-nav" class="social-media-menu">
							<li id="menu-item-47366" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-47366"><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiaXQifQ%3D%3D%22%7D"><i class="fab fa-twitter"><span class="screen-reader-text">Twitter</span></i></a></li>
							<li id="menu-item-47367" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-47367"><a href="https://www.facebook.com/"><i class="fab fa-facebook"><span class="screen-reader-text">Facebook</span></i></a></li>
							<li id="menu-item-47368" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-47368"><a href="https://www.linkedin.com/"><i class="fab fa-linkedin"><span class="screen-reader-text">LinkedIn</span></i></a></li>
						</ul>
					</div>
				</nav>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
