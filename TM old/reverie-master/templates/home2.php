<?php
/*
	Template Name: Home page
*/

get_header('');

?>
</div>

	<!--div id="feature">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/tennis-machines-logo.png" /></a>
	</div-->

	<div id="homeBanner">
		<img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" />
	</div>

	<div id="homeIntro">
		<div class="row">
			<div class="large-8 large-centered columns">
				<h1>Globally recognized experts in ball machines and stringing machines.</h1>
				<p>Are you having trouble picking the right products out of today's huge array of choices?</p>
				<p>We deal with all brands, we are unbiased, and we can steer you in the right direction for your ball machine &amp; stringing machine needs.</p>
			</div>
		</div>
	</div>

	<div id="homeMachines">
		<div class="row">
			<div class="large-6 columns">
				<div class="homeMachinesImage">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/ball-stringing-machines/"><img src="<?php echo get_template_directory_uri(); ?>/img/machineBall.png" /></a>
				</div>
				<div class="homeMachinesText">
					<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>/ball-stringing-machines/">Ball Machines</a></h3>
					<p>Check out our top sellers! We sell many different models and practice balls to go along with your purchase.</p>
					<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>/ball-stringing-machines/">Ball Machines</a>
				</div>
			</div>
			<div class="large-6 columns">
				<div class="homeMachinesImage">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/ball-stringing-machines/"><img src="<?php echo get_template_directory_uri(); ?>/img/machineStringing.png" /></a>
				</div>
				<div class="homeMachinesText">
					<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>/ball-stringing-machines/">Stringing Machines</a></h3>
					<p>We carry all of the best stringing machines on the market. Check out the options and talk to one of our experts.</p>
					<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>/ball-stringing-machines/">Stringing Machines</a>
				</div>
			</div>
		</div>
		<div class="row" id="tagline">
			<div class="large-12 columns">
				<h2>Tennis Machines is Prince's <em>Exclusive</em> Service Center</h2>
			</div>
		</div>
	</div>

	<div id="homeSell">
		<div class="row">
			<div class="large-6 columns">
				<h4>Do you have an old machine to offload?</h4>
				<h4>Would you like to buy a gently used machine?</h4>
			</div>
			<div class="large-6 left columns">
				<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>/sell-your-machine/">Talk to one of our experts</a>
			</div>
		</div>
	</div>

	<div id="homeShop">
		<div class="row">
			<div class="large-12 columns">
				<img src="<?php echo get_template_directory_uri(); ?>/img/shopSign.png" />
			</div>
		</div>
		<!--div id="shopSignContainer">
	        <div id="shopSign">
	        	<img src="<?php echo get_template_directory_uri(); ?>/img/shopSign.png" />
	        </div>
	    </div-->
		<div class="row">
			<div class="large-6 columns">
				<h3>Stringing</h3>
				<p>Just minutes from Clayton and 170, we string with the best machines on the market, and our stringers have years of experience.</p>
				<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>/the-shop/">Visit the Stringing Shop</a>
			</div>
			<!--div class="large-6 columns">
				<img src="<?php echo get_template_directory_uri(); ?>/img/shop.png" />
			</div-->
			<div class="large-6 columns">
				<h3>Accessories</h3>
				<p>Ball hoppers, baskets, nets, windscreens, grips, string and more. Visit our shop at 8131 Delmar Boulevard, University City, Missouri 63130.</p>
				<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>/the-shop/">Shop Accessories</a>
			</div>
		</div>
	</div>

	<div id="homeConsulting">

		<div class="row">
			<div class="large-6 columns">&nbsp;</div>
			<div class="large-6 columns">
				<h3>Consultation</h3>
				<p>With over 30 years in the tennis business, Terry Ward spearheads the Tennis Consulting business.</p>
				<p>From building a new facility to structuring tennis pros' salaries, Terry has done it all.</p>
				<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>court-consulting/">learn more</a>
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