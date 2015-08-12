<?php
/*
	Template Name: Ball Machines
*/

get_header('');

?>

</div>

<!-- Row for main content area -->

<div id="intContainer">
	<div class="row">

		<div class="small-12 large-9 columns" id="content" role="main">

			<?php /* Start loop */ ?>
			<?php while (have_posts()) : the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<header>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					<div class="entry-content">
						<?php the_content(); ?>

						<!-- Ball Machines Brands
						<?php if(get_field('ball_machines')): ?>
							<h2>Ball Machines</h2> -->

							<div class="row">
							<?php while(has_sub_field('ball_machines')): ?>

								<div class="large-3 columns machineSample">
									<a href="<?php the_sub_field('brand_product_page'); ?>"><img src="<?php the_sub_field('brand_logo'); ?>" /></a>
									<h3>
									<a href="<?php the_sub_field('brand_product_page'); ?>"><?php the_sub_field('brand_name'); ?></a>
										</h3>
							 	</div>

							<?php endwhile; ?>
							</div>
						<?php endif; ?>

						<!-- Stringing Machines Brands
						<?php if(get_field('stringing_machines')): ?>
							<h2>Stringing Machines</h2>

							<div class="row">
							<?php while(has_sub_field('stringing_machines')): ?>

								<div class="large-3 columns machineSample">
									<a href="<?php the_sub_field('brand_product_page'); ?>"><img src="<?php the_sub_field('brand_logo'); ?>" /></a>
									<h3><a href="<?php the_sub_field('brand_product_page'); ?>"><?php the_sub_field('brand_name'); ?></a></h3>
							 	</div>

							<?php endwhile; ?>
							</div>
						<?php endif; ?> -->



						<!--
						<?php if(get_field('ball_machines')): ?>

							<h2>Ball Machines</h2>-->

							<?php while(has_sub_field('ball_machines')): ?>

							<div class="machineSample">

								<h4><?php the_sub_field('brand'); ?></h4>
								<div class="row">
									<div class="large-4 columns"><img src="<?php the_sub_field('photo_1'); ?>" /></div>
									<div class="large-4 columns"><img src="<?php the_sub_field('photo_2'); ?>" /></div>
									<div class="large-4 columns"><img src="<?php the_sub_field('photo_3'); ?>" /></div>
								</div>
						 	</div>

							<?php endwhile; ?>
						<?php endif; ?>

				<!--		<?php if(get_field('stringing_machines')): ?>

							<h2>Stringing Machines</h2>

							<?php while(has_sub_field('stringing_machines')): ?>

							<div class="machineSample">

								<h4><?php the_sub_field('brand'); ?></h4>
								<div class="row">
									<div class="large-4 columns"><img src="<?php the_sub_field('photo_1'); ?>" /></div>
									<div class="large-4 columns"><img src="<?php the_sub_field('photo_2'); ?>" /></div>
									<div class="large-4 columns"><img src="<?php the_sub_field('photo_3'); ?>" /></div>
								</div>
						 	</div>

							<?php endwhile; ?>
						<?php endif; ?>
						-->

						<?php if(get_field('closing_text')) {
							echo get_field('closing_text');
						} ?>

					</div>
					<footer>
						<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
					</footer>
				</article>
			<?php endwhile; // End the loop ?>

		</div>


		<?php get_sidebar(); ?>


	</div>
</div>

<?php get_footer(); ?>