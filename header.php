<!DOCTYPE html>
<html lang="PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edupress</title>

    <?php wp_head(); ?>
</head>

<body>

    <header class="sticky-top">

        <nav class="navbar  navbar-expand-lg navbar-light bg-light ">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    wp_nav_menu([
                        'theme_location'  => 'menu-main',
                        'depth'           =>  2,
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'bs-navbar-collapse-1',
                        'menu_class'      => 'navbar-nav ml-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          =>  new WP_Bootstrap_Navwalker(),
                    ]);
                ?>
            </div>
        </nav>

    </header>