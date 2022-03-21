<?php get_header(); ?>

<main class="container page section">
    <?php
    $author = get_queried_object()


    ?>
    <h2 class="text-center">
        <!-- Access data in Objects: "->" (equivalent to {key} in JS), "points" to the key -->
        Author: <?php echo $author->data->display_name; ?>
    </h2>
    <p class="text-center">
        About the author: <?php echo get_the_author_meta('description'); ?>
    </p>
    <?php get_template_part('template-parts/blog', 'loop'); ?>
</main>
<?php get_footer(); ?>