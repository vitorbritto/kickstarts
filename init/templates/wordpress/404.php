<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Project Name
 */

get_header(); ?>

<section class="main-content">

		<header class="page-header">
			<h1 class="page-title"><?php _e('Not Found', THEME_NAME); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php _e('It looks like nothing was found at this location. Maybe try a search?', THEME_NAME); ?></p>

			<?php get_search_form(); ?>
		</div><!-- .page-content -->

</section>

<?php
get_footer();