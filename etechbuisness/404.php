<?php
get_header(); ?>

	<div class="entry-content title-404">
		<h2><i class="fa fa-ban"></i><?php _e( '404', 'consulting' ); ?></h2>
		<p><?php _e( 'Üzgünüz aradığınız şeyi bulamadık', 'consulting' ); ?><br/><?php _e( 'Lütfen yeniden aramayı deneyin.', 'consulting' ); ?></p>
		<?php get_search_form(); ?>
	</div>

<?php get_footer(); ?>