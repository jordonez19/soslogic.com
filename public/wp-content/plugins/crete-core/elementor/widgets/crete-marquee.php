<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Crete_Marquee extends \Elementor\Widget_Base
{

    public function get_name() {
        return 'crete_marquee';
    }

    public function get_title() {
        return esc_html__('Crete Marquee', 'crete-core');
    }

    public function get_icon() {
        return 'eicon-post-slider';
    }

    public function get_categories() {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'crete_marquee_section',
            [
                'label' => esc_html__('Crete Marquee', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'Marqueue_style',
            [
                'label' => esc_html__('Marqueue Style', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => [
                    'style_1' => esc_html__('Style 1', 'textdomain'),
                    'style_2' => esc_html__('style 2', 'textdomain'),
                    'style_3' => esc_html__('style 3', 'textdomain'),
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'list_title',
            [
                'label' => esc_html__('Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('What We Do', 'textdomain'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-circle',
                    'library' => 'fa-solid',
                ],
                'recommended' => [
                    'fa-solid' => [
                        'circle',
                        'dot-circle',
                        'square-full',
                    ],
                    'fa-regular' => [
                        'circle',
                        'dot-circle',
                        'square-full',
                    ],
                ],
            ]
        );


        $this->add_control(
            'list',
            [
                'label' => esc_html__('Marquee List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ list_title }}}',
            ]
        );


        $this->end_controls_section();

        // Style Tabs
        $this->start_controls_section(
            'crete_marquee_style',
            [
                'label' => esc_html__('Marquee Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'bg_image',
            [
                'label' => esc_html__('Background Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,

            ]
        );


        $this->end_controls_section();


    }

    protected function render() {
        $settings = $this->get_settings_for_display();


        ?>
        <?php if ('style_1' == $settings['Marqueue_style']) { ?>
            <!--ticker section start-->
            <div class="ticker-section position-relative overflow-hidden z-1" data-background="<?php echo $settings['bg_image']['url']; ?>">
                <div class="ur-ticker-box overflow-hidden">
                    <div class="ur-ticker-wrapper primary-bg-color">
                        <div class="ur-ticker">
                            <?php if ($settings['list']) {
                                foreach ($settings['list'] as $item) {
                                    ?>
                                    <span class="text-white text-uppercase">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']); ?><?php echo $item['list_title']; ?>
                                </span>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--ticker section end-->
        <?php } elseif ('style_2' == $settings['Marqueue_style']) { ?>
            <!--ticker section start-->
            <div class="hm3-ticker-section position-relative overflow-hidden z-1 hm3-light-bg">
                <span class="ticker-shape"></span>
                <div class="ur-ticker-box overflow-hidden">
                    <div class="ur-ticker-wrapper primary-bg-color">
                        <div class="ur-ticker">
                            <?php if ($settings['list']) {
                                foreach ($settings['list'] as $item) {
                                    ?>
                                    <span class="text-white text-uppercase">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']); ?><?php echo $item['list_title']; ?>
                                </span>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--ticker section end-->
        <?php }elseif ('style_3' == $settings['Marqueue_style']){ ?>
            <!--ticker section start-->
            <div class="hm4-ticker-section">
                <div class="ur-ticker-box overflow-hidden">
                    <div class="ur-ticker-wrapper">
                        <div class="ur-ticker">
                            <?php if ($settings['list']) {
                                foreach ($settings['list'] as $item) {
                                    ?>
                                    <span class="text-white text-uppercase">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']); ?><?php echo $item['list_title']; ?>
                                </span>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--ticker section end-->
        <?php } ?>
        <?php
    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \Crete_Marquee());

