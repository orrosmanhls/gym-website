<?php
/*
* Template Name: Page with sidebar
*/
get_header(); ?>

<main class="container page section with-sidebar">
    <div class="page-content">
        <!-- page-loop.php => 'page' + 'loop' (divided by dash [-])-->
        <!-- loop.php => 'template-parts/loop' (NOT divided by dash [-])-->
        <?php get_template_part('template-parts/page', 'loop'); ?>
    </div>
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>