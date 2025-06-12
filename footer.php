<footer class="main-footer">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell small-12 medium-3">
                <?php if (!empty(get_custom_logo())): ?>
                    <div class="logo">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="cell small-12 medium-3">
                <?php
                $menu_name = 'Contact';
                $menu = wp_get_nav_menu_object($menu_name);
                ?>

                <?php if (!empty($menu)): ?>
                    <h4><?php echo ($menu->name); ?></h4>
                <?php endif; ?>

                <?php wp_nav_menu(array(
                    'menu_class' => 'footer__menu',
                    'theme_location' => 'footer-menu'
                ));
                ?>
            </div>
            <div class="cell small-12 medium-6">
                <h4>Never Miss a Recipe</h4>
                <form action="#" method="post" class="email-form">
                    <div class="form-field">
                        <input type="email" id="email" name="email" placeholder="Your email address" required>
                        <button type="submit" class="form-btn">Subscribe</button>
                    </div>
                    <label for="email">Join our subscribers and get best recipe delivered each week!</label>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell small-12 medium-6">
                <span class="footer-rights">&#169 2025 I don't know what write here. All rights Reserved</span>
            </div>
            <div class="cell small-12 medium-6">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'icon-menu',
                    'menu_class' => 'footer-icon-menu',
                ));
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>