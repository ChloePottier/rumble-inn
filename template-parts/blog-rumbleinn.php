<?php

/**
 * Content of Index file for the Rumble Inn theme blog
 * @package WordPress
 * @subpackage rumble-inn
 * @since 1.0
 * @version 1.0
 */
get_header();
if (have_posts()) { ?>
	<div id="index-blog" class="container-fluid py-3">
		<div class="container">
			<div class="row pt-3 pb-3">
				<div class="col-12">
				<h1 itemprop="name"> <?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row pt-0 pt-md-3 pt-lg-0">
				<?php get_template_part('template-parts/content/content'); ?>
			</div>
		</div>
	</div>
<?php } else {
	get_template_part('404'); // sinon page non disponible
}
get_footer(); ?>