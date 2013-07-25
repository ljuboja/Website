<?php
/**
 * Template Name: Home
 *
 * This template is for the Home page
 *
 * @package CSB
 * @subpackage Template
 */

get_header(); ?>

	<?php do_atomic( 'before_content' ); // dbc_before_content ?>

	<div id="content" role="main">

		<?php do_atomic( 'open_content' ); // dbc_open_content ?>

		<div class="hfeed">

			<?php get_template_part( 'slider-home' ); // loads slider-home.php ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<p class="page-links pages">' . __( 'Pages:', 'hybrid' ), 'after' => '</p>' ) ); ?>
					</div><!-- .entry-content -->

				</div><!-- .hentry -->

				<?php do_atomic( 'after_singular' ); // prototype_after_singular ?>

				<?php endwhile; ?>

			<?php else: ?>

				<p class="no-data">
					<?php _e( 'Apologies, but no results were found.', 'hybrid' ); ?>
				</p><!-- .no-data -->

			<?php endif; ?>

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // prototype_close_content ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // prototype_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>