<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="grid-container">
            <div class="grid-x margin-x align-middle">
                <div class="cell small-12 medium-4">
                    <?php if (!empty(get_custom_logo())): ?>
                        <div class="logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="cell small-12 medium-4">
                    <div data-responsive-toggle="menu" data-hide-for="xxxlarge">
                        <button class="menu-icon" type="button" data-toggle="menu"></button>
                    </div>
                    <div class="site-menu menu-overlay" id="menu">
                        <button class="close-menu">&times;</button>
                        <div class="menu-wrapper">
                            <?php wp_nav_menu(array(
                                'menu_class' => 'menu',
                                'theme_location' => 'primary_menu'
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="cell small-12 medium-4">
                    <div class="custom-menu menu align-right">
                        <?php wp_nav_menu(array(
                            'menu_class' => 'menu',
                            'theme_location' => 'custom_menu'
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>