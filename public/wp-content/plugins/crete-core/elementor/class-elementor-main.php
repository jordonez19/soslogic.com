<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
define('CRETE_ELEMENTOR_URL', plugins_url('/', __FILE__));
define('CRETE_ELEMENTOR_PATH', plugin_dir_path(__FILE__));
define('CRETE_ELEMENTOR_ROOT_URL', plugins_url(__FILE__));
define('CRETE_ELEMENTOR_PL_ROOT_URL', plugin_dir_url(__FILE__));
define('CRETE_ELEMENTOR_MODULES_PATH', CRETE_ELEMENTOR_PATH . 'modules/');
define('CRETE_PL_ASSETS', trailingslashit(CRETE_ELEMENTOR_PL_ROOT_URL . 'assets'));
define('CRETE_STICKY_ASSETS_URL', CRETE_ELEMENTOR_URL . 'assets/');
define('CRETE_HEADER_MODULES_URL', CRETE_ELEMENTOR_URL . 'modules/');
define('CRETE_ELEMENTOR_STICKY_TPL', CRETE_ELEMENTOR_PATH . 'library/sticky-header/');

define('CRETE_ROOT_FILE__', __FILE__);
define('CRETE_TEMPLATES_FOR_ELEMENTOR_VERSION', '2.9');

require_once CRETE_ELEMENTOR_PATH . 'inc/crete-elements-cat.php';

require_once CRETE_ELEMENTOR_PATH . 'inc/crete_home_banner_widgets_functions.php';
require_once CRETE_ELEMENTOR_PATH . 'inc/crete_blog_widgets_functions.php';
require_once CRETE_ELEMENTOR_PATH . 'inc/crete_reviews_widgets_functions.php';
require_once CRETE_ELEMENTOR_PATH . 'inc/crete-elementor-assets.php';
require_once CRETE_ELEMENTOR_PATH . 'inc/sassplate-custom-bg.php';
require_once CRETE_ELEMENTOR_PATH . 'library/template-library/index.php';

require_once CRETE_ELEMENTOR_PATH . 'inc/crete-custom-icon.php';

require_once CRETE_ELEMENTOR_PATH . 'inc/dividers.php';
require_once CRETE_ELEMENTOR_PATH . 'inc/crete-elementor-functions.php';
require_once CRETE_ELEMENTOR_PATH . 'inc/crete-elementor-section.php';

/*
 * Widget style enqueue from here
 */

require_once CRETE_ELEMENTOR_PATH . 'widgets/widget-functions/hero-style.php';
require_once CRETE_ELEMENTOR_PATH . 'widgets/widget-functions/info-section.php';
require_once CRETE_ELEMENTOR_PATH . 'widgets/widget-functions/testimonial-style.php';
require_once CRETE_ELEMENTOR_PATH . 'widgets/widget-functions/service-section.php';
require_once CRETE_ELEMENTOR_PATH . 'widgets/widget-functions/project-section.php';
require_once CRETE_ELEMENTOR_PATH . 'widgets/widget-functions/blog-section.php';
require_once CRETE_ELEMENTOR_PATH . 'widgets/widget-functions/countdown-section.php';
require_once CRETE_ELEMENTOR_PATH . 'widgets/widget-functions/brand-section.php';
require_once CRETE_ELEMENTOR_PATH . 'widgets/widget-functions/contact-section.php';
require_once CRETE_ELEMENTOR_PATH . 'widgets/widget-functions/about-story.php';

/*
 * Widget style enqueue End here
 */

$ps = new CreteElemSection();

function crete_register_new_controls($controls_manager) {

    require_once CRETE_ELEMENTOR_PATH . 'inc/gradient-control.php';
    require_once CRETE_ELEMENTOR_PATH . 'inc/image-select-control.php';

    $controls_manager->register(new \Elementor\CustomControl\ImgSelector_Control());
    $controls_manager->register(new \Elementor\CustomControl\CustomGradient_Control());


}

add_action('elementor/controls/register', 'crete_register_new_controls');


function crete_elementor_widget_categorie($elements_manager) {

    $elements_manager->add_category(
        'crete-ele-widgets-cat',
        [
            'title' => __('Crete Elements', 'crete-core'),
            'icon' => 'eicon-plug',
        ]
    );

    $elements_manager->add_category(
        'crete-one-page-element',
        [
            'title' => __('Crete Onepage Element', 'crete-core'),
            'icon' => 'eicon-plug',
        ]
    );
}

add_action('elementor/elements/categories_registered', 'crete_elementor_widget_categorie');


function crete_elementor_elements() {
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-button.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-hero.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-info-section.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-service-grid.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-info-section-two.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-testimonial.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-project.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-marquee.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-pricing-table.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-contact.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-blog.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-about.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-video-box.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-team.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-project-filter.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-countdown.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-brand-slider.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-contact-info-box.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-team-promo.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-about-story.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-parallax-box.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-service-feat-box.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-accordion.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-newsletter.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-title.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-experince.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/crete-skill-slider.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/one-page/create-op-hero.php';
    require_once CRETE_ELEMENTOR_PATH . 'widgets/one-page/crete-op-about.php';




}

add_action('elementor/widgets/register', 'crete_elementor_elements');
