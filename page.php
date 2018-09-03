<?php
  get_header();
  $ctkTheme = get_template_directory_uri();
?><?php if (has_post_thumbnail()) :
        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail_name'); ?>
    <img src="<?=$thumb[0];?>" class="feature-img"> <?php endif; ?>

    <section id="content" role="main">
        <?php if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>

        <article id="post-<?php the_ID(); ?>;" <?php post_class(); ?>>
            <section class="entry-content">
                <?php the_content(); ?><?php if (is_page(180)) {  ?>

                <h2>Featured Gallery</h2>

                <div class="gallery gallery-page">
                    <a href="<?php echo $ctkTheme; ?>/images/gallery/001.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/001.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/002.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/002.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/003.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/003.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/004.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/004.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/005.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/005.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/006.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/006.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/007.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/007.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/008.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/008.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/009.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/009.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/010.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/010.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/011.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/011.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/012.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/012.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/013.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/013.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/014.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/014.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/015.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/015.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/016.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/016.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/017.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/017.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/018.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/018.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/019.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/019.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/020.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/020.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/021.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/021.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/022.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/022.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/023.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/023.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/024.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/024.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/025.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/025.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/026.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/026.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/027.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/027.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/028.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/028.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/029.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/029.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/030.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/030.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/031.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/031.jpg"></figure><a href="<?php echo $ctkTheme; ?>/images/gallery/032.jpg"></a>

                    <figure><img src="<?php echo $ctkTheme; ?>/images/gallery/thumbs/032.jpg"></figure>
                </div><?php } ?>

                <div class="entry-links">
                    <?php wp_link_pages(); ?>
                </div>
            </section>
        </article><?php                                                                                                                                                                                                         endwhile;
        endif; ?>
    </section><?php get_footer(); ?>

