<?php
get_header(); ?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php the_posts_pagination( array(
					'mid_size' => 2,
					'prev_text' => __( '<i class="fa fa-angle-left"></i>', 'consulting' ),
					'next_text' => __( '<i class="fa fa-angle-right"></i>', 'consulting' ),
				) ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>

<?php get_footer(); ?>