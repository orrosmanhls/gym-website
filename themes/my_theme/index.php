<!-- import header-->
<?php get_header(); ?>

<!-- import all posts-->
<?php while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
<?php endwhile; ?>

<!-- import footer-->
<?php get_footer(); ?>