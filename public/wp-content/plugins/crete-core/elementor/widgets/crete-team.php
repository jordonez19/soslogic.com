<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_team extends \Elementor\Widget_Base
{

    public function get_name() {
        return 'crete_team';
    }

    public function get_title() {
        return esc_html__('Crete Team', 'crete-core');
    }

    public function get_icon() {
        return 'eicon-theme-builder';
    }

    public function get_categories() {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls() {


        $this->start_controls_section(
            'Team-Section-Content',
            [
                'label' => esc_html__('Team Section Content', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sub_heading',
            [
                'label' => esc_html__('Sub Heading', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Team Members', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'heading',
            [
                'label' => esc_html__('Heading', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Meet with our', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'special_heading',
            [
                'label' => esc_html__('Special Heading', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('experts', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Team-Member',
            [
                'label' => esc_html__('Team Member', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'team_member_id',
            [
                'label' => esc_html__( 'Select Team Member', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => array_key_first($this->allTeamMember()),
                'options' => $this->allTeamMember(),
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => esc_html__('Team Member List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                    ],
                    [
                    ],
                    [
                    ],
                    [
                    ],
                    [
                    ],
                ],
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
            'Section-BG-Color',
            [
                'label' => esc_html__('Section BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-section' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'shape_img',
            [
                'label' => esc_html__('Section Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_responsive_control(
            'Section-Image-Min-Width',
            [
                'label' => esc_html__('Section Image Min Width', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .crete__section-image' => 'min-width: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .cr-subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Sub-Heading-typography',
                'label' => esc_html__('Sub Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .cr-subtitle',
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
                    '{{WRAPPER}} .crete__section_heading' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Heading-typography',
                'label' => esc_html__('Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__section_heading',
            ]
        );
        $this->add_control(
            'Special-Heading-Color',
            [
                'label' => esc_html__('Special Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__section-special-heading' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Special-Heading-BG-Color',
            [
                'label' => esc_html__('Special Heading BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete__section-special-heading' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Team-Member-style',
            [
                'label' => esc_html__('Team Member Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Name-Style',
            [
                'label' => esc_html__('Name Style', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Name-color',
            [
                'label' => esc_html__('Name Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm2-team-single h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Name-typography',
                'label' => esc_html__('Name Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .hm2-team-single h6',
            ]
        );
        $this->add_control(
            'Name-Hover-color',
            [
                'label' => esc_html__('Name Hover Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm2-team-single h6:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Designation-Style',
            [
                'label' => esc_html__('Designation Style', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Designation-color',
            [
                'label' => esc_html__('Designation Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm2-team-single .fw-medium' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Designation-typography',
                'label' => esc_html__('Designation Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .hm2-team-single .fw-medium',
            ]
        );
        $this->add_control(
            'Image-BG-Style',
            [
                'label' => esc_html__('Image BG Style', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Image-BG-color',
            [
                'label' => esc_html__('Image BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm2-team-single .thumbnail::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();


    }

    public function allTeamMember(): array {
        $args = array(
            'numberposts' => -1,
            'post_type'   => 'team'
        );
        $team_members = get_posts( $args );
        $member = [];
        foreach ($team_members as $team){
            $member[$team->ID] = $team->post_title;
        }
        return $member;
    }


    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!--team section start-->
        <section class="team-section bg-light-white">
            <div class="container pt-100 position-relative z-1 custom_container_width">
                <?php if (!empty($settings['shape_img']['url'])) { ?>
                    <img src="<?php echo $settings['shape_img']['url']; ?>" alt="net vector" class="position-absolute end-0 top-0 z--1 crete__section-image">
                <?php } ?>
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center">
                            <?php if (!empty($settings['sub_heading'])) { ?>
                                <span class="cr-subtitle position-relative primary-text-color fw-semibold d-inline-block wow fadeInUp"><?php echo $settings['sub_heading']; ?></span>
                            <?php } ?>

                            <?php if (!empty($settings['heading'])) { ?>
                                <h2 class="mt-4 mb-0 wow fadeInUp crete__section_heading" data-wow-delay="0.2s"><?php echo $settings['heading']; ?> <span class="primary-bg-light primary-text-color px-2 crete__section-special-heading"><?php echo $settings['special_heading']; ?></span></h2>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="hm2-team-slider mt-60">

                    <?php
                    foreach ($settings['list'] as $item){
                        $designation = get_post_meta($item['team_member_id'], 'designation', true);
                        ?>
                    <div class="hm2-team-single text-center">
                        <div class="thumbnail">
                            <img src="<?php echo get_the_post_thumbnail_url($item['team_member_id'], 'crete-team-slider'); ?>" class="rounded-circle img-fluid" alt="team">
                        </div>
                        <a href="<?php echo get_the_permalink($item['team_member_id']); ?>">
                            <h6 class="mt-40 mb-2">
                                <?php echo get_the_title($item['team_member_id']); ?>
                            </h6>
                        </a>
                        <span class="fw-medium"><?php echo $designation; ?></span>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!--team section end-->
        <?php
    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \crete_team());

