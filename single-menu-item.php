<?php
get_header();

$bg_image = get_theme_mod('single_portfolio_page_bg_image'); ?>

<div class="single-menu-item-main-content">
    <section class="single-menu-item__hero-section" style="background-image: url('<?php echo esc_url($bg_image); ?>'); background-size: cover; background-position: center;">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell">
                    <div class="single-menu-item__hero-section-title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $menu_item_single_content_one = get_field('menu_item_single_content_one');
    $menu_item_single_content_two = get_field('menu_item_single_content_two');
    $menu_item_single_content_three = get_field('menu_item_single_content_three');
    $menu_item_single_image_one = get_field('menu_item_single_image_one');
    $menu_item_single_image_two = get_field('menu_item_single_image_two');
    $menu_item_single_image_three = get_field('menu_item_single_image_three');

    if (!empty($menu_item_single_content_one || $menu_item_single_content_two || $menu_item_single_content_three || $menu_item_single_image_one || $menu_item_single_image_two || $menu_item_single_image_three)) : ?>
        <section class="single-menu-item__post-section">
            <div class="grid-container">
                <div class="grid-x grid-margin-x align-right">
                    <div class="cell small-12 medium-7">
                        <div class="single-menu-item__post-section__image-one">
                            <img src="<?php echo esc_attr($menu_item_single_image_one['sizes']['large']) ?>"
                                alt="<?php echo esc_attr($menu_item_single_image_one['alt']) ?>">
                        </div>
                    </div>
                    <div class="cell small-12 medium-5">
                        <div class="single-menu-item__post-section__content-one">
                            <?php echo ($menu_item_single_content_one) ?>
                        </div>
                    </div>
                </div>
                <div class="grid-x grid-margin-x align-bottom">
                    <div class="cell small-12 medium-8">
                        <div class="single-menu-item__post-section__image-two">
                            <img src="<?php echo esc_attr($menu_item_single_image_two['sizes']['large']) ?>"
                                alt="<?php echo esc_attr($menu_item_single_image_two['alt']) ?>">
                        </div>
                    </div>
                    <div class="cell small-12 medium-4">
                        <div class="single-menu-item__post-section__content-two">
                            <?php echo ($menu_item_single_content_two) ?>
                        </div>
                    </div>
                </div>
                <div class="grid-x grid-margin-x align-center-middle">
                    <div class="cell">
                        <div class="single-menu-item__post-section__content-three">
                            <?php echo ($menu_item_single_content_three) ?>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="single-menu-item__post-section__image-three">
                            <img src="<?php echo esc_attr($menu_item_single_image_three['sizes']['large']) ?>"
                                alt="<?php echo esc_attr($menu_item_single_image_three['alt']) ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="single-menu-item__pagination">
        <div class="grid-container">
            <nav class="post-navigation grid-x grid-margin-x align-justify align-middle text-center">

                <?php
                $prev_post = get_previous_post();
                if ($prev_post) :
                    $prev_url = get_permalink($prev_post->ID);
                    $prev_title = get_the_title($prev_post->ID);
                ?>
                    <div class="cell small-12 medium-4 text-center">
                        <a href="<?php echo esc_url($prev_url); ?>" class="pagination-title">
                            <div class="pagination-arrow">
                                <img src="/wp-content/themes/foodzero/src/assets/images/Icon_arrow-left.png" alt="Arrow Left">
                                <span>Previous Page</span>
                            </div>
                            <h5 class="post-title"><?php echo esc_html($prev_title); ?></h5>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="cell small-12 medium-4 text-center">
                    <a href="<?php echo site_url('/portfolio-page'); ?>" class="" aria-label="Back to all posts">
                        <img src="/wp-content/themes/foodzero/src/assets/images/Icon_back.png" alt="View All">
                    </a>

                </div>

                <?php
                $next_post = get_next_post();
                if ($next_post) :
                    $next_url = get_permalink($next_post->ID);
                    $next_title = get_the_title($next_post->ID);
                ?>
                    <div class="cell small-12 medium-4 text-center">
                        <a href="<?php echo esc_url($next_url); ?>" class="pagination-title">
                            <div class="pagination-arrow">
                                <span>Next Page</span>
                                <img src="/wp-content/themes/foodzero/src/assets/images/Icon_arrow-right.png" alt="Arrow Right">
                            </div>
                            <h5 class="post-title"><?php echo esc_html($next_title); ?></h5>
                        </a>
                    </div>
                <?php endif; ?>

            </nav>
        </div>
    </section>
</div>
<?php get_footer(); ?>