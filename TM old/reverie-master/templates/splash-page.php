<?php
/*
	Template Name: Splash page
*/

get_header( 'splash' );

?>
</div>

	<div id="alert">
		<h5>Full Website Coming Soon</h5>
	</div>
	
	<img src="<?php echo get_template_directory_uri(); ?>/img/header.png" />
	
	<!--div id="feature">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/tennis-machines-logo.png" /></a>
	</div-->
	<img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" />
	<!--div id="feature-text">
		<?php the_field('featured_tagline'); ?>
	</div-->

	<!-- Row for main content area -->
	<div class="small-12 large-12 columns" id="main" role="main">
		<?php the_field('main_content'); ?>
	</div>

	<div class="small-12 large-12 columns" id="testimonial">
		<?php the_field('testimonial'); ?>
	</div>
		
	<div class="row"></div><!-- Row End -->
</div><!-- Container End -->

<footer id="footerSplash" class="full-width" role="contentinfo">
	<div class="row">
		<div class="large-12 columns">
			<?php the_field('footer'); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>