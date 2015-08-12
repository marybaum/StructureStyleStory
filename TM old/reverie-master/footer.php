<footer id="footer" role="contentinfo">
	<div class="row">
		<div class="large-4 columns">
			<?php wp_nav_menu( array('menu' => 'footer_menu' )); ?>

			<!--a href="#" class="socialMedia"><img src="<?php echo get_template_directory_uri(); ?>/img/smFacebook.jpg" /></a>
			<a href="#" class="socialMedia"><img src="<?php echo get_template_directory_uri(); ?>/img/smTwitter.jpg" /></a-->

			<div class="clear"></div>

			<div class="row">
				<div class="large-12 columns">
					<h4>(314) 725-2365</h4>
					<p>Tennis Machines Sales &amp; Service<br />
					8131 Delmar Blvd. <br />
					University City, MO 63130</p>
					<h4>Note new store hours:</h4>
					<p>Mon-Fri 9-4 or by appointment.</p>

					<p>Put our directions in your phone! Click on the map, and you'll pull up Google Maps. Then, save. It's that easy!</p>

					<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
				</div>
			</div>
		</div>

		<div class="large-5 columns end" id="footerDirections">
			<a href="https://www.google.com/maps/d/edit?mid=zMguMvV8fcwU.kHDveOrHthg0"><img src="<?php echo get_template_directory_uri(); ?>/img/map.jpg" /></a>
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