<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>

<nav id="nav-below" class="navigation" role="navigation">

<?php echo paginate_links(); ?>

</nav>
<?php } ?>