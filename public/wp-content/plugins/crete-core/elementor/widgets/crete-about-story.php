<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_about_story extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_about_story';
    }

    public function get_title()
    {
        return esc_html__('Crete About Story', 'crete-core');
    }

    public function get_icon()
    {
        return 'eicon-crete_about_story';
    }

    public function get_categories()
    {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'crete_about_story_section_style_tab',
            [
                'label' => esc_html__('Crete About Story Tab', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'crete_about_style',
            [
                'label' => esc_html__( 'Crete About StoryStyle', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'about_story_one',
                'options' => [
                    'about_story_one' => esc_html__( 'Style One', 'textdomain' ),
                    'about_story_two'  => esc_html__( 'Style Two', 'textdomain' ),

                ],

            ]
        );
        $this->add_control(
            'crete_about_style_ex_ed_on_off',
            [
                'label' => esc_html__( 'Crete About education/experience on/off', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'textdomain' ),
                'label_off' => esc_html__( 'Hide', 'textdomain' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'crete_about_style' => 'about_story_two',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_about_story_section_tab',
            [
                'label' => esc_html__('Crete About Story Left Content', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'crete_about_style' => 'about_story_one',
                ],
            ]
        );


        $this->add_control(
            'crete_about_story_left_title',
            [
                'label' => esc_html__('Crete About Story TItle', 'crete-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('About My Story', 'crete-core'),
            ]
        );
        $this->add_control(
            'crete_about_story_left_sub_title',
            [
                'label' => esc_html__('Crete About Story Sub TItle', 'crete-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('My name is Adam Smith. I have been studying UI/UX Design since October 2020. I like creating a cool design project.', 'crete-core'),
            ]
        );
        $this->add_control(
            'crete_about_story_left_decription',
            [
                'label' => esc_html__('Crete About Story Decription', 'crete-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Donec imperdiet risus or consequat maximus et eget magna ras ornare sagittis augue, id sollicitudin justo tristique ut. Nullam ex enim euismod bibendum ultrices, fringilla vel eros. Donec euismod leo lectus euismod metus euismod sed. Quisque quis suscipit ipsum

', 'crete-core'),
            ]
        );
        $this->add_control(
            'crete_about_story_left_btn_text',
            [
                'label' => esc_html__('Crete About Story Button Text', 'crete-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('View Latest Work', 'crete-core'),
            ]
        );
        $this->add_control(
            'crete_about_story_left_btn_link',
            [
                'label' => esc_html__('Crete About Story Link', 'crete-core'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'crete-core'),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_about_story_section_right_experience_tab',
            [
                'label' => esc_html__('Crete About Story Experience Section', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'name_experience_title',
            [
                'label' => esc_html__('Experience Title Name', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Experience', 'textdomain'),
                'label_block' => true,
            ]
        );
        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
            'experience_title',
            [
                'label' => esc_html__('Experience Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Senior Product Manager', 'textdomain'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'experience_company',
            [
                'label' => esc_html__('Company Name', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Amar Bazar Ltd. Full-time', 'textdomain'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'experience_date',
            [
                'label' => esc_html__('Experience Date', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('2016-2022 ', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'experience_list',
            [
                'label' => esc_html__('Experience List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => esc_html__('Experience One', 'textdomain'),


                    ],
                    [
                        'list_title' => esc_html__('Experience Two', 'textdomain'),


                    ],
                    [
                        'list_title' => esc_html__('Experience Three', 'textdomain'),


                    ],

                ],
                'title_field1' => '{{{ list_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_about_story_section_right_education_tab',
            [
                'label' => esc_html__('Crete About Story Education Section', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'name_education_title',
            [
                'label' => esc_html__('Education Title Name', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Education', 'textdomain'),
                'label_block' => true,
            ]
        );
        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
            'education_title',
            [
                'label' => esc_html__('Education Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Secondary School Certificate', 'textdomain'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'education_company',
            [
                'label' => esc_html__('Education Name', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Amar Bazar High School', 'textdomain'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'Education_date',
            [
                'label' => esc_html__('Education Date', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('2016-2022 ', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'education_list',
            [
                'label' => esc_html__('Education List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => esc_html__('Education One', 'textdomain'),


                    ],
                    [
                        'list_title' => esc_html__('Education Two', 'textdomain'),


                    ],
                    [
                        'list_title' => esc_html__('Education Three', 'textdomain'),


                    ],

                ],
                'title_field2' => '{{{ list_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_about_story_section_bottom_brand',
            [
                'label' => esc_html__('Crete About Story Brand Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();


        $repeater->add_control(
            'brand_title',
            [
                'label' => esc_html__('Brand Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Figma', 'textdomain'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'brand_image',
            [
                'label' => esc_html__( 'Choose Brand Logo', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],

            ]
        );
        $repeater->add_control(
            'brand_performance',
            [
                'label' => esc_html__(' Performance Count', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('100', 'textdomain'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'brand_list',
            [
                'label' => esc_html__('Education List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => esc_html__('Brand One', 'textdomain'),


                    ],
                    [
                        'list_title' => esc_html__('Brand Two', 'textdomain'),


                    ],
                    [
                        'list_title' => esc_html__('Brand Three', 'textdomain'),


                    ],
                    [
                        'list_title' => esc_html__('Brand Four', 'textdomain'),


                    ],
                    [
                        'list_title' => esc_html__('Brand Five', 'textdomain'),


                    ],
                    [
                        'list_title' => esc_html__('Brand Six', 'textdomain'),


                    ],

                ],
                'title_field3' => '{{{ list_title }}}',
            ]
        );
        $this->end_controls_section();
        // Style Tabs
        $this->start_controls_section(
            'crete_about_story_left_content_style',
            [
                'label' => esc_html__('Crete About Story Left Content Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'crete_about_style' => 'about_story_one',
                ],
            ]
        );

        $this->add_control(
            'crete_about_story_left_content_title',
            [
                'label' => esc_html__( 'Text Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-about-left h2' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_about_story_left_content_title_typo',
                'label' => esc_html__('Text Color Typography', 'crete-core'),
                'selector' => '{{WRAPPER}} .hm3-about-left h2',
            ]
        );
        $this->add_control(
            'crete_about_story_left_content_sub_title',
            [
                'label' => esc_html__( 'Text Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-about-left .fw-meidum' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_about_story_left_content_sub_title_typo',
                'label' => esc_html__('Sub Text  Typography', 'crete-core'),
                'selector' => '{{WRAPPER}} .hm3-about-left .desc ',
            ]
        );
        $this->add_control(
            'crete_about_story_left_content_dec_title',
            [
                'label' => esc_html__( 'Decription Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-about-left .desc ' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_about_story_left_content_dec_title_typo',
                'label' => esc_html__('Decription  Typography', 'crete-core'),
                'selector' => '{{WRAPPER}} .hm3-about-left .fw-meidum',
            ]
        );
        $this->add_control(
            'crete_about_story_left_content_btn_title',
            [
                'label' => esc_html__( 'Button Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-about-left .template-btn ' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_about_story_left_content_btn_title_typo',
                'label' => esc_html__('Button  Typography', 'crete-core'),
                'selector' => '{{WRAPPER}} .hm3-about-left .template-btn',
            ]
        );
        $this->add_control(
            'crete_about_story_left_content_btn_bg',
            [
                'label' => esc_html__( 'Button Background Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-about-left .template-btn ' => 'background-color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_control(
            'crete_about_story_left_content_btn_hover_bg',
            [
                'label' => esc_html__( 'Button Background Hover Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-about-left .primary-btn:hover::before ' => 'background-color: {{VALUE}}!important',
                ],
            ]
        );
        $this->end_controls_section();
        // Style Tabs
        $this->start_controls_section(
            'crete_education_experience_style',
            [
                'label' => esc_html__('Education & Experience Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'crete_about_story_education_experience_title',
            [
                'label' => esc_html__( 'Education Experience Main Title Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .exp-filter .nav-tabs li a' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_about_story_education_experience_title_typo',
                'label' => esc_html__('Education Experience Main Typography  ', 'crete-core'),
                'selector' => '{{WRAPPER}} .exp-filter .nav-tabs li a',
            ]
        );
        $this->add_control(
            'crete_about_story_education_experience_title_bg',
            [
                'label' => esc_html__( 'Education Experience Main Background', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .exp-filter .nav-tabs li a' => 'background-color: {{VALUE}}!important',
                ],
            ]
        );

        $this->add_control(
            'crete_about_story_education_experience_title_bg_active',
            [
                'label' => esc_html__( 'Education Experience Main Background Active', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .exp-filter .nav-tabs li a.active' => 'background-color: {{VALUE}}!important',
                ],
            ]
        );

        $this->start_controls_tabs(
            'style_tabs_education_experience'
        );

        $this->start_controls_tab(
            'style_tabs_experience',
            [
                'label' => esc_html__( 'Experience & Education Box Style', 'textdomain' ),
            ]
        );
        $this->add_control(
            'crete_about_story_education_experience_box_bg_hover',
            [
                'label' => esc_html__( 'Education Experience Box Hover Background color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-exp-box:hover' => 'background-color: {{VALUE}}!important',
                ],
                'condition' => [
                    'crete_about_style' => 'about_story_one',
                ],
            ]
        );

        $this->add_control(
            'crete_about_story_experience_title_style',
            [
                'label' => esc_html__( 'Experience Title Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-exp-box h6 , {{WRAPPER}} .exp-content-left h6' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_about_story_experience_title_typo_style',
                'label' => esc_html__(' Experience Title Typography ', 'crete-core'),
                'selector' => '{{WRAPPER}} .hm3-exp-box h6 , {{WRAPPER}} .exp-content-left h6',
            ]
        );
        $this->add_control(
            'crete_about_story_experience_type_title_style',
            [
                'label' => esc_html__( 'Experience Type color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-exp-box p , {{WRAPPER}} .fw-medium' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_about_story_experience__type_title_typo_style',
                'label' => esc_html__(' Experience Type  Typography ', 'crete-core'),
                'selector' => '{{WRAPPER}} .hm3-exp-box p , {{WRAPPER}} .fw-medium',
            ]
        );
        $this->add_control(
            'crete_about_story_experience_type_title__date',
            [
                'label' => esc_html__( 'Experience Date Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-exp-box span , {{WRAPPER}} .st2_date_c' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_about_story_experience_date_style',
                'label' => esc_html__(' Experience Date Typography', 'crete-core'),
                'selector' => '{{WRAPPER}} .hm3-exp-box span , {{WRAPPER}} .st2_date_c',
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();


        $this->end_controls_section();
        $this->start_controls_section(
            'crete_about_story_brand_section',
            [
                'label' => esc_html__('Crete About Story Brand Section Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'crete_about_story_brand__title_color',
            [
                'label' => esc_html__( 'Experience Date Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-brand-item p , {{WRAPPER}} .hm4-brand-single p' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_about_story_brand__title_typography',
                'label' => esc_html__(' Experience Date Typography', 'crete-core'),
                'selector' => '{{WRAPPER}} .hm3-brand-item p , {{WRAPPER}} .hm4-brand-single p',
            ]
        );
        $this->add_control(
            'crete_about_story_brand__parfomance_color',
            [
                'label' => esc_html__( 'Experience Parfomance Color', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-brand-item h6, {{WRAPPER}} .hm4-brand-single h6' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_about_story_brand__parfomance_color_typography',
                'label' => esc_html__(' Experience Date Typography', 'crete-core'),
                'selector' => '{{WRAPPER}} .hm3-brand-item h6 , {{WRAPPER}} .hm4-brand-single h6',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $aboutstory = $settings['crete_about_style'];


        if ( $aboutstory == 'about_story_one') {

            crete_about_story_1($settings);

        } elseif ( $aboutstory == 'about_story_two') {
            crete_about_story_2($settings);
        }
        ?>
        <?php


    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \crete_about_story());

