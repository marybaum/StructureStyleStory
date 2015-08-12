<?php
/*
	Template Name: Machines Brand
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

						<!-- Products Loop -->
						<?php if(get_field('product')): ?>

							<!--<h2>Products</h2>-->

							<?php while(has_sub_field('product')): ?>

								<div class="machineBrand">
								<div class="row">

									<div class="large-5 columns">
										<img src="<?php the_sub_field('photo'); ?>" />
								 	</div>

								 	<div class="large-7 columns">
								<h4><?php the_sub_field('title'); ?></h4>
										<?php the_sub_field('text'); ?>
								 	</div>
								</div>
								</div>

							<?php endwhile; ?>
						<?php endif; ?>

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