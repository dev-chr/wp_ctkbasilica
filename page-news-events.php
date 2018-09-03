<?php get_header(); ?>

<?php if (has_post_thumbnail()) :
        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail_name'); ?>
    
<img src="<?=$thumb[0];?>" class="feature-img">

<?php endif; ?>

<section id="content" role="main">

    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <section class="entry-content">         
            
            <?php the_content(); ?>
            
            <div class="news-feed">
            <h2 style="margin-bottom: -24px;">Recent</h2>
            <h1>News<h1>
                
            <?php

            $q = new WP_Query(array('cat'=>1, 'posts_per_page'=>5));

            if ($q->have_posts()) :
                while ($q->have_posts()) :
                    $q->the_post();


                                ?><h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail');
                }

                    echo "<p>".excerpt(30);
                    ?>
                    <a href="<?php the_permalink();?>">[read more]</a></p>
                    <?php
                endwhile;
            endif;
            ?>
            <hr />
        
            <a href="/news">&rarr; More past news...</a>
                
            </div>
            
            
            <div class="events-feed">
            <h2 style="margin-bottom: 0;">Upcoming</h2>
            <h1>Events</h1>
            
            <?php

            $q = new WP_Query(array('cat'=>3, 'posts_per_page'=>3));
            if ($q->have_posts()) :
                while ($q->have_posts()) :
                    $q->the_post();


                                ?><h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                <?php                  

                   $key_name = get_post_custom_values($key = 'Event-Date');
                   echo "<strong style='font-size: 1.1em;'>".$key_name[0]."</strong>";


                    echo "<p>".excerpt(20)."";
                    ?>
                    <a href="<?php the_permalink();?>">[read more]</a></p>
                    <?php
                endwhile;
            endif;
            ?>
            <hr />
                <a href="/events">&rarr; All upcoming events...</a>
            </div>
            
            <div class="entry-links"><?php wp_link_pages(); ?></div>
    
                </section>
    
            </article>

    
            <?php                                                                                                                                                                                                         endwhile;
endif; ?>

</section>


<?php get_footer(); ?>
