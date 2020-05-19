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
<div id="index-blog" class="container-fluid py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Blog</h1>
			</div>
		</div>
		<article id="post-<?php the_ID(); ?>" class="row">
			<?php $loop = new WP_Query(array('post_type' => 'post', 'paged' => $paged)); ?>
			<?php
			if (have_posts()) {
				while ($loop->have_posts()) : $loop->the_post();
					$image = get_field('image_article'); ?>
					<div class="col-12 col-md-6 d-flex pb-3 pb-md-0">
						<div class="image-blog w-50">
							<img src="<?php echo $image ?>" class="image-responsive-blog" />
						</div>
						<a href=" <?php the_field('lien_article'); ?>" class="content-blog w-50 py-2 px-3">
							<h5 class="text-uppercase font-family-cocogoose-light m-0 w-auto"><?php the_author(); ?></h5>
							<span class="date m-0"><?php the_date() ?></span>
							<h4 class="font-family-cocogoose pt-2 m-0"><?php the_field('titre_article'); ?></h4>
							<p class="m-0 text-justify"><?php the_field('detail_article'); ?></p>

						</a>
					</div>
					<!--  -->
				<?php endwhile; ?>
			<?php
				// while (have_posts()) {
				// 	get_template_part('template-parts/content/content');
				// }
			} else {
				// If no content, include the "No posts found" template.
				get_template_part('404');
			}
			?>
		</article>
	</div><!-- .site-main -->
</div><!-- .content-area -->
<?php
get_footer();
?>