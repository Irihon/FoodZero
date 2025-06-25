<?php
/*
Template Name: About Page
*/
get_header();

$bg_image = get_theme_mod('about_page_bg_image');
?>
<div class="about_main-content">
    <?php
    $about_hero_content = get_field('about_hero_content');

    if (!empty($about_hero_content)): ?>
        <section class="about__hero-section" style="background-image: url('<?php echo esc_url($bg_image); ?>'); background-size: cover; background-position: center;">
            <div class="grid-container">
                <div class="grid-x grid-margin-x align-right">
                    <div class="cell small-12 medium-8">
                        <?php echo ($about_hero_content) ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $about_story_content = get_field('about_story_content');
    $about_story_image = get_field('about_story_image');

    if (!empty($about_story_content || $about_story_image)): ?>
        <section class="about__main-section">
            <div>
                <img class="about__main-section__stiker" src="/wp-content/themes/foodzero/src/assets/images/about-story-stiker.png" alt="">
            </div>
            <div class="grid-container">
                <div class="grid-x grid-margin-x align-bottom">
                    <div class="cell small-12 medium-6">
                        <div class="about__main-section-content">
                            <?php echo ($about_story_content) ?>
                        </div>
                    </div>
                    <div class="cell small-12 medium-6">
                        <div class="about__main-section-image">
                            <img src="<?php echo esc_attr($about_story_image['sizes']['large']) ?>"
                                alt="<?php echo esc_attr($about_story_image['alt']) ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $about_staff_1 = get_field('about_staff_1');
    $about_staff_2 = get_field('about_staff_2');

    if (!empty($about_staff_1 || $about_staff_2)): ?>
        <section class="about__staff-section">
            <div class="grid-container">
                <div class="grid-x grid-margin-x align-justify">
                    <div class="cell small-12 medium-6">
                        <div class="about__main-section__staff staff-left-column">
                            <div class="about__main-section__staff-title">
                                <?php echo ($about_staff_1['title']) ?>
                            </div>
                            <div class="about__main-section__staff-img">
                                <img src="<?php echo esc_url($about_staff_1['image']['url']); ?>"
                                    alt="<?php echo esc_attr($about_staff_1['image']['alt']); ?>">
                            </div>
                            <div class="about__main-section__staff-content__left">
                                <?php echo ($about_staff_2['content']) ?>
                            </div>
                        </div>
                    </div>
                    <div class="cell small-12 medium-6">
                        <div class="about__main-section__staff staff-right-column">
                            <div class="about__main-section__staff-content__right">
                                <?php echo ($about_staff_1['content']) ?>
                            </div>
                            <div class="about__main-section__staff-title">
                                <?php echo ($about_staff_2['title']) ?>
                            </div>
                            <div class="about__main-section__staff-img">
                                <img src="<?php echo esc_url($about_staff_2['image']['url']); ?>"
                                    alt="<?php echo esc_attr($about_staff_2['image']['alt']); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>

    <?php
    $about_video_content = get_field('about_video_content');

    if (!empty($about_video_content)): ?>
        <section class="about__video-section">
            <div class="grid-container">
                <div class="grid-x grid-margin-x align-center text-center">
                    <div class="cell">
                        <?php echo ($about_video_content) ?>
                    </div>
                    <div class="cell">
                        <button class="play-button" id="playVideo">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/play.png" alt="Play Video">
                        </button>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>

    <?php
    $about_process_title = get_field('about_process_title');
    $about_process_steps_1 = get_field('about_process_steps_1');
    $about_process_steps_2 = get_field('about_process_steps_2');
    $about_process_steps_3 = get_field('about_process_steps_3');

    if (!empty($about_process_title || $about_process_steps_1 || $about_process_steps_2 || $about_process_steps_3)): ?>
        <section class="about__process-section">
            <div class="about__process-section__stikers">
                <img class="about__process-section__stikers-1" src="/wp-content/themes/foodzero/src/assets/images/about-process-stiker-1.png" alt="">
                <img class="about__process-section__stikers-2" src="/wp-content/themes/foodzero/src/assets/images/about-process-stiker-2.png" alt="">
            </div>
            <div class="grid-container">
                <div class="grid-x grid-margin-x text-center">
                    <div class="cell">
                        <div class="about__process-section__title">
                            <?php echo ($about_process_title) ?>
                        </div>
                    </div>
                </div>
                <div class="grid-x grid-margin-x">
                    <div class="cell small-12 medium-6">
                        <div class="about__process-section__left-column">
                            <div class="about__process-section__image">
                                <img src="<?php echo esc_url($about_process_steps_1['about_process_steps_image']['url']); ?>"
                                    alt="<?php echo esc_attr($about_process_steps_1['about_process_steps_image']['alt']); ?>">
                            </div>
                            <div class="about__process-section__content">
                                <?php echo ($about_process_steps_3['about_process_steps_content']); ?>
                            </div>
                            <div class="about__process-section__image">
                                <img src="<?php echo esc_url($about_process_steps_3['about_process_steps_image']['url']); ?>"
                                    alt="<?php echo esc_attr($about_process_steps_3['about_process_steps_image']['alt']); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="cell small-12 medium-6">
                        <div class="about__process-section__right-column">
                            <div class="about__process-section__content">
                                <?php echo ($about_process_steps_1['about_process_steps_content']); ?>
                            </div>
                            <div class="about__process-section__image">
                                <img src="<?php echo esc_url($about_process_steps_2['about_process_steps_image']['url']); ?>"
                                    alt="<?php echo esc_attr($about_process_steps_2['about_process_steps_image']['alt']); ?>">
                            </div>
                            <div class="about__process-section__content right-bottom-content">
                                <?php echo ($about_process_steps_2['about_process_steps_content']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    <?php endif; ?>

    <?php get_template_part('template-parts/section', 'reservation');
    ?>


</div>
<?php get_footer() ?>