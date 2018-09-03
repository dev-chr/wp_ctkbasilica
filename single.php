<?php get_header(); ?>


<?php if ( has_post_thumbnail() && is_singular() ) : 
        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail_name'); ?>
    
   <img src="<?=$thumb[0];?>" class="feature-img">
        
<?php endif; ?>

<section class="content" role="main">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'entry' ); ?>
		
	<?php endwhile; endif; ?>

	<footer class="footer">
	
		<?php get_template_part( 'nav', 'below-single' ); ?>
	
	</footer>

</section>

<?php get_footer(); ?>