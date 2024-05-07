<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_service_grid extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_service_grid';
    }

    public function get_title()
    {
        return esc_html__('Crete Service Section', 'crete-core');
    }

    public function get_icon()
    {
        return 'eicon-call-to-action';
    }

    public function get_categories()
    {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'crete_service_main_section',
            [
                'label' => esc_html__('Crete Top service Section', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'crete_service_style',
            [
                'label' => esc_html__( 'Crete Info Section Style', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'service_one',
                'options' => [
                    'service_one' => esc_html__( 'Grid', 'textdomain' ),
                    'service_two'  => esc_html__( 'Slider', 'textdomain' ),
                    'service_three' => esc_html__( 'Grid Two', 'textdomain' ),
                    'service_four' => esc_html__( 'Grid Three', 'textdomain' ),
                ],

            ]
        );
        $this->add_control(
            'crete_searvice_top_sub_text',
            [
                'label' => esc_html__('Crete searvice Top Sub Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('50% discount on early purchase', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),

            ]
        );
        $this->add_control(
            'crete_searvice_top_title_text',
            [
                'label' => esc_html__('Crete searvice Top Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Service Area', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),

            ]
        );
        $this->add_control(
            'crete_searvice_top_title_style_text',
            [
                'label' => esc_html__('Crete searvice Top Title Style Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Service Area', 'textdomain'),
                'placeholder' => esc_html__('Area', 'textdomain'),
                'condition' => [
                    'crete_service_style' => 'service_two',
                ],

            ]
        );
        $this->add_control(
            'crete_searvice_top_decription_text',
            [
                'label' => esc_html__('Crete searvice Top Decription', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration, by injected humour.', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),

            ]
        );
        	$this->add_control(
			'service_vector',
			[
				'label' => esc_html__( 'Background Net Vector', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);
			$this->add_control(
			'circle_shape_enable',
			[
				'label' => esc_html__( 'Circle Shape', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'textdomain' ),
				'label_off' => esc_html__( 'Hide', 'textdomain' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_main_service_all_content',
            [
                'label' => esc_html__('Crete service Main Section ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'crete_main_searvice_image',
            [
                'label' => esc_html__( 'Crete Searvice Image', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'crete_main_searvice_title',
            [
                'label' => esc_html__('Crete Searvice Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Web Development', 'textdomain'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'crete_main_searvice_decription',
            [
                'label' => esc_html__('Crete Searvice Decription', 'textdomain'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__('There are many variations of passages of lorem Ipsum available but to the majority have suffered but the into majority have suffered alteration

', 'textdomain'),
                'show_label' => false,
            ]
        );
        $repeater->add_control(
            'crete_main_searvice_link_title',
            [
                'label' => esc_html__('Crete Searvice Button Link Test', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Get Started ', 'textdomain'),
                'label_block' => true,
            ]
        );
        
     

        $repeater->add_control(
            'crete_main_searvice_link',
            [
                'label' => esc_html__('Crete Searvice Button Link URL', 'textdomain'),
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
            'crete_main_sextra_title',
            [
                'label' => esc_html__('Crete Extra Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Apps Development ', 'textdomain'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'crete_main_searvice_button_icon',
            [
                'label' => esc_html__('Crete Searvice Button Icon', 'textdomain'),
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
            ]
        );
        $this->add_control(
            'crete_main_searvice_section',
            [
                'label' => esc_html__('Repeater List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => esc_html__('Title #1', 'textdomain'),
                        'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'textdomain'),
                    ],
                    [
                        'list_title' => esc_html__('Title #2', 'textdomain'),
                        'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'textdomain'),
                    ],
                    [
                        'list_title' => esc_html__('Title #3', 'textdomain'),
                        'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'textdomain'),
                    ],
                    [
                        'list_title' => esc_html__('Title #4', 'textdomain'),
                        'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'textdomain'),
                    ],
                ],
                'title_field5' => '{{{ list_title }}}',
            ]
        );



        $this->end_controls_section();

        // Style Tabs
        $this->start_controls_section(
            'crete_service__section_style',
            [
                'label' => esc_html__('Service Section Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'crete_service__section_style_bg',
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .service-section',
            ]
        );
        $this->add_control(
            'crete_service__section_shape_one',
            [
                'label' => esc_html__( 'Service Section shape one Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .circle-shape-1 , {{WRAPPER}} .cr2-brand-n-service .circle-shape-1' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'crete_service__section_shape_two',
            [
                'label' => esc_html__( 'Service Section Shape Two Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .circle-shape-2 , {{WRAPPER}} .cr2-brand-n-service .circle-shape-2' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
			'service_anim',
			[
				'label' => esc_html__( 'Scroll Animation', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Enable', 'textdomain' ),
				'label_off' => esc_html__( 'Disable', 'textdomain' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
            'crete_service__section_top_text_style',
            [
                'label' => esc_html__('Crete service Top Text Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_service__section_top_text_style_sub_title_color',
            [
                'label' => esc_html__('Crete service Top SubTitle Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-subtitle ' => 'color: {{VALUE}}!important',
                    '{{WRAPPER}} .cr-subtitle.text-white::before , {{WRAPPER}} .cr-subtitle::before' => 'background-color: {{VALUE}}',

                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_service__section_top_text_style_sub_title_typo',
                'label' => esc_html__('Crete service Top SubTitle Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .cr-subtitle',
            ]
        );
        $this->add_control(
            'crete_service__section_top_text_style_title_color',
            [
                'label' => esc_html__('Crete service Top Title Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title h2 , {{WRAPPER}} .crete_searvice_top_title_text ' => 'color: {{VALUE}}!important',

                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_service__section_top_text_style_title_typo',
                'label' => esc_html__('Crete service Top Title Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .section-title h2 , {{WRAPPER}} .crete_searvice_top_title_text',
            ]
        );
        $this->add_control(
            'crete_service__section_top_text_style_decription_color',
            [
                'label' => esc_html__('Crete service Top Decription Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete_searvice_top_decription_text , {{WRAPPER}} .crete_searvice_top_title_text span' => 'color: {{VALUE}}',

                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_service__section_top_text_style_decription_typo',
                'label' => esc_html__('Crete service Top Decription Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete_searvice_top_decription_text , {{WRAPPER}} .crete_searvice_top_title_text span',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_service__section_main_section_style',
            [
                'label' => esc_html__('Crete service Main Box ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_service__section_main_box_bg_color',
            [
                'label' => esc_html__('Crete service Main Box Background Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm2-service-box , {{WRAPPER}} .service-card' => 'background-color: {{VALUE}}!important',
                ],
            ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
            'crete_service__section_main_image',
            [
                'label' => esc_html__('Crete service Main Image Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_service__section_image_bg_color',
            [
                'label' => esc_html__('Crete service Image Background Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm2-service-box .icon-wrapper::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'crete_service__section_image_border_color',
            [
                'label' => esc_html__('Crete service Image Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm2-service-box .icon-wrapper' => 'border-color: {{VALUE}}',
                ],
                'condition' => [
                    'crete_service_style' => 'service_two',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'crete_service__section_title_name',
            [
                'label' => esc_html__('Crete service Title Name Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_service__section_title_name_color',
            [
                'label' => esc_html__('Crete service Title Name Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-card h6 , {{WRAPPER}} .hm2-service-box h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_service__section_title_name_typography',
                'label' => esc_html__('Crete service Title Name Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .service-card h6 , {{WRAPPER}} .hm2-service-box h6',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'crete_service__section_decription',
            [
                'label' => esc_html__('Crete service Decription ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_service__section_decription_color',
            [
                'label' => esc_html__('Crete service Decription', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-card p , {{WRAPPER}} .hm2-service-box p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_service__section_decription_typography',
                'label' => esc_html__('Crete service Decription Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .service-card p , {{WRAPPER}} .hm2-service-box p',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'crete_service__section_button',
            [
                'label' => esc_html__('Crete service Button ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_service__section_button_color',
            [
                'label' => esc_html__('Crete service Button Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-card a ,  {{WRAPPER}} .hm2-service-box a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'crete_service__section_button_hover_color',
            [
                'label' => esc_html__('Crete service Button Hover Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-card:hover .explore-btn , {{WRAPPER}}  .hm2-service-box:hover .explore-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_service__section_buttonn_typography',
                'label' => esc_html__('Crete service Button Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .service-card a , {{WRAPPER}} .hm2-service-box a',
            ]
        );

        $this->end_controls_section();



    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        if ('service_one' == $settings['crete_service_style']){
            crete_service_grid($settings);
        }elseif ('service_two' == $settings['crete_service_style']){
            crete_service_slider($settings);
        } elseif ('service_three' == $settings['crete_service_style']){
            crete_service_grid_two($settings);
        } elseif ('service_four' == $settings['crete_service_style']){
            crete_service_grid_three($settings);
        }
        
        
        ?>



        <?php
    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \crete_service_grid());

