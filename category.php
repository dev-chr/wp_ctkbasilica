<?php get_header(); ?>

<section class="content" role="main">
	
<header class="header">
	
<h1 class="entry-title"><?php _e( '', 'blankslate' ); ?><?php single_cat_title(); ?></h1>

<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>

</header>

<?php 
	
	if ($_SERVER['REQUEST_URI'] == "/news/") {
	query_posts('cat=1&offset=5');
	}

	if ( have_posts() ) : while ( have_posts() ) : the_post(); 

	
	?>

<?php get_template_part( 'entry' ); ?>

<?php endwhile; endif; ?>

<?php get_template_part( 'nav', 'below' ); ?>

</section>

<?php get_footer(); ?>