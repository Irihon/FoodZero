<?php
function foodzero_enqueue_assets()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'foodzero-main-js', // Handle for the script
        get_template_directory_uri() . '/dist/js/main.bundle.js', // Path to the JS file
        array('jquery'), // Dependencies (if any)
        null, // Version (null will automatically add the file's modified time)
        true // Load the script in the footer
    );

    wp_enqueue_style(
        'foodzero-custom-css', // Handle for the stylesheet
        get_template_directory_uri() . '/dist/css/custom.bundle.css', // Path to the CSS file
        array(), // Dependencies (if any)
        null // Version (null will automatically add the file's modified time)
    );
}

add_action('wp_enqueue_scripts', 'foodzero_enqueue_assets');

if (! function_exists('theme_custom_logo')) {
    function theme_custom_logo()
    {
        $arguments = [
            'height'               => 115,
            'width'                => 307,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => ['site-title', 'site-description'],
            'unlink-homepage-logo' => true,
        ];

        add_theme_support('custom-logo', $arguments);
    }

    add_action('after_setup_theme', 'theme_custom_logo');
}

if (! function_exists('mytheme_register_nav_menu')) {

    function mytheme_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'custom_menu' => __('Custom menu', 'text_domain'),
        ));
    }
    add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
}

function foodzero_customize_register($wp_customize)
{
    $wp_customize->add_section('menu_background_section', array(
        'title' => __('Menu Background', 'foodzero'),
        'description' => __('Customize the menu background', 'foodzero'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('menu_background_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'menu_background_image', array(
        'label' => __('Menu Background Image', 'foodzero'),
        'section' => 'menu_background_section',
        'settings' => 'menu_background_image',
    )));

    $wp_customize->add_setting('menu_section_bg_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'menu_section_bg_image', array(
        'label' => __('Menu Section Background Image', 'foodzero'),
        'section' => 'menu_background_section', // You can change this if you want it in a separate section
        'settings' => 'menu_section_bg_image',
    )));

    // Contact Page Background Section
    $wp_customize->add_section('contact_background_section', array(
        'title' => __('Contact Page Background', 'foodzero'),
        'description' => __('Customize the Contact page background', 'foodzero'),
        'priority' => 31,
    ));

    $wp_customize->add_setting('contact_page_bg_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_page_bg_image', array(
        'label' => __('Contact Page Background Image', 'foodzero'),
        'section' => 'contact_background_section',
        'settings' => 'contact_page_bg_image',
    )));

    // About Page Background Section
    $wp_customize->add_section('about_background_section', array(
        'title' => __('About Page Background', 'foodzero'),
        'description' => __('Customize the About page background', 'foodzero'),
        'priority' => 41,
    ));

    $wp_customize->add_setting('about_page_bg_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_page_bg_image', array(
        'label' => __('About Page Background Image', 'foodzero'),
        'section' => 'about_background_section',
        'settings' => 'about_page_bg_image',
    )));

    // Portfolio Page Background Section
    $wp_customize->add_section('portfolio_background_section', array(
        'title' => __('Portfolio Page Background', 'foodzero'),
        'description' => __('Customize the Portfolio page background', 'foodzero'),
        'priority' => 51,
    ));

    $wp_customize->add_setting('portfolio_page_bg_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio_page_bg_image', array(
        'label' => __('Portfoloi Page Background Image', 'foodzero'),
        'section' => 'portfolio_background_section',
        'settings' => 'portfolio_page_bg_image',
    )));

    // Single Portfolio Page Background Section
    $wp_customize->add_section('single_portfolio_background_section', array(
        'title' => __('Single Portfolio Page Background', 'foodzero'),
        'description' => __('Customize the Single Portfolio page background', 'foodzero'),
        'priority' => 61,
    ));

    $wp_customize->add_setting('single_portfolio_page_bg_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'single_portfolio_page_bg_image', array(
        'label' => __('Single Portfoloi Page Background Image', 'foodzero'),
        'section' => 'single_portfolio_background_section',
        'settings' => 'single_portfolio_page_bg_image',
    )));
}
add_action('customize_register', 'foodzero_customize_register');

function foodzero_dynamic_menu_styles()
{
    $menu_background_image = get_theme_mod('menu_background_image'); // Get the customizer setting
    if ($menu_background_image): ?>
        <style>
            .menu-overlay {
                background: url('<?php echo esc_url($menu_background_image) ?>') center/cover no-repeat;
            }
        </style>
<?php
    endif;
}
add_action('wp_head', 'foodzero_dynamic_menu_styles');
add_theme_support('post-thumbnails');

function enqueue_swiper_assets()
{
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');

function register_footer_menu()
{
    register_nav_menu('footer-menu', 'Footer Menu');
}
add_action('init', 'register_footer_menu');

function load_font_awesome()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'load_font_awesome');

function register_icon_menu()
{
    register_nav_menu('icon-menu', 'Icon Menu');
}
add_action('init', 'register_icon_menu');
