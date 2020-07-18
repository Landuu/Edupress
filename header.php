<!DOCTYPE html>
<html lang="PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edupress</title>

    <?php wp_head(); ?>
</head>

<body>

    <header>

        <div class="top-nav d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-auto d-inline-flex">
                        <div class="d-inline-flex flex-center-vert">
                            <box-icon class="icon" name='phone-call' type='solid' color='#ffffff'></box-icon>
                            <span class="contact-details ml-1">505 404 323</span>
                        </div>
                        <div class="vl"></div>
                        <div class="d-inline-flex flex-center-vert">
                            <box-icon class="icon" name='envelope' type='solid' color='#ffffff'></box-icon>
                            <span class="contact-details ml-1">kontakt@example.com</span>
                        </div>
                    </div>
                    <div class="col-auto d-inline-flex ml-auto">
                        <div class="d-inline-flex flex-center-vert">
                            <box-icon class="icon" name='search-alt-2' color='#ffffff'></box-icon>
                        </div>
                        <div class="vl"></div>
                        <div class="d-inline-flex flex-center-vert">
                            <box-icon class="icon" name='facebook-square' type='logo' color='#ffffff' ></box-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="logo-bar">
            <div class="container">
                <div class="row">
                    <div class="col d-inline-flex flex-center-vert">
                        <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                            echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
                        ?>
                        <div class="sitename ml-3">
                            <?php
                                $site_name  = get_bloginfo('name');
                                echo htmlspecialchars_decode($site_name);
                            ?>
                        </div>
                    </div>
                    <div class="col-auto ml-auto flex-center d-none d-md-flex">
                        <button class="btn btn-primary btn-dziennik">E-DZIENNIK</button>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container">
                <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    wp_nav_menu([
                        'theme_location'  => 'menu-main',
                        'depth'           =>  2,
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'bs-navbar-collapse-1',
                        'menu_class'      => 'navbar-nav mx-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          =>  new WP_Bootstrap_Navwalker(),
                    ]);
                ?>
            </div>
        </nav>

    </header>