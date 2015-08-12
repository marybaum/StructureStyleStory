<?php
/*
	Template Name: Home page
*/

get_header('');

?>
</div>

	<!--div class="feature">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/tennis-machines-logo.png" /></a>
	</div-->

	<div class="homeBanner">
		<!-- content -->
	</div>

	<div class="homeIntro">
		<div class="row">
			<div class="large-9 large-centered columns">
				<h1>Globally recognized experts in ball machines and stringing machines.</h1>
				<p>Having trouble picking the right products out of today's huge array of choices?</p>
				<p>Here you'll find every brand, from major to minor. So you get completely unbiased advice &mdash; to steer you in the right direction for <strong>your</strong> facility's needs.</p>
			</div>
		</div>
	</div>

<!--begin homeMachines widget area-->

<?php

	if(is_active_sidebar('homeMachines-left') || is_active_sidebar('homeMachines-right')) {

	}  ?>

	<div class="homeMachines">
		<div class="row">
			<div class="large-6 columns">
	<?php dynamic_sidebar( 'homeMachines-left' );?>
			</div>

			<div class="large-6 columns">
	<?php dynamic_sidebar( 'homeMachines-right' );?>
			</div>
		</div>

		<div class="row" class="tagline">
			<h2>Tennis Machines is Prince's <em>Exclusive</em> Service Center.</h2>
		</div>
	</div> <!--end homeMachines widget area-->

	<!--begin homeSell area-->
	<div class="homeSell">
		<div class="row">
			<div class="large-6 columns">
				<h4>Have an old machine to offload?</h4>
				<h4>In the market for a gently used machine?</h4>
			</div>
			<div class="large-6 left columns">
				<a class="button" href="http://www.tennismachines.com/contact/">Talk to one of our experts!</a>
			</div>
		</div>
	</div><!--end homeSell area-->


<!--begin homeShop area-->
	<div class="homeShop">
		<div class="row">
			<div class="large-12 columns">
				<img src="<?php echo get_template_directory_uri(); ?>/img/shopSign.png" />
			</div>
		</div>

		<div class="row">
			<div class="large-5 columns">
				<h3>Stringing</h3>
				<p>Just minutes from Clayton and 170, we string with the best machines on the market, and our stringers have years of experience.</p>
				<a class="button" href="http://www.tennismachines.com/?post_type=product">Visit the Stringing Shop</a>
			</div>

			<div class="large-5 columns">
				<h3>Accessories</h3>
				<p>Ball hoppers, baskets, nets, windscreens, grips, string and more. Visit our shop at 8131 Delmar Boulevard, University City, Missouri 63130.</p>
				<a class="button" href="http://www.tennismachines.com/?post_type=product">Shop Accessories</a>
			</div>
		</div>
	</div>

	<div class="homeConsulting">

		<div class="row">
			<div class="large-6 columns">&nbsp;</div>
			<div class="large-6 columns">
				<h3>Consulting</h3>
				<p>A 30-year veteran in the tennis business, Terry Ward leads our tennis consulting practice.</p>
				<p>From building a new facility to structuring tennis pros' salaries, Terry has done it all. So whatever plans you're making to build your operation, he can steer you clear of expensive mistakes and show you the sweet spots of better revenue, wider margins and the great member experiences that drive every dollar.</p>
				<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=59/">learn more</a>
			</div>
		</div>

	</div>

<?php get_footer(); ?>


<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>

</body>
</html>