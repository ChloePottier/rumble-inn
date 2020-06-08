<?php

/**
 * Index file for the Rumble Inn theme blog
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
get_header();
if (have_posts()) { ?>
	<div id="index-blog" class="container-fluid py-3">
		<div class="container">
			<div class="row py-3 d-lg-none">
				<div class="col-12">
					<h1>Blog</h1>
				</div>
			</div>
			<div class="row ">
				<?php get_template_part('template-parts/content/content'); ?>
			</div>
		</div>
	</div>
<?php } else {
	get_template_part('404'); // sinon page non disponible
}
get_footer(); ?>