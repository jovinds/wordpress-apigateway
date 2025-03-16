<h1>this is a page</h1>
<?php get_header();

    while(have_posts()) {
        the_post();
        ?> <h1><?php the_title() ?></h1><?php 
        the_content();
    }

    get_footer();
?>
