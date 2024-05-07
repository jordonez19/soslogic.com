<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

use Elementor\Controls_Manager;
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_video_box extends \Elementor\Widget_Base
{

    public function get_name() {
        return 'crete-video-box';
    }

    public function get_title() {
        return esc_html__('crete-video-box', 'crete-core');
    }

    public function get_icon() {
        return 'eicon-video-playlist';
    }

    public function get_categories() {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'Video-Content',
            [
                'label' => esc_html__('Video Content', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'shape_img',
            [
                'label' => esc_html__('Shape Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'video_link',
            [
                'label' => esc_html__('Video Link', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://www.youtube.com/watch?v=6WZOxnYi4Cs', 'textdomain'),
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=6WZOxnYi4Cs',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Have a Project in Mind?', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__('Info', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Luctus sapien pellentesque arcu fermentum accumsan tempus', 'textdomain'),
                'placeholder' => esc_html__('Type your description here', 'textdomain'),
            ]
        );
        $this->add_control(
            'button_label',
            [
                'label' => esc_html__('Button Label', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Make an Appoinment', 'textdomain'),
                'placeholder' => esc_html__('Type your button label here', 'textdomain'),
            ]
        );
        $this->add_control(
            'button_link',
            [
                'label' => esc_html__('Button Link', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'textdomain'),
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section-style',
            [
                'label' => esc_html__('Section Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'container-width',
            [
                'label' => esc_html__('Container Width', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 2800,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .custom_container_width' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => esc_html__( 'Box Shadow', 'textdomain' ),
                'selector' => '{{WRAPPER}} .theme-shadow',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Video-Button-style',
            [
                'label' => esc_html__('Video Button Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Video-Icon-color',
            [
                'label' => esc_html__('Video Icon Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-popup-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Video-Icon-BG-color',
            [
                'label' => esc_html__('Video Icon BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-popup-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Video-Icon-Hover-color',
            [
                'label' => esc_html__('Video Icon Hover Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-popup-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Video-Icon-Hover-BG-color',
            [
                'label' => esc_html__('Video Icon Hover BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-popup-btn:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Heading-style',
            [
                'label' => esc_html__('Heading Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Heading-color',
            [
                'label' => esc_html__('Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__video_box-heading' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Heading-typography',
                'label' => esc_html__('Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__video_box-heading',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Info-style',
            [
                'label' => esc_html__('Info Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Info-color',
            [
                'label' => esc_html__('Info Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__video_box-info' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Info-typography',
                'label' => esc_html__('Info Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__video_box-info',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Button-Style',
            [
                'label' => esc_html__('Button Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'style-tabs'
        );

        $this->start_controls_tab(
            'style_normal_tab',
            [
                'label' => esc_html__('Normal', 'textdomain'),
            ]
        );
        $this->add_control(
            'Button-Text-color',
            [
                'label' => esc_html__('Button Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .primary-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Button-Text-typography',
                'label' => esc_html__('Button Text Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .primary-btn',
            ]
        );
        $this->add_control(
            'Button-BG-color',
            [
                'label' => esc_html__('Button BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .primary-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Button-border-radius',
            [
                'label' => esc_html__('Button Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'selectors' => [
                    '{{WRAPPER}} .primary-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'Button-border',
                'label' => esc_html__('Button Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .primary-btn',
            ]
        );
        $this->end_controls_tab();
        /*END STYLE NORMAL TAB*/
        $this->start_controls_tab(
            'style_hover_tab',
            [
                'label' => esc_html__('Hover', 'textdomain'),
            ]
        );
        $this->add_control(
            'Button-Text-Hover-color',
            [
                'label' => esc_html__('Button Text Hover Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .primary-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Button-Hover-BG-color',
            [
                'label' => esc_html__('Button Hover BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .primary-btn::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        /*END STYLE HOVER TAB*/
        $this->end_controls_tabs();
        $this->end_controls_section();


    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!--video box start-->
        <section class="hm2-video-section">
            <div class="container custom_container_width">
                <div class="hm2-video-box d-flex align-items-center justify-content-between theme-shadow position-relative z-1 overflow-hidden gap-5 flex-wrap">
                    <?php if (!empty($settings['shape_img']['url'])) { ?>
                        <img src="<?php echo $settings['shape_img']['url']; ?>" alt="curve shape" class="position-absolute curve-shape z--1">
                    <?php } ?>
                    <div class="content-left d-flex align-items-center gap-4 flex-wrap flex-md-nowrap">
                        <?php if (!empty($settings['video_link']['url'])) { ?>
                            <a href="<?php echo $settings['video_link']['url']; ?>" class="video-popup-btn ripple-effect"><i class="fas fa-play"></i></a>
                        <?php } ?>
                        <div>
                            <?php if (!empty($settings['title'])) { ?>
                                <h3 class="mb-2 crete__video_box-heading"><?php echo $settings['title']; ?></h3>
                            <?php } ?>
                            <?php if (!empty($settings['info'])) { ?>
                                <p class="mb-0 lead crete__video_box-info"><?php echo $settings['info']; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if (!empty($settings['button_label'])) { ?>
                        <a href="<?php echo $settings['button_link']['url']; ?>" class="template-btn primary-btn"><?php echo $settings['button_label']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!--video box end-->
        <?php

    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \crete_video_box());

