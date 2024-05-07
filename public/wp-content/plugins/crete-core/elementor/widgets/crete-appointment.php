<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

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
        return 'eicon-call-to-action';
    }

    public function get_categories() {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'About-Content',
            [
                'label' => esc_html__('About Content', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sub_heading',
            [
                'label' => esc_html__('Sub Heading', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('About Our Company', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'heading',
            [
                'label' => esc_html__('Heading', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('About Create', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'special_heading',
            [
                'label' => esc_html__('Special Heading', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Agency', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Tab-Content',
            [
                'label' => esc_html__('Tab Content', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'row_reverse',
            [
                'label' => esc_html__( 'Reverse Row', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'flex-row-reverse' => [
                        'title' => esc_html__( 'Reverce ', 'textdomain' ),
                        'icon' => 'eicon-wrap',
                    ],
                    'inherit' => [
                        'title' => esc_html__( 'Normal', 'textdomain' ),
                        'icon' => ' eicon-nowrap',
                    ],
                ],
                'toggle' => true,
            ]
        );
        $repeater->add_control(
            'tab_title',
            [
                'label' => esc_html__('Tab Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('About Company', 'textdomain'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tab_img',
            [
                'label' => esc_html__( 'Tab Image', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'tab_subtitle',
            [
                'label' => esc_html__('Tab Subtitle', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('More About Our Company', 'textdomain'),
                'show_label' => true,
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tab_heading',
            [
                'label' => esc_html__('Tab Heading', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('We Build Software Solutions For Big Industries', 'textdomain'),
                'show_label' => true,
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tab_description',
            [
                'label' => esc_html__('Tab Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Cras facilisi fringilla nisi sed eget vel quis sollicitudin sagittis. Hendrerit metus nost magna interdum cum habitant sodales, sollicitudin tincidunt consequat lacinia ullamcorper enim aptent', 'textdomain'),
                'show_label' => true,
            ]
        );
        $repeater->add_control(
            'Button-Content',
            [
                'label' => esc_html__('Button Content', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'tab_btn_label',
            [
                'label' => esc_html__('Button Label', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Lear More ', 'textdomain'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'tab_btn_link',
            [
                'label' => esc_html__('Button Link', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'textdomain'),
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'Phone-Number-Content',
            [
                'label' => esc_html__('Phone Number Content', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'phone_icon',
            [
                'label' => esc_html__('Phone Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-phone-alt',
                    'library' => 'fa-solid',
                ],
            ]
        );
        $repeater->add_control(
            'phone_number',
            [
                'label' => esc_html__('Phone Number', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('+25 (259) 214893-23', 'textdomain'),
                'placeholder' => esc_html__('+25 (259) 214893-23', 'textdomain'),
            ]
        );
        $repeater->add_control(
            'phone_number_bellow_text',
            [
                'label' => esc_html__('Phone Number Bellow Text', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('For Any Question', 'textdomain'),
                'placeholder' => esc_html__('Input Bellow Phone Number Text', 'textdomain'),
            ]
        );
        $repeater->add_control(
            'Counter-One-Content',
            [
                'label' => esc_html__('/*** Counter One Content ***/', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'counter_number_one',
            [
                'label' => esc_html__('Counter One Number', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('25', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $repeater->add_control(
            'counter_number_one_suffix',
            [
                'label' => esc_html__('Counter One Number Suffix', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('+', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $repeater->add_control(
            'counter_number_one_text',
            [
                'label' => esc_html__('Counter One Number Text', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Years on the market', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );


        $repeater->add_control(
            'Counter-Two-Content',
            [
                'label' => esc_html__('/*** Counter Two Content ***/', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'counter_number_two',
            [
                'label' => esc_html__('Counter Two Number', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('375', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $repeater->add_control(
            'counter_number_two_suffix',
            [
                'label' => esc_html__('Counter Two Number Suffix', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('+', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $repeater->add_control(
            'counter_number_two_text',
            [
                'label' => esc_html__('Counter Two Number Text', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Projects delivered so far', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__('Tab List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'tab_title' => esc_html__('About Company', 'textdomain'),
                    ],
                    [
                        'tab_title' => esc_html__('Our Mission', 'textdomain'),
                    ],
                    [
                        'tab_title' => esc_html__('Our Visssion', 'textdomain'),
                    ],
                    [
                        'tab_title' => esc_html__('Our Goal', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ tab_title }}}',
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
            'Sub-Heading-style',
            [
                'label' => esc_html__('Sub Heading Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Sub-Heading-color',
            [
                'label' => esc_html__('Sub Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__subheading' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Sub-Heading-typography',
                'label' => esc_html__('Sub Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__subheading',
            ]
        );
        $this->add_control(
            'Sub-Heading-Border-color',
            [
                'label' => esc_html__('Sub Heading Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-subtitle::before' => 'background-color: {{VALUE}}',
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
                    '{{WRAPPER}} .crete__heading' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Heading-typography',
                'label' => esc_html__('Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__heading',
            ]
        );
        $this->add_control(
            'Heading-Special-Text-color',
            [
                'label' => esc_html__('Heading Special Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__heading_special_heading' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Heading-Special-Text-BG-color',
            [
                'label' => esc_html__('Heading Special Text BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__heading_special_heading' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Tab-style',
            [
                'label' => esc_html__('Tab Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Tab-Title-color',
            [
                'label' => esc_html__('Tab Title Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-about-tab-control li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Tab-Title-typography',
                'label' => esc_html__('Tab Title Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .cr-about-tab-control li a',
            ]
        );
        $this->add_control(
            'Tab-Active-color',
            [
                'label' => esc_html__('Tab Active Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-about-tab-control li a.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Tab-Active-Border-color',
            [
                'label' => esc_html__('Tab Active Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-about-tab-control li a::before' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .cr-about-tab-control li a::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Tab-Sub-Heading-style',
            [
                'label' => esc_html__('Tab Sub Heading Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Tab-Sub-Heading-color',
            [
                'label' => esc_html__('Tab Sub Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__about_tab_subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Tab-Sub-Heading-typography',
                'label' => esc_html__('Tab Sub Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__about_tab_subtitle',
            ]
        );
        $this->add_control(
            'Tab-Sub-Heading-Border-color',
            [
                'label' => esc_html__('Tab Sub Heading Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-subtitle::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Tab-Heading-style',
            [
                'label' => esc_html__('Tab Heading Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Tab-Heading-color',
            [
                'label' => esc_html__('Tab Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__about_tab_title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Tab-Heading-typography',
                'label' => esc_html__('Tab Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__about_tab_title',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Tab-Descripiton-style',
            [
                'label' => esc_html__('Tab Descripiton Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Tab-Descripiton-color',
            [
                'label' => esc_html__('Tab Descripiton Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__about_tab_description' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Tab-Descripiton-typography',
                'label' => esc_html__('Tab Descripiton Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__about_tab_description',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Tab-Button-Style',
            [
                'label' => esc_html__('Tab Button Style', 'woodly-core'),
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
                    '{{WRAPPER}} .crete__about_tab_btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Button-Text-typography',
                'label' => esc_html__('Button Text Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__about_tab_btn',
            ]
        );
        $this->add_control(
            'Button-BG-color',
            [
                'label' => esc_html__('Button BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__about_tab_btn' => 'background-color: {{VALUE}}',
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
                    '{{WRAPPER}} .crete__about_tab_btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'Button-border',
                'label' => esc_html__('Button Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__about_tab_btn',
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
                    '{{WRAPPER}} .crete__about_tab_btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Button-Hover-BG-color',
            [
                'label' => esc_html__('Button Hover BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__about_tab_btn::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        /*END STYLE HOVER TAB*/
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'Phone-Number-style',
            [
                'label' => esc_html__('Phone Number Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Phone-Icon-color',
            [
                'label' => esc_html__('Phone Icon Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__about_tab_phone_btn .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Phone-Icon-Border-Color',
            [
                'label' => esc_html__('Phone Icon Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__about_tab_phone_btn .icon' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Phone-Number-Color',
            [
                'label' => esc_html__('Phone Number Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__about_tab_phone_number' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Phone-Number-typography',
                'label' => esc_html__('Phone Number Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__about_tab_phone_number',
            ]
        );
        $this->add_control(
            'Phone-Number-Bellow-Text-Color',
            [
                'label' => esc_html__('Phone Number Bellow Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__about_tab_phone_bellow_text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Phone-Number-Bellow-Text-typography',
                'label' => esc_html__('Phone Number Bellow Text Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__about_tab_phone_bellow_text',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Counter-style',
            [
                'label' => esc_html__('Counter Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Counter-Number-color',
            [
                'label' => esc_html__('Counter Number Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__about_tab_counter_number' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Counter-Number-typography',
                'label' => esc_html__('Counter Number Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__about_tab_counter_number',
            ]
        );
        $this->add_control(
            'Counter-Number-Text-color',
            [
                'label' => esc_html__('Counter Number Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__about_tab_counter_number_text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Counter-Number-Text-typography',
                'label' => esc_html__('Counter Number Text Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__about_tab_counter_number_text',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!--about section start-->
        <section class="cr-about-section ptb-100 overflow-hidden">
            <div class="container custom_container_width">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="section-title">

                            <?php if (!empty($settings['sub_heading'])) { ?>
                                <span class="cr-subtitle position-relative primary-text-color fw-semibold crete__subheading"><?php echo $settings['sub_heading']; ?></span>
                            <?php } ?>

                            <?php if (!empty($settings['heading'])) { ?>
                                <h2 class="mt-4 mb-60 crete__heading"><?php echo $settings['heading']; ?> <span class="primary-text-color primary-bg-light px-2 crete__heading_special_heading"><?php echo $settings['special_heading']; ?></span></h2>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs cr-about-tab-control">
                    <?php
                    $i = 0;
                    foreach ($settings['list'] as $item) {
                        $i++;
                        ?>
                        <li>
                            <a href="#<?php echo $item['_id']; ?>" class="<?php if (1 == $i) echo 'active'; ?>" data-bs-toggle="tab">
                                <?php echo $item['tab_title']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <div class="tab-content mt-5">
                    <?php
                    $i = 0;
                    foreach ($settings['list'] as $item) {
                        $i++;
                        ?>
                        <div class="tab-pane fade <?php if (1 == $i) echo 'show active'; ?>" id="<?php echo $item['_id']; ?>">
                            <div class="row g-5 align-items-center <?php echo $item['row_reverse']; ?>">

                                <?php if (!empty($item['tab_img']['url'])) { ?>
                                    <div class="col-xl-6">
                                        <div class="img-left crete__about_tab_img">
                                            <img src="<?php echo $item['tab_img']['url']; ?>" alt="not found" class="img-fluid rounded-4">
                                        </div>
                                    </div>
                                <?php } ?>

                                <div class="col-xl-6">
                                    <div class="tab-content-right mx-532">

                                        <?php if (!empty($item['tab_subtitle'])) { ?>
                                            <span class="cr-subtitle position-relative primary-text-color fw-semibold crete__about_tab_subtitle"><?php echo $item['tab_subtitle']; ?></span>
                                        <?php } ?>

                                        <?php if (!empty($item['tab_heading'])) { ?>
                                            <h3 class="mb-32 mt-4 crete__about_tab_title"><?php echo $item['tab_heading']; ?></h3>
                                        <?php } ?>

                                        <?php if (!empty($item['tab_description'])) { ?>
                                            <p class="mb-5 crete__about_tab_description"><?php echo $item['tab_description']; ?></p>
                                        <?php } ?>

                                        <div class="d-flex align-items-center gap-4 flex-wrap flex-sm-nowrap">

                                            <?php if (!empty($item['tab_btn_label'])) { ?>
                                                <a href="<?php echo $item['tab_btn_link']['url']; ?>" class="template-btn primary-btn crete__about_tab_btn"><?php echo $item['tab_btn_label']; ?></a>
                                            <?php } ?>

                                            <a href="tel:<?php echo $item['phone_number']; ?>" class="phone-btn crete__about_tab_phone_btn">
                                                <?php if (!empty($item['phone_icon']['value'])) { ?>
                                                    <span class="icon">
                                                    <?php \Elementor\Icons_Manager::render_icon($item['phone_icon'], ['aria-hidden' => 'true']); ?>
                                                </span>
                                                <?php } ?>
                                                <div>
                                                    <h5 class="mb-1 fw-semibold fs-20 crete__about_tab_phone_number"><?php echo $item['phone_number']; ?></h5>
                                                    <?php if (!empty($item['phone_number_bellow_text'])) { ?>
                                                        <span class="crete__about_tab_phone_bellow_text"><?php echo $item['phone_number_bellow_text']; ?></span>
                                                    <?php } ?>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center cr-tab-counter mt-40 flex-wrap flex-sm-nowrap">
                                            <div class="cr-tab-counter-single">
                                                <?php if (!empty($item['counter_number_one'])) { ?>
                                                    <h3 class="fw-semibold primary-text-color mb-0 crete__about_tab_counter_number"><span class="counter"><?php echo $item['counter_number_one']; ?></span><span><?php echo $item['counter_number_one_suffix']; ?></span></h3>
                                                <?php } ?>
                                                <?php if (!empty($item['counter_number_one_text'])) { ?>
                                                    <h6 class="fw-medium mb-0 fs-20 crete__about_tab_counter_number_text"><?php echo $item['counter_number_one_text']; ?></h6>
                                                <?php } ?>
                                            </div>

                                            <div class="cr-tab-counter-single">
                                                <?php if (!empty($item['counter_number_two'])) { ?>
                                                    <h3 class="fw-semibold primary-text-color mb-0 crete__about_tab_counter_number"><span class="counter"><?php echo $item['counter_number_two']; ?></span><span><?php echo $item['counter_number_two_suffix']; ?></span></h3>
                                                <?php } ?>
                                                <?php if (!empty($item['counter_number_two_text'])) { ?>
                                                    <h6 class="fw-medium mb-0 fs-20 crete__about_tab_counter_number_text"><?php echo $item['counter_number_two_text']; ?></h6>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </section>
        <!--about section end-->
        <?php

    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \crete_video_box());

