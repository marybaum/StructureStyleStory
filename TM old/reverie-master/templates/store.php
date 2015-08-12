<?php
/*
	Template Name: Store
*/

get_header('');

?>

</div>

<!-- Row for main content area -->

<div id="intContainer">
	<div class="row">

		<div class="small-12 large-9 columns" id="content" role="main">

			<?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); ?>

			<?php /* Start loop */ ?>
			<?php while (have_posts()) : the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<header>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					<div class="entry-content">

						<?php the_content(); ?>

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