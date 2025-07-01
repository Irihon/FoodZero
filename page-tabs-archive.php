<?php
/*
Template Name: Tabs Archive Page
*/

get_header();

$bg_image = get_theme_mod('portfolio_page_bg_image'); ?>

<div class="portfoloi_main-content">
    <?php
    $portfolio_title = get_field('portfolio_title');

    if (!empty($portfolio_title)): ?>
        <section class="portfolio__hero-section" style="background-image: url('<?php echo esc_url($bg_image); ?>'); background-size: cover; background-position: center;">
            <div class="grid-container">
                <div class="grid-x grid-margin-x text-center">
                    <div class="cell">
                        <?php echo ($portfolio_title); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $taxonomy = 'menu-category'; // custom taxonomy name
    $post_type = 'menu-item';     //  custom post type slug

    // Get all terms in your custom taxonomy
    $terms = get_terms([
        'taxonomy' => $taxonomy,
        'hide_empty' => true, // Show all terms, even if no posts

    ]);

    if (!empty($terms)): ?>
        <section class="portfolio__grids-section">
            <div class="grid-container tab-container">
                <ul class="tab-menu menu align-center" data-tabs id="example-tabs">
                    <li class="tabs-title is-active">
                        <a href="#tab-all" aria-selected="true">All</a>
                    </li>
                    <?php foreach ($terms as $index => $term): ?>
                        <li class="tabs-title">
                            <a href="#tab-<?php echo esc_attr($term->term_id); ?>">
                                <?php echo esc_html($term->name); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="tabs-content" data-tabs-content="example-tabs">

                    <!-- All Tab -->
                    <div class="tabs-panel is-active" id="tab-all">
                        <?php
                        $all_posts = get_posts([
                            'post_type' => $post_type,
                            'posts_per_page' => 6,
                            'order' => 'ASC',
                            'meta_query' => [
                                [
                                    'key' => '_thumbnail_id',
                                    'compare' => 'EXISTS'
                                ]
                            ],
                        ]);

                        if (!empty($all_posts)):
                            $i = 0;
                            foreach ($all_posts as $post):
                                setup_postdata($post);

                                if ($i % 2 == 0) echo '<div class="grid-x grid-margin-x">';

                                // Custom layout logic
                                if ($i === 0) $class = 'medium-8';
                                elseif ($i === 1) $class = 'medium-4';
                                elseif ($i === 2) $class = 'medium-4';
                                elseif ($i === 3) $class = 'medium-8';
                                else $class = 'medium-6';
                        ?>
                                <div class="cell <?php echo $class; ?>">
                                    <div class="tab-post-item">
                                        <?php if (has_post_thumbnail()): ?>
                                            <a href="<?php the_permalink(); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>');" class="post-thumbnail-link">
                                                <div class="image-overlay">
                                                    <h3 class="post-title-overlay"><?php the_title(); ?></h3>
                                                    <div class="tab-post-terms">
                                                        <?php
                                                        $post_terms = get_the_terms(get_the_ID(), $taxonomy);
                                                        if ($post_terms && !is_wp_error($post_terms)) : ?>
                                                            <div class="">
                                                                <?php foreach ($post_terms as $post_term) : ?>
                                                                    <span class="label secondary"><?php echo ($post_term->name) ?> </span>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="aroow">
                                                            <span class="arrow">&rarr;</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        <?php
                                if ($i % 2 === 1 || $i === count($all_posts) - 1) echo '</div>'; // Close row
                                $i++;
                            endforeach;
                            wp_reset_postdata();
                        else:
                            echo '<p>No posts found.</p>';
                        endif;
                        ?>
                    </div>
                    <div class="load-more-wrapper text-center">
                        <button id="load-more-posts" class="button posts-button">Load More</button>
                    </div>

                    <!-- Tabs by Term -->
                    <?php foreach ($terms as $term): ?>
                        <div class="tabs-panel" id="tab-<?php echo esc_attr($term->term_id); ?>">
                            <?php
                            $term_posts = get_posts([
                                'post_type' => $post_type,
                                'tax_query' => [[
                                    'taxonomy' => $taxonomy,
                                    'field'    => 'term_id',
                                    'terms'    => $term->term_id,
                                ]],
                            ]);

                            if (!empty($term_posts)):
                                $i = 0;
                                foreach ($term_posts as $post):
                                    setup_postdata($post);

                                    if ($i % 2 == 0) echo '<div class="grid-x grid-margin-x">';

                                    if ($i === 0) $class = 'medium-8';
                                    elseif ($i === 1) $class = 'medium-4';
                                    elseif ($i === 2) $class = 'medium-4';
                                    elseif ($i === 3) $class = 'medium-8';
                                    else $class = 'medium-6';
                            ?>
                                    <div class="cell <?php echo $class; ?>">
                                        <div class="tab-post-item">
                                            <?php if (has_post_thumbnail()): ?>
                                                <a href="<?php the_permalink(); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>');" class="post-thumbnail-link">
                                                    <div class="image-overlay">
                                                        <h3 class="post-title-overlay"><?php the_title(); ?></h3>
                                                        <div class="tab-post-terms">
                                                            <?php
                                                            $post_terms = get_the_terms(get_the_ID(), $taxonomy);
                                                            if ($post_terms && !is_wp_error($post_terms)) : ?>
                                                                <div class="">
                                                                    <?php foreach ($post_terms as $post_term) : ?>
                                                                        <span class="label secondary"><?php echo ($post_term->name) ?> </span>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="aroow">
                                                                <span class="arrow">&rarr;</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                            <?php
                                    if ($i % 2 === 1 || $i === count($term_posts) - 1) echo '</div>';
                                    $i++;
                                endforeach;
                                wp_reset_postdata();
                            else:
                                echo '<p>No posts in this tab.</p>';
                            endif;
                            ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
</div>
</section>
<?php endif; ?>
</div>



<?php get_footer(); ?>