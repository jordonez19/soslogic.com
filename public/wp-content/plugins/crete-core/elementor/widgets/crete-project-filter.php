<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */

use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_project_filter extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_project_filter';
    }

    public function get_title()
    {
        return esc_html__('Crete project Filter', 'crete-core');
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
            'crete_project_filter_main_section',
            [
                'label' => esc_html__('Crete Top project Section', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'crete_project_filter_top_sub_text',
            [
                'label' => esc_html__('Crete project Top Sub Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Latest Case Studies', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),

            ]
        );
        $this->add_control(
            'crete_project_filter_top_title_text',
            [
                'label' => esc_html__('My Recent Projects', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Our project Area', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),

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
        $this->add_control(
            'bottom_button_text',
            [
                'label' => esc_html__('Button Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('View All Showcase', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', '
                textdomain'),
            ]
        );
        $this->add_control(
            'bottom_button_link',
            [
                'label' => esc_html__('Button Link', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__('https://www.youtube.com/watch?v=6WZOxnYi4Cs', 'textdomain'),
                'options' => ['url', 'is_external', 'nofollow'],

                'label_block' => true,
            ]
        );
        $this->end_controls_section();

        // Style Tabs
        $this->start_controls_section(
            'crete_project_filter__section_style',
            [
                'label' => esc_html__('project Section Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'crete_project_filter__section_style_bg',
                'label' => esc_html__('project Section iMAGE Overly Color', 'crete-core'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .hm4-projects-section',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'crete_project_filter__section_top_text_style',
            [
                'label' => esc_html__('Crete project Top Text Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_project_filter__section_top_text_style_sub_title_color',
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
                'name' => 'crete_project_filter__section_top_text_style_sub_title_typo',
                'label' => esc_html__('Crete project Top SubTitle Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .cr-subtitle',
            ]
        );
        $this->add_control(
            'crete_project_filter__section_top_text_style_title_color',
            [
                'label' => esc_html__('Crete project Top Title Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title h3' => 'color: {{VALUE}}!important',

                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_project_filter__section_top_text_style_title_typo',
                'label' => esc_html__('Crete project Top Title Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .section-title h3',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'crete_project_filter__section_main_type',
            [
                'label' => esc_html__('Crete project Box Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_project_filter__section_main_box_type',
            [
                'label' => esc_html__('Crete project Box Background Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm4-project-single' => 'background-color: {{VALUE}}!important',

                ],

            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_project_filter__section_title_name',
            [
                'label' => esc_html__('Crete project Title Name Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_project_filter__section_title_name_color',
            [
                'label' => esc_html__('Crete project Title Name Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm4-project-single h6' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_control(
            'crete_project_filter__section_title_hover_name_color',
            [
                'label' => esc_html__('Crete project Title Name Hover Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} ..hm4-project-single h6:hover' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_project_filter__section_title_name_typography',
                'label' => esc_html__('Crete project Title Name Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .hm4-project-single h6',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'crete_project_filter__section_type',
            [
                'label' => esc_html__('Crete project Type Style', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );
        $this->add_control(
            'crete_project_filter__section_type_title',
            [
                'label' => esc_html__('Crete project Type Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mt-32 span' => 'color: {{VALUE}}!important',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'crete_project_filter__section_type_title_typography',
                'label' => esc_html__('Crete project Type Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .mt-32 span',
            ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
            'crete_project_filter__section_button',
            [
                'label' => esc_html__('Crete project Button ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'crete_project_filter_style' => 'project_one',
                ],

            ]
        );

        $this->add_control(
            'crete_project_filter__section_button_border_color',
            [
                'label' => esc_html__('Crete project Button Border Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .template-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'crete_project_filter__section_button_bg_color',
            [
                'label' => esc_html__('Crete project Button Background', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .template-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'crete_project_filter__section_button_bg_hover_color',
            [
                'label' => esc_html__('Crete project Button Hover Background', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .primary-btn::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'crete_project_filter__section_top_right_button',
            [
                'label' => esc_html__('Crete project Top Right Button ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'crete_project_filter_style' => 'project_two',
                ],

            ]
        );
        $this->add_control(
            'crete_project_filter__section_top_right_button_color',
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
                'name' => 'crete_project_filter__section_top_right_button_color_typography',
                'label' => esc_html__('Crete project Button Right text Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .secondary-btn',
            ]
        );
        $this->add_control(
            'crete_project_filter__section_top_right_button_color_bg',
            [
                'label' => esc_html__('Crete project Button Right Background Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .secondary-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'crete_project_filter__section_top_right_button_color_hover_bg',
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
            'crete_project_filter__section_arrow_button',
            [
                'label' => esc_html__('Crete project Icon Style ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,


            ]
        );
        $this->add_control(
            'crete_project_filter__section_button_arrow_color',
            [
                'label' => esc_html__('Crete project  icon Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm4-project-single:hover .feature-image .explore-btn' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'crete_project_filter__section_button_arrow_bg_color',
            [
                'label' => esc_html__('Crete project Icon Background', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hm4-project-single:hover .feature-image .explore-btn' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'crete_project_filter__date_ago',
            [
                'label' => esc_html__('Crete project  Date Style ', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'crete_project_filter_style' => 'project_two',
                ],

            ]
        );
        $this->add_control(
            'crete_project_filter__date_color',
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
                'name' => 'crete_project_filter__date_typography',
                'label' => esc_html__('Crete project Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .date',
            ]
        );
        $this->end_controls_section();



    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        $category = $settings['category'];
        $item_per_page = $settings['item_per_page'];
        $args = array(
            'post_type' => 'Project',
            'post_status' => 'publish',
            'posts_per_page' => $item_per_page,
            // Several more arguments could go here. Last one without a comma.
        );
        $project_query = new WP_Query($args);

        if (!empty($category[0])) {
            $product_args['tax_query'] = array(
                array(
                    'taxonomy' => 'project-category',
                    'field' => 'ids',
                    'terms' => $category
                )
            );
        }
        $terms = get_terms(array(
            'taxonomy' => 'project-category',
            'hide_empty' => false,
            'include' => $category,
        ));
        ?>

        <!--projects section start-->
        <section class="hm4-projects-section hm3-light-bg pb-100 overflow-hidden" id="projects">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <span class="cr-subtitle position-relative fw-semibold primary-text-color"><?php echo $settings['crete_project_filter_top_sub_text']; ?></span>
                            <h3 class="mt-4"><?php echo $settings['crete_project_filter_top_title_text']; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="hm4-filter-widget mt-40">
                    <div class="hm4-filter-btn-group flex-wrap">
                        <button type="button" data-filter="*" class="active">All</button>
                        <?php foreach ($terms as $term) { ?>
                            <button type="button"
                                    data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
                        <?php } ?>

                    </div>
                    <div class="row g-4 mt-60 hm4-grid">
                        <?php if ($project_query->have_posts()) {
                            while ($project_query->have_posts()) {
                                $project_query->the_post();

                                $image = wp_get_attachment_image_src(get_post_thumbnail_id($project_query->ID), 'crete-project-filter');
                                $project_cat = get_the_terms(get_the_ID(), 'project-category');
                                $project_cat_name = join(', ', wp_list_pluck($project_cat, 'name'));
                                $project_filter_class = get_the_terms(get_the_id(), 'project-category');
                                ?>
                                <div class="col-xl-4 col-lg-6 <?php foreach ($project_filter_class as $pro) {
                                    echo ' ' . $pro->slug;
                                } ?>">
                                    <div class="hm4-project-single">
                                        <div class="feature-image position-relative">
                                            <img src="<?php echo $image[0]; ?>" alt="not found"
                                                 class="img-fluid">
                                            <a href="<?php echo get_permalink(); ?>" class="explore-btn"><i
                                                        class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                        <div class="mt-32">
                                            <span><?php echo $project_cat_name; ?></span>
                                            <a href="<?php echo get_permalink(); ?>"><h6 class="mb-0"><?php the_title(); ?></h6></a>
                                        </div>
                                    </div>
                                </div>


                                <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="mt-5 text-center">
                        <a href="<?php echo $settings['bottom_button_link']['url']; ?>" class="template-btn primary-btn"><?php echo $settings['bottom_button_text']; ?></a>
                    </div>
                </div>
                </div>
        </section>
        <!--projects section end-->

        <?php

    }

}

\Elementor\Plugin::instance()->widgets_manager->register(new \crete_project_filter());

