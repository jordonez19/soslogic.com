<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_testimonial extends \Elementor\Widget_Base
{

    public function get_name() {
        return 'crete_testimonial';
    }

    public function get_title() {
        return esc_html__('Crete Testimonial', 'crete-core');
    }

    public function get_icon() {
        return 'eicon-testimonial';
    }

    public function get_categories() {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'Testimonial-style-section',
            [
                'label' => esc_html__('Testimonial Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'Testimonial-Style',
            [
                'label' => esc_html__('Select Testimonial Style', 'textdomain'),
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
            'Testimonial_images_and_shapes',
            [
                'label' => esc_html__('Testimonial Images And Shapes', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'Testimonial-Style' => ['style_1'],
                ],
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
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section-Content',
            [
                'label' => esc_html__('Section Content', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_sub_title',
            [
                'label' => esc_html__('Section Sub Title', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Testimonial', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'section_title',
            [
                'label' => esc_html__('Section Title', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Customer Feedbacks', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'section_description',
            [
                'label' => esc_html__('Section Description', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Vulputate tincidunt feugiat pharetra primis tortor auctor posuer iaculis nisl phasellus quam pellentesque', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
                'condition' => [
                    'Testimonial-Style' => ['style_2'],
                ],
            ]
        );
        $this->add_control(
            'section_title_special_text',
            [
                'label' => esc_html__('Section Special Text', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Customers', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
                'condition' => [
                    'Testimonial-Style' => ['style_3'],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Counter-Content',
            [
                'label' => esc_html__('Counter Content', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'Testimonial-Style' => ['style_2'],
                ],
            ]
        );
        $this->add_control(
            'review_counter_number',
            [
                'label' => esc_html__('Counter Number', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('1200', 'textdomain'),
                'placeholder' => esc_html__('Type your Number here', 'textdomain'),
            ]
        );
        $this->add_control(
            'review_counter_suffix',
            [
                'label' => esc_html__('Counter Number Suffix', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('+', 'textdomain'),
                'placeholder' => esc_html__('Type your Number Suffix here', 'textdomain'),
            ]
        );
        $this->add_control(
            'review_counter_text',
            [
                'label' => esc_html__('Counter Text', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Full 5 Star review', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Review-Number-Content',
            [
                'label' => esc_html__('Review Number Content', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'Testimonial-Style' => ['style_2'],
                ],
            ]
        );
        $this->add_control(
            'ratting_number',
            [
                'label' => esc_html__('Rating Number', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('4.8', 'textdomain'),
                'placeholder' => esc_html__('Type your Number here', 'textdomain'),
            ]
        );
        $this->add_control(
            'ratting_text',
            [
                'label' => esc_html__('Rating Text', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Out of 5 average rating', 'textdomain'),
                'placeholder' => esc_html__('Type your Text here', 'textdomain'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Testimonial-Content',
            [
                'label' => esc_html__('Testimonial Content', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'quote_img_1',
            [
                'label' => esc_html__('Quote Image 1', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'description' => 'Quote image for Style one and Style Two'
            ]
        );
        $repeater->add_control(
            'comment',
            [
                'label' => __('Comment', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('“Penatibus etlectus quis sapien nibh fringilla varius elemenm blandit dui miestulum pretium cursusa augue praesent proin justo netus tar vestibulum taciti fringilla ultrices donec netus luctus mus sapien turpis varius libero lines”', 'textdomain'),
                'placeholder' => __('Input your Comment', 'textdomain'),
            ]
        );
        $repeater->add_control(
            'author_img',
            [
                'label' => esc_html__('Author Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'review_title',
            [
                'label' => esc_html__('Review Title', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('"Creative Designer"', 'textdomain'),
                'placeholder' => esc_html__('Revire Title For Style Three', 'textdomain'),
            ]
        );
        $repeater->add_control(
            'author_name',
            [
                'label' => esc_html__('Author Name', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Andrew Smith', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $repeater->add_control(
            'author_designation',
            [
                'label' => esc_html__('Author Designation', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('CEO at Company', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $repeater->add_control(
            'quote_img_2',
            [
                'label' => esc_html__('Quote Image 2', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'description' => 'Quote image for Style one and Style Two'
            ]
        );
        $repeater->add_control(
            'Enable-Reviwe',
            [
                'label' => esc_html__( 'Enable Review', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'textdomain' ),
                'label_off' => esc_html__( 'Hide', 'textdomain' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'description' => 'Review Only For Style Three And Style Four'
            ]
        );
        $repeater->add_control(
            'reivew',
            [
                'label' => esc_html__( 'Review', 'textdomain' ),
                'label_block' => false,
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 5,
                'step' => 1,
                'default' => 5,
                'description' => 'Review Only For Style Three And Style Four',
                'condition' => [
                    'Enable-Reviwe' => 'yes',
                ]

            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__('Testimonial List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'author_name' => esc_html__('Andrew Smith', 'textdomain'),
                    ], [
                        'author_name' => esc_html__('Jhon Doe', 'textdomain'),
                    ], [
                        'author_name' => esc_html__('Faky Lak', 'textdomain'),
                    ],[
                        'author_name' => esc_html__('Andrew Smith', 'textdomain'),
                    ],[
                        'author_name' => esc_html__('Jhon Doe', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ author_name }}}',
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
        $this->add_control(
            'Section-BG-color',
            [
                'label' => esc_html__('Section BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dark-bg-color, 
                    {{WRAPPER}} .cr2-feedback-section,
                    {{WRAPPER}} .hm4-feedback-section' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Section-Sub-Heading-style',
            [
                'label' => esc_html__('Section Sub Heading Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'Testimonial-Style' => ['style_1', 'style_2', 'style_3', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'Sub-Heading-color',
            [
                'label' => esc_html__('Sub Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__feedback-section-sub-heading' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Sub-Heading-typography',
                'label' => esc_html__('Sub Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__feedback-section-sub-heading',
            ]
        );
        $this->add_control(
            'Sub-Heading-Border-color',
            [
                'label' => esc_html__('Sub Heading Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__feedback-section-sub-heading::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Section-Heading-style',
            [
                'label' => esc_html__('Section Heading Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Heading-color',
            [
                'label' => esc_html__('Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title h2,
                     {{WRAPPER}} .crete__feedback-section-heading' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Heading-typography',
                'label' => esc_html__('Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .section-title h2,
                 {{WRAPPER}} .crete__feedback-section-heading',
            ]
        );
        $this->add_control(
            'Special-Heading-color',
            [
                'label' => esc_html__('Special Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__section_title_special_text' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'Testimonial-Style' => ['style_3'],
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Special-Heading-typography',
                'label' => esc_html__('Special Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__section_title_special_text',
                'condition' => [
                    'Testimonial-Style' => ['style_3'],
                ],
            ]
        );
        $this->add_control(
            'Special-Heading-BG-color',
            [
                'label' => esc_html__('Special Heading BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__section_title_special_text' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'Testimonial-Style' => ['style_3'],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Counter-Number-style',
            [
                'label' => esc_html__('Counter Number Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'Testimonial-Style' => ['style_2'],
                ],
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
                'selector' => '{{WRAPPER}} .crete__counter_number !important',
            ]
        );
        $this->add_control(
            'Counter-Text-color',
            [
                'label' => esc_html__('Counter Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__counter_text' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Review-Number-style',
            [
                'label' => esc_html__('Counter Review Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'Testimonial-Style' => ['style_2'],
                ],
            ]
        );
        $this->add_control(
            'Review-Number-color',
            [
                'label' => esc_html__('Review Number Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__review_number' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Review-Number-typography',
                'label' => esc_html__('Review Number Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__review_number !important',
            ]
        );
        $this->add_control(
            'Review-Text-color',
            [
                'label' => esc_html__('Review Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__review_text' => 'color: {{VALUE}} !important',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Testimonial-style',
            [
                'label' => esc_html__('Testimonial Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Testimonial-Box-BG-color',
            [
                'label' => esc_html__('Testimonial Box BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr2-feedback-vertical-slider .cr2-feedback-single' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .hm3-feedback-single' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .hm4-feedback-single' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'Testimonial-Style' => ['style_2', 'style_3', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'Testimonial-Heading-color',
            [
                'label' => esc_html__('Testimonial Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__review-title' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'Testimonial-Style' => ['style_3'],
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Testimonial-Heading-typography',
                'label' => esc_html__('Testimonial Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__review-title',
                'condition' => [
                    'Testimonial-Style' => ['style_3'],
                ],
            ]
        );
        $this->add_control(
            'Comment-color',
            [
                'label' => esc_html__('Comment Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feedback-single .clients-comment' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .crete__testimonial_comment' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Comment-typography',
                'label' => esc_html__('Comment Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .feedback-single .clients-comment,
                 {{WRAPPER}} .crete__testimonial_comment',
            ]
        );
        $this->add_control(
            'Comment-Bottom-Border-color',
            [
                'label' => esc_html__('Comment Bottom Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .spacer' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Review-BG-color',
            [
                'label' => esc_html__('Review BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-feedback-single .star-ratings' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .hm4-feedback-single .star-ratings' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'Testimonial-Style' => ['style_3', 'style_4'],
                ],
            ]
        );
        $this->add_control(
            'Name-color',
            [
                'label' => esc_html__('Name Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__testimonial_author_name' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Name-typography',
                'label' => esc_html__('Name Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__testimonial_author_name',
            ]
        );
        $this->add_control(
            'Designation-color',
            [
                'label' => esc_html__('Designation Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__testimonial_author_designation' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Designation-typography',
                'label' => esc_html__('Designation Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__testimonial_author_designation',
            ]
        );
        $this->add_control(
            'Arrow-color',
            [
                'label' => esc_html__('Arrow Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feedback-slider path' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .hm4-feedback-slider .prev-btn svg path' => 'fill: {{VALUE}}',
                    '{{WRAPPER}} .hm4-feedback-slider .next-btn svg path' => 'fill: {{VALUE}}',
                ],
                'condition' => [
                    'Testimonial-Style' => ['style_1','style_4'],
                ],
            ]
        );
        $this->add_control(
            'Hover-Arrow-color',
            [
                'label' => esc_html__('Hover Arrow Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feedback-slider .prev-arrow:hover svg path, 
                    {{WRAPPER}} .feedback-slider .next-arrow:hover svg path,
                    {{WRAPPER}} .hm4-feedback-slider .prev-btn:hover svg path,
                    {{WRAPPER}} .hm4-feedback-slider .next-btn:hover svg path' => 'fill: {{VALUE}}',
                ],
                'condition' => [
                    'Testimonial-Style' => ['style_1','style_4'],
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        if ('style_1' == $settings['Testimonial-Style']) {
            crete_testimonial_style_1($settings);
        } elseif ('style_2' == $settings['Testimonial-Style']) {
            crete_testimonial_style_2($settings);
        }elseif ('style_3' == $settings['Testimonial-Style']) {
            crete_testimonial_style_3($settings);
        }elseif ('style_4' == $settings['Testimonial-Style']) {
            crete_testimonial_style_4($settings);
        }else{
            crete_testimonial_style_1($settings);
        }
    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \crete_testimonial());

