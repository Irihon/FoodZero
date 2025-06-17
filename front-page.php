<?php get_header(); ?>

<div class="main-content">
    <?php
    $hero_section_image = get_field('hero_section_image');
    $hero_section_content = get_field('hero_section_content');
    $hero_section_image_2 = get_field('hero_section_image_2');
    $hero_section_content_2 = get_field('hero_section_content_2');
    $hero_section_image_3 = get_field('hero_section_image_3');
    $hero_section_content_3 = get_field('hero_section_content_3');
    $hero_sticker_1 = get_field('hero_sticker_1');
    $hero_sticker_2 = get_field('hero_sticker_2');
    $hero_sticker_3 = get_field('hero_sticker_3');
    $hero_scroll = get_field('hero_scroll');

    $menu_section_content = get_field('menu_section_content');
    $menu_section_item = get_field('menu_section_item');
    $menu_section_item_2 = get_field('menu_section_item_2');
    $menu_section_item_3 = get_field('menu_section_item_3');
    $menu_section_item_4 = get_field('menu_section_item_4');

    $cook_section_image = get_field('cook_section_image');
    $cook_section_content = get_field('cook_section_content');

    $advantages_section_card = get_field('advantages_section_card');
    $advantages_section_card_2 = get_field('advantages_section_card_2');
    $advantages_section_card_3 = get_field('advantages_section_card_3');



    $categories_section_content = get_field('categories_section_content');


    if (!empty($hero_section_image || $hero_section_content || $hero_section_image_2 || $hero_section_content_2 || $hero_section_image_3 || $hero_section_content_3)): ?>
        <section class="hero-section">
            <?php if (!empty($hero_section_image)): ?>
                <div class="hero-section__image">
                    <img src="<?php echo esc_attr($hero_section_image['sizes']['large']) ?>"
                        alt="<?php echo esc_attr($hero_section_image['alt']) ?>">
                </div>
            <?php endif; ?>

            <?php if (!empty($hero_sticker_1 || $hero_sticker_2 || $hero_sticker_3)) : ?>
                <div class="hero_stickers">
                    <img class="hero_sticker_one" src="<?php echo esc_attr($hero_sticker_1['sizes']['large']) ?>"
                        alt="<?php echo esc_attr($hero_sticker_1['alt']) ?>">
                    <img class="hero_sticker_two" src="<?php echo esc_attr($hero_sticker_2['sizes']['large']) ?>"
                        alt="<?php echo esc_attr($hero_sticker_2['alt']) ?>">
                    <img class="hero_sticker_three" src="<?php echo esc_attr($hero_sticker_3['sizes']['large']) ?>"
                        alt="<?php echo esc_attr($hero_sticker_3['alt']) ?>">
                </div>
            <?php endif; ?>

            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <?php if (!empty($hero_section_content)): ?>
                        <div class="cell small-12">
                            <div class="hero-section__content">
                                <?php echo ($hero_section_content) ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($hero_scroll)): ?>
                        <div class="cell">
                            <div class="hero-scroll">
                                <?php echo ($hero_scroll) ?>
                                <div class="divider"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (!empty($hero_section_image_2 || $hero_section_content_2 || $hero_section_image_3 || $hero_section_content_3)): ?>
                    <div class="grid-x grid-margin-x">
                        <?php if (!empty($hero_section_image_2 || $hero_section_content_2)): ?>
                            <div class="cell small-12 medium-6">
                                <div class="hero-image__left">
                                    <img src="<?php echo esc_attr($hero_section_image_2['sizes']['large']) ?>"
                                        alt="<?php echo esc_attr($hero_section_image_2['alt']) ?>">
                                    <?php echo ($hero_section_content_2) ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($hero_section_image_3 || $hero_section_content_3)): ?>
                            <div class="cell small-12 medium-6">
                                <div class="hero-image__right">
                                    <?php echo ($hero_section_content_3) ?>
                                    <img src="<?php echo esc_attr($hero_section_image_3['sizes']['large']) ?>"
                                        alt="<?php echo esc_attr($hero_section_image_3['alt']) ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($menu_section_content || $menu_section_item || $menu_section_item_price || $menu_section_item_name ||  $menu_section_item_description || $menu_section_item_2 ||
        $menu_section_item_3 || $menu_section_item_4)) : ?>
        <section class="menu-section">
            <img class="menu-sticker" src="/wp-content/themes/foodzero/src/assets/images/menu-sticker.png" alt="">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <?php if (!empty($menu_section_content)) : ?>
                        <div class="cell">
                            <div class="menu-section__content">
                                <?php echo ($menu_section_content) ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="grid-x grid-margin-x">
                    <?php if (!empty($menu_section_item || $menu_section_item_price || $menu_section_item_name ||  $menu_section_item_description || $menu_section_item_2 || $menu_section_item_3 || $menu_section_item_4)) : ?>
                        <div class="cell small-12 medium-6">
                            <div class="menu-section__price">
                                <?php echo  $menu_section_item['menu_section_item_price'] ?>
                            </div>
                            <hr>
                            <div class="menu-section__descriprion">
                                <?php echo  $menu_section_item['menu_section_item_name'] ?>
                            </div>
                        </div>
                        <div class="cell small-12 medium-6">
                            <div class="menu-section__price">
                                <?php echo  $menu_section_item_2['menu_section_item_price'] ?>
                            </div>
                            <hr>
                            <div class="menu-section__descriprion">
                                <?php echo  $menu_section_item_2['menu_section_item_name'] ?>
                            </div>
                        </div>
                        <div class="cell small-12 medium-6">
                            <div class="menu-section__price">
                                <?php echo  $menu_section_item_3['menu_section_item_price'] ?>
                            </div>
                            <hr>
                            <div class="menu-section__descriprion">
                                <?php echo  $menu_section_item_3['menu_section_item_name'] ?>
                            </div>
                        </div>
                        <div class="cell small-12 medium-6">
                            <div class="menu-section__price">
                                <?php echo  $menu_section_item_4['menu_section_item_price'] ?>
                            </div>
                            <hr>
                            <div class="menu-section__descriprion">
                                <?php echo  $menu_section_item_4['menu_section_item_name'] ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($cook_section_image || $cook_section_content)) : ?>
        <section class="cook-section">

            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <?php if (!empty($cook_section_image || $cook_section_content)) : ?>
                        <div class="cell small-12 medium-6">
                            <div class="cook-section__image">
                                <img src="<?php echo esc_attr($cook_section_image['sizes']['large']) ?>"
                                    alt="<?php echo esc_attr($cook_section_image['alt']) ?>">
                            </div>
                        </div>
                        <div class="cell small-12 medium-6">
                            <div class="cook-section__content">
                                <?php echo ($cook_section_content) ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($advantages_section_card || $advantages_section_card_2 || $advantages_section_card_3)) : ?>
        <section class="advantages-section">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <?php if (!empty($advantages_section_card)) : ?>
                        <div class="cell small-12 medium-4">
                            <div class="advantages-section__card">
                                <div class="advantages-section__card-icon">
                                    <img src="<?php echo esc_url($advantages_section_card['advantages_section_card_icon']['url']); ?>"
                                        alt="<?php echo esc_attr($advantages_section_card['advantages_section_card_icon']['alt']); ?>">
                                </div>
                                <div class="advantages-section__card-content">
                                    <?php echo $advantages_section_card['advantages_section_card_content']; ?>
                                </div>
                            </div>
                        </div>

                        <div class="cell small-12 medium-4">
                            <div class="advantages-section__card">
                                <div class="advantages-section__card-icon">
                                    <img src="<?php echo esc_url($advantages_section_card_2['advantages_section_card_icon_2']['url']); ?>"
                                        alt="<?php echo esc_attr($advantages_section_card_2['advantages_section_card_icon_2']['alt']); ?>">
                                </div>
                                <div class="advantages-section__card-content">
                                    <?php echo $advantages_section_card_2['advantages_section_card_content_2']; ?>
                                </div>
                            </div>
                        </div>

                        <div class="cell small-12 medium-4">
                            <div class="advantages-section__card">
                                <div class="advantages-section__card-icon">
                                    <img src="<?php echo esc_url($advantages_section_card_3['advantages_section_card_icon_3']['url']); ?>"
                                        alt="<?php echo esc_attr($advantages_section_card_3['advantages_section_card_icon_3']['alt']); ?>">
                                </div>
                                <div class="advantages-section__card-content">
                                    <?php echo $advantages_section_card_3['advantages_section_card_content_3']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="latest-posts">
        <div class="grid-container">
            <?php
            $args = array(
                'post_type' => 'test',
                'posts_per_page' => '2',
                'post_status' => 'publish',
                'order' => 'ASC'
            );

            $test_query = new WP_Query($args);
            ?>

            <?php if ($test_query->have_posts()): ?>
                <div class="grid-x grid-margin-x">
                    <?php while ($test_query->have_posts()): $test_query->the_post(); ?>
                        <div class="cell small-12 medium-6">
                            <div class="latest-posts__card">
                                <?php if (has_post_thumbnail()): ?>
                                    <div class="latest-posts__card-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('large'); ?>
                                        </a>
                                        <a class="image-button" href="<?php the_permalink(); ?>">Fashion</a>
                                    </div>
                                <?php endif; ?>
                                <div class="latest-posts__card-data">
                                    <?php
                                    // Display author's avatar
                                    echo get_avatar(get_the_author_meta('ID'), 60);
                                    ?>

                                    <!-- Author's name -->
                                    <span class="nickname"><?php the_author(); ?></span>
                                    <span class="dot"></span>

                                    <!-- Post date -->
                                    <span class="date"><?php echo get_the_date('F j, Y'); ?></span>
                                    <span class="dot"></span>

                                    <!-- Post time -->
                                    <span class="time"><?php echo get_the_time('g:i a'); ?></span>
                                    <span class="dot"></span>

                                    <!-- Number of comments -->
                                    <span class="comments">
                                        <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                                    </span>
                                </div>
                                <div class="latest-posts__card-content">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <div class="latest-posts__card-fs">
                                        <?php
                                        $content = get_the_content();
                                        $first_sentence = wp_trim_words($content, 20, ''); // Adjust word count as needed
                                        echo esc_html($first_sentence);
                                        ?>
                                    </div>
                                </div>
                                <div class="read-more">
                                    <a href="<?php the_permalink(); ?>">
                                        Read More <span class="arrow">&rarr;</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php get_template_part('template-parts/section', 'reservation');
    ?>

    <?php if (!empty($categories_section_content)): ?>
        <section class="categories-section">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-12">
                        <div class="categories-section__content">
                            <?php echo ($categories_section_content) ?>
                        </div>
                    </div>
                </div>

                <?php
                $terms = get_terms([
                    'taxonomy'   => 'menu-category',
                    'hide_empty' => false,
                    'orderby'    => 'id',
                    'order'      => 'ASC',
                    'number'     => 3,
                ]);

                if (!empty($terms) && !is_wp_error($terms)) : ?>
                    <div class="grid-x grid-margin-x">
                        <?php foreach ($terms as $term) :
                            $image = get_field('category_image', 'menu-category_' . $term->term_id);
                            $bg_url = !empty($image['url']) ? esc_url($image['url']) : '';
                            $term_link = get_term_link($term);
                        ?>
                            <div class="cell small-12 medium-4">
                                <a href="<?php echo esc_url($term_link); ?>"
                                    class="menu-category-tile"
                                    style="background-image: url('<?php echo $bg_url; ?>');">
                                    <div class="menu-category-title">
                                        <?php echo esc_html($term->name); ?>
                                        <span class="arrow">&rarr;</span>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else : ?>
                    <p>No menu categories found.</p>
                <?php endif; ?>


            </div>
        </section>
    <?php endif; ?>

    <section class="testimonial-section">
        <div class="grid-container">
            <?php
            $args = array(
                'post_type' => 'testimonial',
                'posts_per_page' => -1,
            );
            $slider_query = new WP_Query($args);
            if ($slider_query->have_posts()) :
                $count = 0;
            ?>
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <?php while ($slider_query->have_posts()) : $slider_query->the_post();
                            $testimonials_section_content = get_field('testimonials_section_content');
                            $testimonials_section_avatar = get_field('testimonials_section_avatar');
                            $testimonials_section_name = get_field('testimonials_section_name');
                            $testimonials_section_position = get_field('testimonials_section_position');
                            $testimonials_section_avatar_url = is_array($testimonials_section_avatar) ? $testimonials_section_avatar['url'] : $testimonials_section_avatar;
                            $count = ++$count;
                        ?>
                            <div class="swiper-slide" data-slide-number="<?php echo $count !== 0 ? $count : ''; ?>">
                                <div class="slide-inner grid-x grid-padding-x">
                                    <div class="cell">
                                        <div class="review-text"><?php echo ($testimonials_section_content); ?></div>
                                        <div class="cell slider-bottom">
                                            <div class="slider-left">
                                                <?php if ($testimonials_section_avatar_url): ?>
                                                    <div class="slider-avatar">
                                                        <img src="<?php echo esc_url($testimonials_section_avatar_url); ?>" alt="<?php echo esc_attr($testimonials_section_name); ?>">
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($testimonials_section_name): ?>
                                                    <div class="name">
                                                        <?php echo ($testimonials_section_name); ?>
                                                        <p><?php echo ($testimonials_section_position); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="slide-controls">
                        <div>
                            <span class="swiper-arrow-prev">
                                &larr;
                            </span>
                        </div>

                        <div class="slide-counter">
                            <span class="current-slide">1</span> / <span><?php echo count($args); ?></span>
                        </div>

                        <div>
                            <span class="swiper-arrow-next">
                                &rarr;
                            </span>
                        </div>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>

    </section>

</div>

<?php get_footer(); ?>