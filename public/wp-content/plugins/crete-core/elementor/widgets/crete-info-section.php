<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_info_section extends \Elementor\Widget_Base
{

    public function get_name() {
        return 'crete_info_section';
    }

    public function get_title() {
        return esc_html__('Crete Info Section', 'crete-core');
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
            'crete_info_style',
            [
                'label' => esc_html__( 'Crete Info Section Style', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'info_one',
                'options' => [
                    'info_one' => esc_html__( 'Style One', 'textdomain' ),
                    'info_two'  => esc_html__( 'Style Two', 'textdomain' ),
                    'info_three'  => esc_html__( 'Style Three', 'textdomain' ),
                    'info_four'  => esc_html__( 'Style Four', 'textdomain' ),
                    'info_five'  => esc_html__( 'Style Five', 'textdomain' ),
                ],

            ]
        );
        $this->add_control(
            'crete_info_revarce_option',
            [
                'label' => esc_html__( 'Reverse Left/Right', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'row-reverse' => [
                        'title' => esc_html__( 'Reverse ', 'textdomain' ),
                        'icon' => 'eicon-wrap',
                    ],
                    'inherit' => [
                        'title' => esc_html__( 'Normal', 'textdomain' ),
                        'icon' => ' eicon-nowrap',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .about-section .row , {{WRAPPER}} .crete_reverce_info' => 'flex-direction: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'crete_info_left_site',
            [
                'label' => esc_html__('Crete Info Left Section ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'crete_left_image_one',
            [
                'label' => esc_html__( 'Left First Image', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'crete_left_image_two',
            [
                'label' => esc_html__( 'Left Second Image', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'crete_info_style' => 'info_two',
                ],
            ]
        );

        $this->add_control(
            'crete_left_title',
            [
                'label' => esc_html__( 'Crete Left Text', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'We are since 2002! Over 200 Awards', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                'condition' => [
                    'crete_info_style' => 'info_one',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_info_right_site',
            [
                'label' => esc_html__('Crete Info Right Section ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'crete_right_discount_title',
            [
                'label' => esc_html__( 'Crete Discount Title', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( '50% discount on early purchase', 'textdomain' ),
                'label_block' =>true,
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                'condition' => [
                    'crete_info_style' => ['info_one' , 'info_two' , 'info_three',]

                ],

            ]
        );
        $this->add_control(
            'crete_right_main_title',
            [
                'label' => esc_html__( 'Crete Main Title', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'We create digital Ideas that are', 'textdomain' ),
                'label_block' =>true,
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),


            ]
        );
        $this->add_control(
            'crete_right_main_title_style_text',
            [
                'label' => esc_html__( 'Crete Main Title Style Text/Designation', 'textdomain' ),
                'label_block' =>true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'bigger', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),


            ]
        );
        $this->add_control(
            'crete_right_main_title_style_text_after',
            [
                'label' => esc_html__( 'Crete Main Title Style Text After', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'bigger', 'textdomain' ),
                'label_block' =>true,
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                'condition' => [
                    'crete_info_style' => 'info_two',
                ],

            ]
        );
        $this->add_control(
            'crete_right_decription',
            [
                'label' => esc_html__( 'Crete Decription', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label_block' =>true,
                'default' => esc_html__( 'Leo in taciti conubia, arcu dapibus convallis commodo. Bibendum tristique lacus aenean quisque ut', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),

            ]
        );


        $this->add_control(
            'crete_right_main_decription_style_text',
            [
                'label' => esc_html__( 'Crete Decription Style Text', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'primis torquent dis eget', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                'condition' => [
                    'crete_info_style' => ['info_one' , 'info_two' , 'info_three',]

                ],

            ]
        );
        $this->add_control(
            'crete_right_image_one',
            [
                'label' => esc_html__( 'Right Image Style One', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'crete_info_style' => 'info_one',
                ],
            ]
        );
        $this->add_control(
            'crete_right_image_decription_style',
            [
                'label' => esc_html__( 'Crete Image decription ', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Leo in taciti conubia, arcu dapibus convallis commodo sour Bibendum tristique lacus aenean quisque ut primis torquent dis eget awesome company feewdbacks
', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                'condition' => [
                    'crete_info_style' => 'info_one',
                ],
            ]
        );
        $this->add_control(
            'crete_right_button_one_text',
            [
                'label' => esc_html__( 'Crete Button One Text', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'More About Us', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),

            ]
        );
        $this->add_control(
            'crete_right_button__one_link',
            [
                'label' => esc_html__( 'Crete Button One Link', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'textdomain' ),
                'options' => [ 'url', 'is_external', 'nofollow' ],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'crete_right_button_two_text',
            [
                'label' => esc_html__( 'Crete Button Two Text', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get Started', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),

            ]
        );
        $this->add_control(
            'crete_right_button__two_link',
            [
                'label' => esc_html__( 'Crete Button Two Link', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'textdomain' ),
                'options' => [ 'url', 'is_external', 'nofollow' ],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'crete_right_button__two_link_icon',
            [
                'label' => esc_html__( 'Icon', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-arrow-right',
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
                'condition' => [
                    'crete_info_style' => 'info_two',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'crete_about_story_section_right_info_tab',
            [
                'label' => esc_html__('Crete About Story Info Section', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
              
                
                'condition' => [
			'crete_info_style' => [ 'info_four', 'info_five' ],
		        ],
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'info_sub_title',
            [
                'label' => esc_html__('Info Sub Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Amar Bazar High School', 'textdomain'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'info_title',
            [
                'label' => esc_html__('Info Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Secondary School Certificate', 'textdomain'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'info_icon',
            [
                'label' => esc_html__( 'Icon', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::ICONS,

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
            'info_list',
            [
                'label' => esc_html__('info List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'info_title' => esc_html__('info One', 'textdomain'),


                    ],
                    [
                        'info_title' => esc_html__('info Two', 'textdomain'),


                    ],
                    [
                        'info_title' => esc_html__('info Three', 'textdomain'),


                    ],
                    [
                        'info_title' => esc_html__('info Four', 'textdomain'),


                    ],


                ],
                'title_field' => '{{{ info_title }}}',
            ]
        );
        $this->end_controls_section();
        // Style Tabs
        $this->start_controls_section(
            'crete_info__section_style_left_image',
            [
                'label' => esc_html__('Crete Info Left Section Image Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'rete_info__section_style_left_image_border_radius',
            [
                'label' => esc_html__('Left Image Border Radius', 'crete-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .about-left img , {{WRAPPER}} .hm2-cta-left img ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_info__section_style_left_content',
            [
                'label' => esc_html__('Crete Info Left Section Conter Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'crete_info_style' => 'info_one',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_info__section_style_left_content_typo',
                'label' => esc_html__('Crete Info Left Content Typography', 'crete-core'),
                'selector' => '{{WRAPPER}} .ab-award-box h6',


            ]

        );
        $this->add_control(
            'crete_info__section_style_left_content_color',
            [
                'label' => esc_html__('Crete Info Left Content Color', 'crete-core'),
                'type' => \Elementor\Controls_Manager::COLOR,

                'selectors' => [
                    '{{WRAPPER}} .ab-award-box h6' => 'color: {{VALUE}};',
                ],

            ]
        );
        $this->add_control(
            'crete_info__section_style_left_content_bg_color',
            [
                'label' => esc_html__('Crete Info Left Content Background Color', 'crete-core'),
                'type' => \Elementor\Controls_Manager::COLOR,

                'selectors' => [
                    '{{WRAPPER}} .ab-award-box' => 'background-color: {{VALUE}}!important;',
                    '{{WRAPPER}} .ab-award-box::before' => 'border-color: {{VALUE}};',
                ],

            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_info__section_style_discount',
            [
                'label' => esc_html__('Crete Info Right Discount Text', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_info__section_style_discount_tect_color',
            [
                'label' => esc_html__( 'Right Discount Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_info__section_style_discount_typography',
                'label' => esc_html__( 'Right Discount Typography', 'textdomain' ),
                'selector' => '{{WRAPPER}} .cr-subtitle',
            ]
        );
        $this->add_control(
            'crete_info__section_style_discount_text_border_color',
            [
                'label' => esc_html__( 'Right Discount Border Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-subtitle::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_info__section_style_main_title',
            [
                'label' => esc_html__('Crete Info Right Main Text', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_info__section_style_main_text_color',
            [
                'label' => esc_html__( 'Right Main Text Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-right h2 , {{WRAPPER}} .hm2-cta-content h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_info__section_style_main_text_typography',
                'label' => esc_html__( 'Right main Title Typography', 'textdomain' ),
                'selector' => '{{WRAPPER}} .about-right h2 , {{WRAPPER}} .hm2-cta-content h2',
            ]
        );
        $this->add_control(
            'crete_info__section_style_title_text_style_color',
            [
                'label' => esc_html__( 'Right Main Title Befor Text Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-right h2 span , {{WRAPPER}} .hm2-cta-content h2 span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'crete_info__section_style_title_text_style_color_bg',
            [
                'label' => esc_html__( 'Right Main Title Befor Text Bg Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-right h2 span , {{WRAPPER}} .hm2-cta-content span' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_info__section_style_discription',
            [
                'label' => esc_html__('Crete Info Right Discription Text', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_info__section_style_discription_text_color',
            [
                'label' => esc_html__( 'Right Discription Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete_about_right_decription , {{WRAPPER}}  .hm2-cta-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_info__section_style_discription_typography',
                'label' => esc_html__( 'Right Discription Typography', 'textdomain' ),
                'selector' => '{{WRAPPER}} .crete_about_right_decription , {{WRAPPER}}  .hm2-cta-content p',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'crete_info__section_style_image_cart',
            [
                'label' => esc_html__('Crete Info Right Image Cart', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_info__section_style_image_border_redious',
            [
                'label' => esc_html__( 'Image Border Radius', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'selectors' => [
                    '{{WRAPPER}} .crete_hm_one_image_card img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_control(
            'crete_info__section_style_image_cart_text_color',
            [
                'label' => esc_html__( 'Right Discription Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete_about_right_decription , {{WRAPPER}}  .hm2-cta-content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_info__section_style_image_cart_typography',
                'label' => esc_html__( 'Right Discription Typography', 'textdomain' ),
                'selector' => '{{WRAPPER}} .crete_about_right_decription , {{WRAPPER}}  .hm2-cta-content p',
            ]
        );
        $this->add_control(
            'crete_info__section_style_image_cart_bottom_color',
            [
                'label' => esc_html__( 'Right Bottom Border Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .spacer' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_info__section_style_right_button',
            [
                'label' => esc_html__('Crete Info Right Button Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->start_controls_tabs(
            'style_tabs'
        );
        // Button Normal Style
        $this->start_controls_tab(
            'style_normal_tab',
            [
                'label' => esc_html__('Normal', 'crete-core'),
            ]
        );
        $this->add_control(
            'btn_one_right_tex_color',
            [
                'label' => esc_html__('Button One Text Color', 'crete-core'),
                'type' => \Elementor\Controls_Manager::COLOR,

                'selectors' => [
                    '{{WRAPPER}} .template-btn' => ' color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_one_content_typography',
                'label' => esc_html__('Button One Text Typography', 'crete-core'),
                'selector' => '{{WRAPPER}} .template-btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_one_right_background',
                'label' => esc_html__('Button One Background', 'crete-core'),
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .template-btn',
            ]
        );
        $this->add_control(
            'btn_one_right_padding',
            [
                'label' => esc_html__('Button One Padding', 'crete-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .template-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_one_right_border',
                'label' => esc_html__('Button One Border', 'crete-core'),
                'selector' => '{{WRAPPER}} .template-btn',
            ]
        );
        $this->add_control(
            'btn_one_right_border_radius',
            [
                'label' => esc_html__('Button One Border Radius', 'crete-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .template-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_two_content_typography',
                'label' => esc_html__('Button Two Text Typography', 'crete-core'),
                'selector' => '{{WRAPPER}} .template-btn',
            ]
        );
        $this->add_control(
            'btn_two_right_tex_color',
            [
                'label' => esc_html__('Button Two Text Color', 'crete-core'),
                'type' => \Elementor\Controls_Manager::COLOR,

                'selectors' => [
                    '{{WRAPPER}} .secondary-btn , {{WRAPPER}} .outline-secondary ' => ' color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_two_right_background',
                'label' => esc_html__('Button Two Background', 'crete-core'),
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .secondary-btn , {{WRAPPER}} .outline-secondary ',
            ]
        );
        $this->add_control(
            'btn_two_right_padding',
            [
                'label' => esc_html__('Button Two Padding', 'crete-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .secondary-btn , {{WRAPPER}} .outline-secondary ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_two_right_border',
                'label' => esc_html__('Button Two Border', 'crete-core'),
                'selector' => '{{WRAPPER}} .secondary-btn , {{WRAPPER}} .outline-secondary ',
            ]
        );
        $this->add_control(
            'btn_two_right_border_radius',
            [
                'label' => esc_html__('Button Two Border Radius', 'crete-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .secondary-btn , {{WRAPPER}} .outline-secondary ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        // Button Hover Style
        $this->start_controls_tab(
            'style_hover_tab',
            [
                'label' => esc_html__('Hover', 'crete-core'),
            ]
        );
        $this->add_control(
            'btn_one_right_tex_color_hover',
            [
                'label' => esc_html__('Button One Text Hover Color', 'crete-core'),
                'type' => \Elementor\Controls_Manager::COLOR,

                'selectors' => [
                    '{{WRAPPER}} .template-btn:hover' => ' color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_one_content_typography_hover',
                'label' => esc_html__('Button One Text Hover Typography', 'crete-core'),
                'selector' => '{{WRAPPER}} .template-btn:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_one_right_background_hover',
                'label' => esc_html__('Button One Hover Background', 'crete-core'),
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .primary-btn::before',
            ]
        );
        $this->add_control(
            'btn_one_right_padding_hover',
            [
                'label' => esc_html__('Button One Hover Padding', 'crete-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .template-btn:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_one_right_border_hover',
                'label' => esc_html__('Button One Hover Border', 'crete-core'),
                'selector' => '{{WRAPPER}} .template-btn:hover',
            ]
        );
        $this->add_control(
            'btn_one_right_border_radius_hvr',
            [
                'label' => esc_html__('Button One Hover Border Radius', 'crete-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .template-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_two_content_typography_hvr',
                'label' => esc_html__('Button Two Hover Text Typography', 'crete-core'),
                'selector' => '{{WRAPPER}} .template-btn:hover',
            ]
        );
        $this->add_control(
            'btn_two_right_tex_color_hvr',
            [
                'label' => esc_html__('Button Two Hover Text Color', 'crete-core'),
                'type' => \Elementor\Controls_Manager::COLOR,

                'selectors' => [
                    '{{WRAPPER}} .secondary-btn:hover , {{WRAPPER}} .outline-secondary:hover ' => ' color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_two_right_background_hvr',
                'label' => esc_html__('Button Two Hover Background', 'crete-core'),
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .secondary-btn::before, {{WRAPPER}} .outline-secondary::before  ',
            ]
        );
        $this->add_control(
            'btn_two_right_padding_hvr',
            [
                'label' => esc_html__('Button Two Hover Padding', 'crete-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .secondary-btn:hover , {{WRAPPER}} .outline-secondary:hover ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_two_right_border_hvr',
                'label' => esc_html__('Button Two Hover Border', 'crete-core'),
                'selector' => '{{WRAPPER}} .secondary-btn:hover , {{WRAPPER}} .outline-secondary:hover ',
            ]
        );
        $this->add_control(
            'btn_two_right_border_radius_hvr',
            [
                'label' => esc_html__('Button Two Hover Border Radius', 'crete-core'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .secondary-btn:hover , {{WRAPPER}} .outline-secondary:hover ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();


        $this->end_controls_section();




    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        if ('info_one' == $settings['crete_info_style']){
            crete_info_section_style_1($settings);
        }elseif ('info_two' == $settings['crete_info_style']){
            crete_info_section_style_2($settings);
        } elseif ('info_three' == $settings['crete_info_style']){
            crete_info_section_style_3($settings);
        }elseif ('info_four' == $settings['crete_info_style']){
            crete_info_section_style_4($settings);
        }elseif ('info_five' == $settings['crete_info_style']){
            crete_info_section_style_5($settings);
        }

        ?>

        <?php
    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \crete_info_section());

