<?php
/**
 * @package WordPress
 * @subpackage thema-new
 * @since thema-new 1.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="container mt+">
			<article class="post mt+" id="post-<?php the_ID(); ?>">
			
				<h2><?php the_title(); ?></h2>
			
				<?php posted_on(); ?>
			
				<div class="entry">
			
					<?php the_content(); ?>
			
					<?php wp_link_pages(array('before' => __('Pages: ','themanew'), 'next_or_number' => 'number')); ?>
			
				</div>
			
				<?php edit_post_link(__('Edit this entry','themanew'), '<p>', '</p>'); ?>
			
			</article>
		</div>
		
		<?php endwhile; endif; ?>


<?php get_footer(); ?>
