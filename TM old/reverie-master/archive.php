<?php /*
 Template Name: layout
 */

get_header();
 ?>

<div id="intContainer">
	<div class="row">
		<h1 class="archive-title"> <?php single_cat_title( '', true ); ?> </h1>

<!-- Row for main content area -->
	<div class="small-12 large-9 columns" id="content" role="main">

	<?php if ( have_posts() ) : ?>

		<ul class="large-block-grid-3">

			<?php /* Start loop */ ?>
			<?php while (have_posts()) : the_post(); ?>

				<li>

				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<header>
						<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</header>
					<div class="entry-content">
						<figure><a href="<?php the_permalink(); ?>">
							<?php
							if (has_post_thumbnail()) {
								the_post_thumbnail('small');
							}
 ?></a></figure>
								<?php the_excerpt(); ?>

					</div>
					<footer>
						<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>')); ?>
					</footer>
				</article>
				</li>
			<?php endwhile; // End the loop ?>
			</ul>


		<?php else : ?>
			<?php echo "<p>Weird. Do we have a broken link?</p>"; ?>

	<?php endif; // end have_posts() check ?>

	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link(__('&larr; Older posts', 'reverie')); ?></div>
			<div class="post-next"><?php previous_posts_link(__('Newer posts &rarr;', 'reverie')); ?></div>
		</nav>
	<?php } ?>

	</div>

<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>