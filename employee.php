<?php


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
employee
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				/**
                 * Comment Template
                 * 
                 * @hooked blossom_shop_comment
                */
                do_action( 'blossom_shop_after_page_content' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();