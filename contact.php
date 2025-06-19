<?php
/*
Template Name: Contact Page
*/
get_header();

$bg_image = get_theme_mod('contact_page_bg_image');
?>

<div class="contact_main-content">
    <?php
    $contact_hero_section_content = get_field('contact_hero_section_content');
    $contact_hero_section_time_title = get_field('contact_hero_section_time_title');
    $contact_hero_section_time = get_field('contact_hero_section_time');
    if (!empty($contact_hero_section_content || $contact_hero_section_time_title || $contact_hero_section_time)) : ?>
        <section class="contact-main__section" style="background-image: url('<?php echo esc_url($bg_image); ?>'); background-size: cover; background-position: center;">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-12">
                        <div class="contact-main__section-title">
                            <?php echo ($contact_hero_section_content) ?>
                        </div>
                    </div>
                </div>
                <div class="grid-x grid-margin-x align-right">
                    <div class="cell small-12 medium-6">
                        <div class="contact-main__section-hours">
                            <?php echo ($contact_hero_section_time_title) ?>
                        </div>
                        <hr>
                        <div class="contact-main__section-time">
                            <div class="brunch">
                                <?php echo ($contact_hero_section_time['brunch']) ?>
                            </div>
                            <div class="lunch">
                                <?php echo ($contact_hero_section_time['lunch']) ?>
                            </div>
                            <div class="dinner">
                                <?php echo ($contact_hero_section_time['dinner']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $contact_content_section_image_1 = get_field('contact_content_section_image_1');
    $contact_content_section_contacts = get_field('contact_content_section_contacts');
    $contact_content_section_image_2 = get_field('contact_content_section_image_2');
    $contact_content_section_adress = get_field('contact_content_section_adress');

    if (!empty($contact_content_section_image_1 || $contact_content_section_contacts || $contact_content_section_image_2 || $contact_content_section_adress)): ?>
        <section class="contacts-section">
            <div class="grid-container">
                <div class="grid-x grid-margin-x align-bottom">
                    <div class="cell small-12 medium-6">
                        <img src="<?php echo esc_attr($contact_content_section_image_1['sizes']['large']) ?>"
                            alt="<?php echo esc_attr($contact_content_section_image_1['alt']) ?>">
                    </div>
                    <div class="cell small-12 medium-6">
                        <div class="contacts-section__info">
                            <?php echo ($contact_content_section_contacts) ?>
                        </div>
                    </div>
                </div>
                <div class="contacts-section__bottom-block">
                    <div class="grid-x grid-margin-x align-middle">
                        <div class="cell small-12 medium-6">
                            <div class="contacts-section__adress">
                                <?php echo ($contact_content_section_adress) ?>
                                <div class="adress-button">
                                    <a href="#">View in maps</a>
                                </div>
                            </div>
                        </div>
                        <div class="cell small-12 medium-6">
                            <img src="<?php echo esc_attr($contact_content_section_image_2['sizes']['large']) ?>"
                                alt="<?php echo esc_attr($contact_content_section_image_2['alt']) ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $contact_reservation_title = get_field('contact_reservation_title');

    if (!empty($contact_reservation_title)) : ?>
        <section class="contact__reservation-section">
            <div class="grid-container">
                <div class="grid-x grid-margin-x text-center">
                    <div class="cell">
                        <div class="contact__reservation-section__title">
                            <?php echo ($contact_reservation_title) ?>
                        </div>
                    </div>
                </div>

                <form class="contact__reservation-section__form" action="/contact.php" target="_blank">
                    <div class="grid-container">
                        <div class="grid-x grid-padding-x align-center">
                            <div class="medium-6 cell">
                                <label>
                                    <input type="text" id="first name" placeholder="First Name" required>
                                </label>
                            </div>
                            <div class="medium-6 cell">
                                <label>
                                    <input type="text"  id="last name" placeholder="Last Name" required>
                                </label>
                            </div>
                            <div class="cell">
                                <label>
                                    <input type="email" id="email" placeholder="Email" required>
                                </label>
                            </div>
                            <div class="cell">
                                <label>
                                    <input type="tel" id="tel" placeholder="Phone" required>
                                </label>
                            </div>
                            <div class="cell medium-6">
                                <input type="date" id="date" name="date" required>
                            </div>
                            <div class="cell medium-6">
                                <input type="time" id="time" name="time" required>
                            </div>
                            <div class="cell">
                                <select id="option" name="option" required>
                                    <option value="">1 Person</option>
                                    <option value="option1">2 Person</option>
                                    <option value="option2">3 Person</option>
                                    <option value="option3">4 Person</option>
                                </select>
                            </div>

                            <div class="cell">
                                <div class="button-wrapper">
                                    <input type="submit" class="form-button" value="Book Now">
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    <?php endif; ?>
</div>

<?php get_footer(); ?>