<?php get_header(); ?>

<main class="container page section">
    <?php while (have_posts()) : the_post(); ?>
        <ul class="blog-entries">
            <li class="card gradient">
                <h2>
                    <?php the_post_thumbnail('mediumSize'); ?>
                    <div class="card-content">
                        <a href="<?php echo the_permalink(); ?>">
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                        </a>

                        <p class="meta">
                            <span class="text-primary">By: </span>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                <?php echo get_the_author_meta('display_name'); ?>
                            </a>
                        </p>

                        <p class="date-publish meta">
                            <span class="text-primary">Date: </span>
                            <?php echo the_time(get_option('date_format')); ?>
                        </p>

                    </div>
                </h2>
            </li>
        </ul>

    <?php endwhile; ?>
</main>
<?php get_footer(); ?>