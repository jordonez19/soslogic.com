<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_info_section_two extends \Elementor\Widget_Base
{

    public function get_name() {
        return 'crete_info_section_two';
    }

    public function get_title() {
        return esc_html__('Crete Info Section Two', 'crete-core');
    }

    public function get_icon() {
        return 'eicon-info-box';
    }

    public function get_categories() {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls() {


        $this->start_controls_section(
            'crete_info_main_section',
            [
                'label' => esc_html__('Crete Info Section', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'crete_info_revarce_option',
            [
                'label' => esc_html__('Reverce Left/Right', 'textdomain'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'row-reverse' => [
                        'title' => esc_html__('Reverce ', 'textdomain'),
                        'icon' => 'eicon-wrap',
                    ],
                    'inherit' => [
                        'title' => esc_html__('Normal', 'textdomain'),
                        'icon' => ' eicon-nowrap',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .crete__experts-section-row' => 'flex-direction: {{VALUE}};',
                ],
            ]
        );
        
        	$this->add_control(
			'image_box_style',
			[
				'label' => esc_html__( 'Box Style', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style-one',
				'options' => [
				
					'style-one' => esc_html__( 'Style One', 'textdomain' ),
					'style-two'  => esc_html__( 'Style Two', 'textdomain' ),
				
				],
			
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
            'crete_info_discount_content',
            [
                'label' => esc_html__('Crete Info Discount Content ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'crete_right_discount_title',
            [
                'label' => esc_html__('Discount Title', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('50% discount on earyly purchase', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_info_Title_content',
            [
                'label' => esc_html__('Title Content ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'crete_right_main_title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Work With Our Full Time ', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'crete_main_title_style_text',
            [
                'label' => esc_html__('Style Title', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Experts ', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'crete_main_title_style_text_after',
            [
                'label' => esc_html__('Style Title After Text', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_description_content',
            [
                'label' => esc_html__('Description Content ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'crete_decription',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Leo in taciti conubia, arcu dapibus convallis commodo. Bibendum tristique lacus aenean quisque ut ', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),

            ]
        );
        $this->add_control(
            'crete_right_decription_style_text',
            [
                'label' => esc_html__('Description Stylish Text', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('primis torquent dis eget', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),

            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section-Box-Content',
            [
                'label' => esc_html__('Section Box Content', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'check_icon',
            [
                'label' => esc_html__('Check Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'fa-solid',
                ],
            ]
        );
        $this->add_control(
            'box_title',
            [
                'label' => esc_html__('Box Title', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('The best agency solution 2023', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'box_info',
            [
                'label' => esc_html__('Box Info', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('These tools will allow you to handle tasks such hanging sves assemble furniture', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'Button-Content',
            [
                'label' => esc_html__('Button Content', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'btn_text',
            [
                'label' => esc_html__('Button Text', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Learn More', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'btn_link',
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
            'Phone-Number-Content',
            [
                'label' => esc_html__('Phone Number Content', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'call_icon',
            [
                'label' => esc_html__('Call Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-phone-alt',
                    'library' => 'fa-solid',
                ],
            ]
        );
        $this->add_control(
            'call_before_text',
            [
                'label' => esc_html__('Call Before Text', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Call Us 2 4/7', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'tel_number',
            [
                'label' => esc_html__('Phone Numbre', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('(+25) 2158.2693', 'textdomain'),
                'placeholder' => esc_html__('Type your Number here', 'textdomain'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section-Image',
            [
                'label' => esc_html__('Section Image', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'meeting_img',
            [
                'label' => esc_html__('Metting Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Counter-Box',
            [
                'label' => esc_html__('Counter Box', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'counter_box',
            [
                'label' => esc_html__( 'Enable Counter Box', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'textdomain' ),
                'label_off' => esc_html__( 'Hide', 'textdomain' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'counter_number',
            [
                'label' => esc_html__('Counter Number', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('25', 'textdomain'),
                'placeholder' => esc_html__('Type your number here', 'textdomain'),
                'condition' => [
                    'counter_box' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'counter_suffix',
            [
                'label' => esc_html__('Counter Number Suffix', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('+', 'textdomain'),
                'placeholder' => esc_html__('Type your Suffix here', 'textdomain'),
                'condition' => [
                    'counter_box' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'counter_text',
            [
                'label' => esc_html__('Counter Text', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Years of Experience', 'textdomain'),
                'placeholder' => esc_html__('Type your Text here', 'textdomain'),
                'condition' => [
                    'counter_box' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

        // Style Tabs
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
        $this->add_responsive_control(
            'section-padding',
            [
                'label' => esc_html__('Section Padding', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'selectors' => [
                    '{{WRAPPER}} .experts-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Discount-Text-style',
            [
                'label' => esc_html__('Discount Text Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Discount-Text-color',
            [
                'label' => esc_html__('Discount Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Discount-Text-typography',
                'label' => esc_html__('Discount Text Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .cr-subtitle',
            ]
        );
        $this->add_control(
            'Discount-Text-border-color',
            [
                'label' => esc_html__('Discount Text Border Color', 'textdomain'),
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
                    '{{WRAPPER}} .crete_info_two_title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Heading-typography',
                'label' => esc_html__('Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete_info_two_title',
            ]
        );
        $this->add_control(
            'Special-Heading-color',
            [
                'label' => esc_html__('Special Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete_right_main_title_style_text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Special-Heading-BG-color',
            [
                'label' => esc_html__('Special Heading BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete_right_main_title_style_text' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Description-style',
            [
                'label' => esc_html__('Description Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Description-color',
            [
                'label' => esc_html__('Description Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete_info_two_decription' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Description-typography',
                'label' => esc_html__('Description Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete_info_two_decription',
            ]
        );
        $this->add_control(
            'Special-Description-color',
            [
                'label' => esc_html__('Special Description Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete_right_decription_style_text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section-Box-style',
            [
                'label' => esc_html__('Section Box Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Check-Icon-color',
            [
                'label' => esc_html__('Check Icon Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta-box .icon-wrapper, {{WRAPPER}} .cta-box .icon-wrapper path' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Check-Icon-BG-color',
            [
                'label' => esc_html__('Check Icon BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta-box .icon-wrapper' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Box-Title-color',
            [
                'label' => esc_html__('Box Title Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta-box h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Box-Title-typography',
                'label' => esc_html__('Box Title Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .cta-box h6',
            ]
        );
        $this->add_control(
            'Box-Info-color',
            [
                'label' => esc_html__('Box Info Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta-box p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Box-Info-typography',
                'label' => esc_html__('Box Info Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .cta-box p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Button-style',
            [
                'label' => esc_html__('Button Style', 'textdomain'),
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
            'Button-One-Text-Hover-color',
            [
                'label' => esc_html__('Button Text Hover Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .primary-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Button-One-Hover-BG-color',
            [
                'label' => esc_html__('Button Hover BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .primary-btn::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'Button-Hover-border',
                'label' => esc_html__('Button Hover Border', 'textdomain'),
                'selector' => '{{WRAPPER}} .primary-btn',
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
            'Call-Icon-color',
            [
                'label' => esc_html__('Call Icon Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon-tel i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Call-Icon-BG-color',
            [
                'label' => esc_html__('Call Icon BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon-tel .primary-bg-color' => 'background-color: {{VALUE}} !important',
                ],
            ]
        );
        $this->add_control(
            'Number-Before-Text-color',
            [
                'label' => esc_html__('Number Before Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .call_before_text' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Number-Before-Text-typography',
                'label' => esc_html__('Number Before Text Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .call_before_text',
            ]
        );
        $this->add_control(
            'Number-color',
            [
                'label' => esc_html__('Number Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tel_number' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Number-typography',
                'label' => esc_html__('Number Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .tel_number',
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
                    '{{WRAPPER}} .crete__counter_number' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Counter-Number-typography',
                'label' => esc_html__('Counter Number Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__counter_number',
            ]
        );
        $this->add_control(
            'Counter-Number-Text-color',
            [
                'label' => esc_html__('Counter Number Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__counter_text' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Counter-Number-Text-typography',
                'label' => esc_html__('Counter Number Text Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__counter_text',
            ]
        );
        $this->add_control(
            'Counter-Number-BG-color',
            [
                'label' => esc_html__('Counter Number BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .exp-year-box' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $boxstyle = $settings['image_box_style'];
        ?>
        
        <?php if ('style-one' == $boxstyle){
            crete_info_section_style_second_1($settings);
        }elseif ('style-two' == $boxstyle){
            crete_info_section_style_second_2($settings);
        } ?>
        

        <?php
    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \crete_info_section_two());

