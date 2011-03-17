<?php
/**
 * Template Name: Publications
 *
 * This is the page template for Publications. It is used to list the publication post_type.
 *
 * @package DBC
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

	<?php do_atomic( 'before_content' ); // dbc_before_content ?>

	<div id="content">

		<?php do_atomic( 'open_content' ); // dbc_open_content ?>

		<div class="hfeed">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php do_atomic( 'before_entry' ); // dbc_before_entry ?>

					<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<?php do_atomic( 'open_entry' ); // dbc_open_entry ?>

						<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>

						<div class="entry-content">
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', hybrid_get_textdomain() ) ); ?>
							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', hybrid_get_textdomain() ), 'after' => '</p>' ) ); ?>
						</div><!-- .entry-content -->

						<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">[entry-edit-link]</div>' ); ?>

						<?php do_atomic( 'close_entry' ); // dbc_close_entry ?>

					</div><!-- .hentry -->

					<?php do_atomic( 'after_entry' ); // dbc_after_entry ?>

					<?php get_sidebar( 'after-singular' ); // Loads the sidebar-after-singular.php template. ?>

					<?php do_atomic( 'after_singular' ); // dbc_after_singular ?>

					<?php comments_template( '/comments.php', true ); // Loads the comments.php template. ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .hfeed -->
		
		
		<div id="publication-archive">
		
			<h2>First Cup - Weekly</h2>
			<div id="first-cup" class="publications">				

				<div id="first-cup-publications-inner">
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array (
						'paged' => $paged,
						'posts_per_page' => 9,
						'post_type' => 'publication',
						'publication-type' => 'first-cup'
					);
					
					query_posts( $args );
					while ( have_posts() ) : the_post(); 
						$args = array(
							'post_type' => 'attachment',
							'numberposts' => -1,
							'post_status' => null,
							'post_parent' => $post->ID
							); 
						$attachments = get_posts($args);
						if ($attachments) {
							foreach ($attachments as $attachment) {
								if ( $attachment->post_mime_type == 'application/pdf')
									$link = $attachment->guid;
							}
						}											
						?>
					
						<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">
					
							<div class="date"><?php the_time('F j, Y'); ?></div>
							<a href="<?php echo $link; ?>"><?php get_the_image( array( 'default_image' => THEME_URI .'/library/images/first-cup.gif', 'link_to_post' => false ) ); ?></a>
					
						</div><!-- .hentry -->
					
					<?php endwhile; ?>
	
					<div id="first-cup-pagination">
						<?php loop_pagination(); ?>
					</div>	
							
					<?php wp_reset_query(); ?>
				</div>
			</div><!-- #first-cup -->
			
			<h2>Common Ground - Monthly</h2>
			<div id="common-ground" class="publications">
				
				<div id="common-ground-publications-inner">
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array (
						'paged' => $paged,
						'posts_per_page' => 6,
						'post_type' => 'publication',
						'publication-type' => 'common-ground'
					);
					
					query_posts( $args );
					while ( have_posts() ) : the_post(); 
						$args = array(
							'post_type' => 'attachment',
							'numberposts' => -1,
							'post_status' => null,
							'post_parent' => $post->ID
							); 
						$attachments = get_posts($args);
						if ($attachments) {
							foreach ($attachments as $attachment) {
								if ( $attachment->post_mime_type == 'application/pdf')
									$link = $attachment->guid;
							}
						}											
						?>
					
						<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">
					
							<div class="date"><?php the_time('F Y'); ?></div>
							<a href="<?php echo $link; ?>"><?php get_the_image( array( 'default_image' => THEME_URI .'/library/images/common-ground.gif', 'link_to_post' => false ) ); ?></a>
					
						</div><!-- .hentry -->
					
					<?php endwhile; ?>
					
					<div id="common-ground-pagination">
						<?php loop_pagination(); ?>
					</div>
							
					<?php wp_reset_query(); ?>
				
				</div>
			</div><!-- #common-ground -->
		
			<div id="starting-point" class="publications">
				
				<h2>Starting Point - Quarterly</h2>
				<div class="publications-inner">
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array (
						'paged' => $paged,
						'posts_per_page' => 3,
						'post_type' => 'publication',
						'publication-type' => 'starting-point'
					);
					
					query_posts( $args );
					while ( have_posts() ) : the_post(); 
						$args = array(
							'post_type' => 'attachment',
							'numberposts' => -1,
							'post_status' => null,
							'post_parent' => $post->ID
							); 
						$attachments = get_posts($args);
						if ($attachments) {
							foreach ($attachments as $attachment) {
								if ( $attachment->post_mime_type == 'application/pdf')
									$link = $attachment->guid;
							}
						}											
						?>
					
						<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">
					
							<div class="date"><?php the_time('F j, Y'); ?></div>
							<a href="<?php echo $link; ?>"><?php get_the_image( array( 'default_image' => THEME_URI .'/library/images/starting-point.gif', 'link_to_post' => false ) ); ?></a>
					
						</div><!-- .hentry -->
					
					<?php endwhile; wp_reset_query();  ?>
					
					<div id="starting-point-pagination">
						<?php loop_pagination(); ?>
					</div>	
			
				</div>
			</div>
			
		</div><!-- #publication-archive -->

		<?php do_atomic( 'close_content' ); // dbc_close_content ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // dbc_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>