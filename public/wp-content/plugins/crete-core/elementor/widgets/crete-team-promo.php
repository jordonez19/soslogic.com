<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_team_promo extends \Elementor\Widget_Base
{

    public function get_name() {
        return 'crete_team_promo';
    }

    public function get_title() {
        return esc_html__('Crete Team Promo', 'crete-core');
    }

    public function get_icon() {
        return 'eicon-theme-builder';
    }

    public function get_categories() {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls() {


        $this->start_controls_section(
            'Promo-Left-Content',
            [
                'label' => esc_html__('Promo Left Content', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'girl_img',
            [
                'label' => esc_html__('Girl Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'circle_shape',
            [
                'label' => esc_html__('Circle Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Team-Promo-Section-Content',
            [
                'label' => esc_html__('Team Promo Section Content', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'sub_heading',
            [
                'label' => esc_html__('Sub Heading', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Team Mates', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'heading',
            [
                'label' => esc_html__('Heading', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our Team Provide Great', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'special_heading',
            [
                'label' => esc_html__('Special Heading', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Service', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Vulputate tincidunt feugiat pharetra primis tortor auctor posuer iaculis nisl phasellus quam pellentesque quis aliquet, volutpat id risus placerat in ad cras. Dapibus arcu habitant', 'textdomain'),
                'placeholder' => esc_html__('Type your description here', 'textdomain'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Icon-Box',
            [
                'label' => esc_html__('Icon Box', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__( 'Icon', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-book-open',
                    'library' => 'fa-solid',
                ],
            ]
        );
        $repeater->add_control(
            'icon_box_title',
            [
                'label' => esc_html__('Box Title', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Research & Development', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $repeater->add_control(
            'icon_box_info',
            [
                'label' => esc_html__('Box Info', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Aculis nisl phasellus quam pellentesque quis aliquet, volutpat id risus placerat in ad cras.', 'textdomain'),
                'placeholder' => esc_html__('Type your Info here', 'textdomain'),
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
                        'icon_box_title' => esc_html__('Research & Development', 'textdomain'),
                    ],
                    [
                        'icon_box_title' => esc_html__('Professional Team Mates', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ icon_box_title }}}',

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
                    '{{WRAPPER}} .crete__section_description' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Description-typography',
                'label' => esc_html__('Description Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete__section_description',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'Icon-Box-style',
            [
                'label' => esc_html__('Icon Box Style', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'Icon-Style',
            [
                'label' => esc_html__('Icon Style', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Icon-color',
            [
                'label' => esc_html__('Icon Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-icon-box .icon-wrapper' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Icon-BG-color',
            [
                'label' => esc_html__('Icon BG Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-icon-box .icon-wrapper' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'Icon-Box-Title-Style',
            [
                'label' => esc_html__('Icon Box Title Style', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Icon-Box-Title-color',
            [
                'label' => esc_html__('Icon Box Title Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-icon-box h6' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Icon-Box-Title-typography',
                'label' => esc_html__('Icon Box Title Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .cr-icon-box h6',
            ]
        );
        $this->add_control(
            'Icon-Box-Info-Style',
            [
                'label' => esc_html__('Icon Box Info Style', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'Icon-Box-Info-color',
            [
                'label' => esc_html__('Icon Box Info Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-icon-box h6.cr-icon-box p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Icon-Box-Info-typography',
                'label' => esc_html__('Icon Box Info Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .cr-icon-box p',
            ]
        );
        $this->end_controls_section();


    }

    public function allTeamMember(): array {
        $args = array(
            'numberposts' => -1,
            'post_type' => 'team'
        );
        $team_members = get_posts($args);
        $member = [];
        foreach ($team_members as $team) {
            $member[$team->ID] = $team->post_title;
        }
        return $member;
    }


    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="cr-service-section">
            <div class="container-1660 custom_container_width">
                <div class="cr-service-box bg-white rounded-top position-relative z-1">
                    <div class="row">
                        <div class="col-xl-6 align-self-end order-2 order-xl-1">
                            <div class="position-relative z-1">
                                <?php if (!empty($settings['girl_img']['url'])) { ?>
                                    <img src="<?php echo $settings['girl_img']['url']; ?>" alt="girl" class="img-fluid">
                                <?php } ?>

                                <?php if (!empty($settings['circle_shape']['url'])) { ?>
                                    <img src="<?php echo $settings['circle_shape']['url']; ?>" alt="shape-image" class="position-absolute start-50 bottom-0 translate-middle-x z--1 img-fluid">
                                <?php } ?>

                            </div>
                        </div>
                        <div class="col-xl-6 order-1 order-xl-2">
                            <div class="cr-content-right ps-xl-4">
                                <?php if (!empty($settings['sub_heading'])) { ?>
                                    <span class="cr-subtitle position-relative fw-semibold primary-text-color wow fadeInUp"><?php echo $settings['sub_heading']; ?></span>
                                <?php } ?>
                                <?php if (!empty($settings['heading'])) { ?>
                                    <h2 class="mt-4 mb-32 wow fadeInUp crete__section_heading" data-wow-delay="0.1s"><?php echo $settings['heading']; ?> <span class="primary-bg-light primary-text-color crete__section-special-heading"><?php echo $settings['special_heading']; ?></span></h2>
                                <?php } ?>

                                <?php if (!empty($settings['description'])) { ?>
                                    <p class="mb-5 wow fadeInUp crete__section_description" data-wow-delay="0.3s"><?php echo $settings['description']; ?></p>
                                <?php } ?>
                                <?php
                                $i = 0;
                                foreach ($settings['list'] as $item) {
                                    $i++;
                                    ?>
                                    <div class="cr-icon-box d-flex gap-3 flex-wrap flex-sm-nowrap wow fadeInUp <?php if (1 != $i)echo 'mt-32'; ?>" data-wow-delay="0.<?php echo $i; ?>s">
                                    <span class="icon-wrapper d-inline-flex align-items-center justify-content-center primary-text-color rounded-circle flex-shrink-0">
                                        <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']); ?>
                                    </span>
                                        <div>
                                            <?php if (!empty($item['icon_box_title'])) { ?>
                                                <h6 class="mb-3"><?php echo $item['icon_box_title']; ?></h6>
                                            <?php } ?>
                                            <?php if (!empty($item['icon_box_info'])) { ?>
                                                <p class="mb-0"><?php echo $item['icon_box_info']; ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \crete_team_promo());

