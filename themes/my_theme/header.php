<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <!-- imports the stylesheets & fonts -->
</head>

<body>

    <header class="site-header">
        <div class="container header-grid">
            <div class="navigation-bar">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <!-- link to home page -->
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="logo">
                    </a>
                </div><!-- logo-->

                <!--add menu-->
                <?php
                $args = array('theme_location' => 'main-menu', 'container' => 'nav', 'container_class' => 'main-menu');
                wp_nav_menu($args);
                ?>

            </div><!-- nav-bar-->
        </div><!-- container-->
    </header>