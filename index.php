<?php
/**
 * Index file for the Rumble Inn theme blog
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
?>
<?php
get_header();
?>
<div id="blog" class="container-fluid">
	<div class="container">
		<?php
		if (have_posts()) {
			// Load posts loop.
			while (have_posts()) {
				the_post();
				get_template_part('template-parts/content/content');
			}
		} else {
			// If no content, include the "No posts found" template.
			get_template_part('404');
		}
		?>
	</div><!-- .site-main -->
</div><!-- .content-area -->
<?php
get_footer();
?>