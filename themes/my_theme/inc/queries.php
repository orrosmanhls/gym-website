<?php

function gymfitness_classes_list($number_of_classes = -1)
{ ?>
    <ul class="classes-list">

        <?php
        // get all posts from post type of "gymfitness_classes" (custom type)
        // more info here: https://developer.wordpress.org/reference/classes/wp_query/

        $args = array(
            'post_type' =>  'gymfitness_classes',
            'posts_per_page'   => $number_of_classes
        );

        $classes = new WP_Query($args);

        while ($classes->have_posts()) :
            $classes->the_post();
        ?>
            <li class="gym-class card gradient">
                <?php the_post_thumbnail('mediumSize'); ?>

                <div class="card-content">
                    <a href="<?php the_permalink(); ?>">
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                    </a>

                    <?php
                    // Enter the fields names of custom "Classes" post type 
                    $class_days = get_field('class_days');
                    $start_time = get_field('start_time');
                    $end_time = get_field('end_time');
                    ?>
                    <p><?php echo "{$class_days} - from {$start_time} to {$end_time}"; ?></p>

                </div>


            </li>


        <?php endwhile;
        wp_reset_postdata(); ?>

    </ul>
<?php
}


// Display the Instructors

function gymfitness_instructors_list()
{ ?>
    <ul class="instructors-list">
        <?php
        $args = array('post_type' => 'instructors', 'posts_per_page' => -1);
        $instructors = new WP_Query($args);

        while ($instructors->have_posts()) :
            $instructors->the_post();
        ?>
            <li class="instructor">
                <?php the_post_thumbnail('mediumSize'); ?>
                <div class="content text-center">
                    <h3>
                        <?php the_title(); ?>
                    </h3>

                    <?php the_content(); ?>

                    <div class="specialty">
                        <?php
                        $specialty = get_field('specialty');

                        foreach ($specialty as $s) : ?>
                            <span class="tag">
                                <?php echo $s; ?>
                            </span>

                        <?php endforeach; ?>

                    </div>

                </div>
            </li>

        <?php endwhile;
        wp_reset_postdata(); ?>
    </ul>

<?php
}
