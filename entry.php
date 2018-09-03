<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header>
		
		<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?>
		
	
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">			
		<?php the_title(); ?></a>
		
		<?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> 
		
		<p style="font-size: 1.2em; text-align: right; "><?php the_time( get_option( 'date_format' ) ); ?></p>

		<span style="float: right;"><?php edit_post_link(); ?></span>
		<div class="clear"></div>
		
		<hr />
		
		<?php 
		if ( !is_search() ) { 		
    		$content = get_the_content();
    		$content = preg_replace("/<img[^>]+\>/i", " ", $content);          
    		$content = apply_filters('the_content', $content);
    		$content = str_replace(']]>', ']]>', $content);
    		echo $content;
		}
			
		if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
		
	</header>
	
	<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>

</article>