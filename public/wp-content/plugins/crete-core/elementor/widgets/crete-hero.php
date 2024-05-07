<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Crete_Hero extends \Elementor\Widget_Base
{

    public function get_name() {
        return 'crete_hero';
    }

    public function get_title() {
        return esc_html__('Crete Hero', 'crete-core');
    }

    public function get_icon() {
        return 'eicon-slider-3d';
    }

    public function get_categories() {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'Hero-style-section',
            [
                'label' => esc_html__('Hero Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'Hero-Style',
            [
                'label' => esc_html__('Select Hero Style', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_1',
                'options' => [
                    'style_1' => esc_html__('Style 1', 'textdomain'),
                    'style_2' => esc_html__('Style 2', 'textdomain'),
                    'style_3' => esc_html__('Style 3', 'textdomain'),
                    'style_4' => esc_html__('Style 4', 'textdomain'),
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'hero_images_and_shapes',
            [
                'label' => esc_html__('Hero Images And Shapes', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'Circle-Color-Shape-1',
            [
                'label' => esc_html__('Circle Color Shape 1', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .circle-shape-1' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_2', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'Circle-Color-Shape-2',
            [
                'label' => esc_html__('Circle Color Shape 2', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .circle-shape-2' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_2', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'Circle-Color-Shape-3',
            [
                'label' => esc_html__('Circle Color Shape 3', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .circle-shape-3' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_2', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'Circle-Color-Shape-4',
            [
                'label' => esc_html__('Circle Color Shape 4', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .circle-shape-4' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'Circle-Color-Shape-5',
            [
                'label' => esc_html__('Circle Color Shape 5', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .circle-shape-5' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'section_bg_img',
            [
                'label' => esc_html__('Section BG Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_3'],
                ],
            ]
        );
        $this->add_control(
            'shape_img_1',
            [
                'label' => esc_html__('Shape Image 1', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_2', 'style_3', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'shape_img_2',
            [
                'label' => esc_html__('Shape Image 2', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_2', 'style_3', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'shape_img_3',
            [
                'label' => esc_html__('Shape Image 3', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'Hero-Style' => ['style_2', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'shape_img_4',
            [
                'label' => esc_html__('Shape Image 4', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'Hero-Style' => ['style_2'],
                ],
            ]
        );
        $this->add_control(
            'shape_img_5',
            [
                'label' => esc_html__('Shape Image 5', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'Hero-Style' => ['style_2'],
                ],
            ]
        );
        $this->add_control(
            'shape_img_6',
            [
                'label' => esc_html__('Shape Image 6', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'Hero-Style' => ['style_2'],
                ],
            ]
        );
        $this->add_control(
            'shape_img_7',
            [
                'label' => esc_html__('Shape Image 7', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'Hero-Style' => ['style_2'],
                ],
            ]
        );
        $this->add_control(
            'banner_main_img',
            [
                'label' => esc_html__('Banner Main Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_2', 'style_3', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'banner_main_img_mobile',
            [
                'label' => esc_html__('Banner Main Image Mobile', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'Hero-Style' => ['style_1'],
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'Text-Shape',
            [
                'label' => esc_html__('Text Shape', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'Hero-Style' => ['style_3'],
                ],
            ]
        );
        $this->add_control(
            'text_shape',
            [
                'label' => esc_html__('Text Shape', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Desiger', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'Hero-Content',
            [
                'label' => esc_html__('Hero Content', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sub_heading',
            [
                'label' => esc_html__('Sub Heading', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('50% discount on earlly purchase', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'heading',
            [
                'label' => esc_html__('Heading', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Creating the best digital solution', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_2', 'style_3', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => esc_html__('Information', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => esc_html__('Malesuada curabitur nascetur viverra sem pulvinar feugiat curae, posuere risus consequat velit bibendum at integer', 'textdomain'),
                'placeholder' => esc_html__('Type your description here', 'textdomain'),
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_2', 'style_3', 'style_4'],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Button-One-Content',
            [
                'label' => esc_html__('Button One Content', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_2', 'style_3', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'button_text_1',
            [
                'label' => esc_html__('Button Label', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Learn More', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'button_link_1',
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
            'Button-Two-Content',
            [
                'label' => esc_html__('Button Two Content', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_2'],
                ],
            ]
        );
        $this->add_control(
            'button_text_2',
            [
                'label' => esc_html__('Button Label', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Get Started', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'button_link_2',
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
        $this->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
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
        $this->end_controls_section();

        $this->start_controls_section(
            'Banner-Main-Image-style',
            [
                'label' => esc_html__('Banner Main Image Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'Hero-Style' => ['style_2'],
                ],
            ]
        );
        $this->add_responsive_control(
            'main-img-width',
            [
                'label' => esc_html__('Main Image Width', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .crete__hero_two_main_img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'Sub-Heading-style',
            [
                'label' => esc_html__('Sub Heading Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'Hero-Style' => ['style_1','style_2','style_4'],
                ],
            ]
        );
        $this->add_control(
            'Sub-Heading-color',
            [
                'label' => esc_html__('Sub Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content-left .cr-subtitle' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .hm4-hero-content .hm4-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Sub-Heading-typography',
                'label' => esc_html__('Sub Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .hero-content-left .cr-subtitle, {{WRAPPER}} .hm4-hero-content .hm4-subtitle',
            ]
        );
        $this->add_control(
            'Sub-Heading-Border-color',
            [
                'label' => esc_html__('Sub Heading Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-subtitle.text-white::before' => 'background-color: {{VALUE}}',
                    'condition' => [
                        'Hero-Style' => ['style_1'],
                    ],
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
                    '{{WRAPPER}} .hero-content-left h1' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .hm2-hero-content h1' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .crete__hero_style_three_heading' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .hm4-hero-content .display-1' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Heading-typography',
                'label' => esc_html__('Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .hero-content-left h1, 
                {{WRAPPER}} .hm2-hero-content h1,
                {{WRAPPER}} .crete__hero_style_three_heading,
                {{WRAPPER}} .hm4-hero-content .display-1',
            ]
        );
        $this->add_control(
            'Heading-Feature-Text-color',
            [
                'label' => esc_html__('Heading Feature Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm2-hero-content h1 span' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'Hero-Style' => ['style_2'],
                ],
            ]
        );
        $this->add_control(
            'Heading-Feature-Text-Background-color',
            [
                'label' => esc_html__('Heading Feature Text Background Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm2-hero-content h1 span' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'Hero-Style' => ['style_2'],
                ],
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
                    '{{WRAPPER}} .hm2-hero-content p' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .crete__hero_style_three_descripiton' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .hm4-hero-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Info-typography',
                'label' => esc_html__('Info Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .hm2-hero-content p,
                {{WRAPPER}} .crete__hero_style_three_descripiton,
                {{WRAPPER}} .hm4-hero-content p',
            ]
        );
        $this->add_control(
            'info-padding',
            [
                'label' => esc_html__('Padding', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'selectors' => [
                    '{{WRAPPER}} .hero-content-left p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .hm2-hero-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .crete__hero_style_three_descripiton' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .hm4-hero-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Button-one-style',
            [
                'label' => esc_html__('Button One Style', 'woodly-core'),
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
            'Button-One-Text-color',
            [
                'label' => esc_html__('Button One Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .white-btn' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .primary-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Button-One-Text-typography',
                'label' => esc_html__('Button One Text Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .white-btn, {{WRAPPER}} .primary-btn',
            ]
        );
        $this->add_control(
            'Button-One-BG-color',
            [
                'label' => esc_html__('Button One BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .white-btn' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .primary-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Button-One-border-radius',
            [
                'label' => esc_html__('Button One Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'selectors' => [
                    '{{WRAPPER}} .white-btn, {{WRAPPER}} .primary-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'Button-One-border',
                'label' => esc_html__('Button One Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .white-btn, {{WRAPPER}} .primary-btn',
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
            'Button-One-Text-Hover-color',
            [
                'label' => esc_html__('Button One Text Hover Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .white-btn:hover' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .primary-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Button-One-Hover-BG-color',
            [
                'label' => esc_html__('Button One Hover BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .white-btn::before' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .primary-btn::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        /*END STYLE HOVER TAB*/
        $this->end_controls_tabs();

        $this->end_controls_section();

        /*
         * Button two style
         * */

        $this->start_controls_section(
            'Button-Two-style',
            [
                'label' => esc_html__('Button Two Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'Hero-Style' => ['style_1', 'style_2'],
                ],
            ]
        );
        $this->start_controls_tabs(
            'style-tabs-Two'
        );

        $this->start_controls_tab(
            'style_normal_tab-Two',
            [
                'label' => esc_html__('Normal', 'textdomain'),
            ]
        );
        $this->add_control(
            'Button-Two-Text-color',
            [
                'label' => esc_html__('Button Two Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .primary-outline' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .crete__hero_two_button_two' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .crete__hero_two_button_two svg path' => 'fill: {{VALUE}}',

                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Button-Two-Text-typography',
                'label' => esc_html__('Button Two Text Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .primary-outline, {{WRAPPER}} .crete__hero_two_button_two',
            ]
        );
        $this->add_control(
            'Button-Two-BG-color',
            [
                'label' => esc_html__('Button Two BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .primary-outline' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .crete__hero_two_button_two' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Button-Two-border-radius',
            [
                'label' => esc_html__('Button Two Border Radius', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'selectors' => [
                    '{{WRAPPER}} .primary-outline, {{WRAPPER}} .crete__hero_two_button_two' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'Button-Two-border',
                'label' => esc_html__('Button Two Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .primary-outline, {{WRAPPER}} .crete__hero_two_button_two',
            ]
        );
        $this->end_controls_tab();
        /*END STYLE NORMAL TAB*/
        $this->start_controls_tab(
            'style_hover_tab_two',
            [
                'label' => esc_html__('Hover', 'textdomain'),
            ]
        );
        $this->add_control(
            'Button-two-Text-Hover-color',
            [
                'label' => esc_html__('Button Two Text Hover Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-content-left .primary-outline:hover' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .crete__hero_two_button_two:hover' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .crete__hero_two_button_two:hover svg path' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Button-Two-Hover-BG-color',
            [
                'label' => esc_html__('Button Two Hover BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .primary-outline::before' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .crete__hero_two_button_two:before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'Button-Two-Hover-border',
                'label' => esc_html__('Button Two Hover-Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .hero-content-left .primary-outline:hover',
            ]
        );
        $this->end_controls_tab();
        /*END STYLE HOVER TAB*/
        $this->end_controls_tabs();

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        if ('style_1' == $settings['Hero-Style']) {
            crete_hero_style_1($settings);
        } elseif ('style_2' == $settings['Hero-Style']) {
            crete_hero_style_2($settings);
        } elseif ('style_3' == $settings['Hero-Style']) {
            crete_hero_style_3($settings);
        }elseif ('style_4' == $settings['Hero-Style']) {
            crete_hero_style_4($settings);
        }else{
            crete_hero_style_1($settings);
        }
    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \Crete_Hero());

