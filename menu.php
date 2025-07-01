<?php
/*
Template Name: Menu Page
*/
get_header();

$bg_image = get_theme_mod('menu_section_bg_image');
?>

<div class="menu_main-content">
    <?php
    $menu_hero_section_content = get_field('menu_hero_section_content');

    if (!empty($menu_hero_section_content)): ?>
        <section class="menu-hero__section" style="background-image: url('<?php echo esc_url($bg_image); ?>'); background-size: cover; background-position: center;">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-12">
                        <div class="menu-hero__section-content">
                            <?php echo ($menu_hero_section_content) ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>


    <section class="menu-posts__section">
        <div class="grid-container">
            <?php
            $taxonomy = 'menu-category';

            $terms = get_terms([
                'taxonomy' => $taxonomy,
                'hide_empty' => true,
                'orderby'    => 'id',
                'order'      => 'ASC',
                'number'     => 3,
            ]); ?>

            <?php if (!empty($terms) && !is_wp_error($terms)):
                $count = 0;
                foreach ($terms as $term):
                    $image = get_field('category_image', 'menu-category_' . $term->term_id);
                    $count = ++$count;
            ?>
                    <div class="grid-x grid-margin-x">
                        <div class="cell">
                            <div class="menu-posts__section-content">
                                <div class="menu-posts__section-title">
                                    <?php echo ($term->name); ?>
                                </div>
                                <div class="menu-posts__section-description">
                                    <?php echo ($term->description); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-x grid-margin-x <?php echo $count % 2 == 0 ? 'flex-dir-row-reverse' : ''; ?>">
                        <div class="cell small-12 medium-6">
                            <div class="menu-posts__section-img">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            </div>
                        </div>

                        <div class="cell small-12 medium-6">
                            <?php
                            $args = [
                                'post_type' => 'menu-item',
                                'tax_query' => [
                                    'taxonomy' => $taxonomy,
                                    'field' => 'slug',
                                    'terms' => $term->slug,
                                ],
                                'posts_per_page' => 3,
                                'order' => 'ASC'
                            ];
                            $query = new WP_Query($args);
                            ?>

                            <?php if ($query->have_posts()): ?>
                                <?php while ($query->have_posts()): $query->the_post();
                                    $menu_post_item = get_field('menu_post_item');
                                    $menu_post_item_price = get_field('menu_post_item_price');
                                    $menu_post_item_content = get_field('menu_post_item_content');
                                ?>
                                    <div class="cell">
                                        <div class="menu-posts__section-price">
                                            <?php echo  $menu_post_item['menu_post_item_price'] ?>
                                        </div>
                                        <hr>
                                        <div class="menu-posts__section-dish">
                                            <?php echo  $menu_post_item['menu_post_item_content'] ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>

                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </section>

    <?php get_template_part('template-parts/section', 'reservation');
    ?>


</div>

<?php get_footer(); ?>