<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_project extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_project';
    }

    public function get_title()
    {
        return esc_html__('Crete project', 'crete-core');
    }

    public function get_icon()
    {
        return 'eicon-inner-section';
    }

    public function get_categories()
    {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'crete_project_main_section',
            [
                'label' => esc_html__('Crete Top project Section', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'crete_project_style',
            [
                'label' => esc_html__( 'Crete Info Section Style', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'project_one',
                'options' => [
                    'project_one' => esc_html__( 'Style One', 'textdomain' ),
                    'project_two'  => esc_html__( 'Style Two', 'textdomain' ),
                    'project_three'  => esc_html__( 'Style Three', 'textdomain' ),
                     'project_four'  => esc_html__( 'Style Four', 'textdomain' ),
                ],

            ]
        );
        $this->add_control(
            'crete_project_top_sub_text',
            [
                'label' => esc_html__('Crete project Top Sub Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('50% discount on early purchase', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),

            ]
        );
        $this->add_control(
            'crete_project_top_title_text',
            [
                'label' => esc_html__('Crete project Top Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our project Area', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),

            ]
        );
        $this->add_control(
            'crete_project_top_title_style_text',
            [
                'label' => esc_html__('Crete project Top Title Style Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Works', 'textdomain'),
                'placeholder' => esc_html__('Area', 'textdomain'),

            ]
        );
        $this->add_control(
            'item_per_page',
            [
                'label' => __('Number of Post to Show', 'nikstore'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'step' => 1,
                'default' => 10,
            ]
        );
        $this->add_control(
            'category',
            array(
                'label' => esc_html__('Select Category', 'nikstore'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => array_flip(crete_elements_categories('category', array(
                    'sort_order' => 'ASC',
                    'taxonomy' => 'project-category',
                    'hide_empty' => false,
                ))),
                'label_block' => true,
            )
        );

        $this->end_controls_section();

        // Style Tabs
        $this->start_controls_section(
            'crete_project__section_style',
            [
                'label' => esc_html__('Project Section Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'crete_project__section_style_bg',
                'label' => esc_html__('project Section iMAGE Overly Color', 'crete-core'),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .pf-box::before , {{WRAPPER}} .hm3-project-section,{{WRAPPER}}  .case-study-area',
            ]
        );
        $this->add_control(
            'crete_project__section_border_radius',
            [
                'label' => esc_html__( 'Crete Project Section Border Radius', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'selectors' => [
                    '{{WRAPPER}} .pf-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'crete_project__section_top_text_style',
            [
                'label' => esc_html__('Crete project Top Text Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_project__section_top_text_style_sub_title_color',
            [
                'label' => esc_html__('Crete project Top SubTitle Color', 'textdomain'),
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
                'name' => 'crete_project__section_top_text_style_sub_title_typo',
                'label' => esc_html__('Crete project Top SubTitle Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .cr-subtitle',
            ]
        );
        $this->add_control(
            'crete_project__section_top_text_style_title_color',
            [
                'label' => esc_html__('Crete project Top Title Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title h2 , {{WRAPPER}}  .hm3-project-section h2' => 'color: {{VALUE}}!important',

                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_project__section_top_text_style_title_typo',
                'label' => esc_html__('Crete project Top Title Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .section-title h2 , {{WRAPPER}}  .hm3-project-section h2',
            ]
        );
        $this->add_control(
            'crete_project__section_top_title_style_color',
            [
                'label' => esc_html__('Crete project Title Style Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title h2 span , {{WRAPPER}}  .hm3-project-section h2 span ' => 'color: {{VALUE}}',

                ],
            ]
        );

        $this->add_control(
            'crete_project__section_top_title_style_color_bg',
            [
                'label' => esc_html__('Crete project Title Style Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title h2 span , {{WRAPPER}}  .hm3-project-section h2 span' => 'background-color: {{VALUE}}',

                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'crete_project__section_main_type',
            [
                'label' => esc_html__('Crete project Box Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_project__section_main_box_type',
            [
                'label' => esc_html__('Crete project Box Background Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm3-project-single' => 'background-color: {{VALUE}}!important',

                ],
                'condition' => [
                    'crete_project_style' => 'project_three',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_project__section_title_name',
            [
                'label' => esc_html__('Crete project Title Name Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_project__section_title_name_color',
            [
                'label' => esc_html__('Crete project Title Name Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pf-content h3 a , {{WRAPPER}} .case-study-single h6 , {{WRAPPER}} .pr-content h6' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_control(
            'crete_project__section_title_hover_name_color',
            [
                'label' => esc_html__('Crete project Title Name Hover Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pf-content h3 a:hover , {{WRAPPER}} .case-study-single h6:hover , {{WRAPPER}} .pr-content h6:hover' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_project__section_title_name_typography',
                'label' => esc_html__('Crete project Title Name Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .pf-content h3 a , {{WRAPPER}} .case-study-single h6 , {{WRAPPER}} .pr-content h6',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'crete_project__section_type',
            [
                'label' => esc_html__('Crete project Type Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_project__section_type_title',
            [
                'label' => esc_html__('Crete project Type Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pf-content p , {{WRAPPER}} .tag-btn , {{WRAPPER}}  .pr-content span' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_project__section_type_title_typography',
                'label' => esc_html__('Crete project Type Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .pf-content p , {{WRAPPER}} .tag-btn , {{WRAPPER}}  .pr-content span',
            ]
        );
        $this->add_control(
            'crete_project__section_type_title_bg_color',
            [
                'label' => esc_html__('Crete project Type Background Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tag-btn' => 'background-color: {{VALUE}}!important',
                ],
                'condition' => [
                    'crete_project_style' => 'project_two',
                ],
            ]
        );
        $this->add_control(
            'crete_project__section_type_title_hover_bg_color',
            [
                'label' => esc_html__('Crete project Type Hover Background Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .case-study-single:hover .tag-btn' => 'background-color: {{VALUE}}!important',
                ],
                'condition' => [
                    'crete_project_style' => 'project_two',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'crete_project__section_button',
            [
                'label' => esc_html__('Crete project Button ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'crete_project_style' => 'project_one',
                ],

            ]
        );
        $this->add_control(
            'crete_project__section_button_color',
            [
                'label' => esc_html__('Crete project Button Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pf-box a.explore-btn svg path' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'crete_project__section_button_border_color',
            [
                'label' => esc_html__('Crete project Button Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pf-box a.explore-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'crete_project__section_button_bg_color',
            [
                'label' => esc_html__('Crete project Button Background', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pf-box a.explore-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'crete_project__section_button_bg_hover_color',
            [
                'label' => esc_html__('Crete project Button Hover Background', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pf-box:hover .explore-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_project__section_top_right_button',
            [
                'label' => esc_html__('Crete project Top Right Button ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'crete_project_style' => 'project_two',
                ],

            ]
        );
        $this->add_control(
            'crete_project__section_top_right_button_color',
            [
                'label' => esc_html__('Crete project Button Right text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .secondary-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_project__section_top_right_button_color_typography',
                'label' => esc_html__('Crete project Button Right text Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .secondary-btn',
            ]
        );
        $this->add_control(
            'crete_project__section_top_right_button_color_bg',
            [
                'label' => esc_html__('Crete project Button Right Background Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .secondary-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'crete_project__section_top_right_button_color_hover_bg',
            [
                'label' => esc_html__('Crete project Button Right Hover Background Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .secondary-btn::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_project__date_ago',
            [
                'label' => esc_html__('Crete project  Date Style ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'crete_project_style' => 'project_two',
                ],

            ]
        );
        $this->add_control(
            'crete_project__date_color',
            [
                'label' => esc_html__('Crete project Button Date Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .date' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_project__date_typography',
                'label' => esc_html__('Crete project Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .date',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_project__section_arrow_button',
            [
                'label' => esc_html__('Crete project Top Arrow ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'crete_project_style' => 'project_one',
                ],

            ]
        );
        $this->add_control(
            'crete_project__section_button_arrow_color',
            [
                'label' => esc_html__('Crete project Top Arrow Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .next-arrow , {{WRAPPER}} .prev-arrow ' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'crete_project__section_button_arrow_bg_color',
            [
                'label' => esc_html__('Crete project Arrow Button Background', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .next-arrow , {{WRAPPER}} .prev-arrow' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'crete_project__section_button_arrow_hover_color',
            [
                'label' => esc_html__('Crete project Top Arrow Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-pf-slider .prev-arrow:hover, {{WRAPPER}} .cr-pf-slider .next-arrow:hover ' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'crete_project__section_button_arrow_hover_bg_color',
            [
                'label' => esc_html__('Crete project Arrow Button Hover Background', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-pf-slider .prev-arrow:hover, {{WRAPPER}} .cr-pf-slider .next-arrow:hover ' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();


    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        if ('project_one' == $settings['crete_project_style']){
            crete_project_one($settings);
        }elseif ('project_two' == $settings['crete_project_style']){
            crete_project_two($settings);
        }elseif ('project_three' == $settings['crete_project_style']){
            crete_project_three($settings);
            
        }elseif ('project_four' == $settings['crete_project_style']){
            crete_project_four($settings);
        }
        ?>



        <?php
    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \crete_project());

