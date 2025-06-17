<?php
$post_id = get_queried_object_id(); // Ensure ACF knows which page we’re on
$reservation_section_content = get_field('reservation_section_content', $post_id);

if (!empty($reservation_section_content)) : ?>
    <section class="reservation-section">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <?php if (!empty($reservation_section_content)) : ?>
                    <div class="cell small-12">
                        <div class="reservation-section__content">
                            <?php echo ($reservation_section_content) ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <form action="#" class="reservation-section__form">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="cell medium-4"> 
                            <input type="date" id="date" name="date" required>
                        </div>
                        <div class="cell medium-4">
                            <input type="time" id="time" name="time" required>
                        </div>
                        <div class="cell medium-4">
                            <select id="option" name="option" required>
                                <option value="">-- Please choose --</option>
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
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