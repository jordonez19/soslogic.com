<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_title extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_title';
    }

    public function get_title()
    {
        return esc_html__('Crete Title', 'crete-core');
    }

    public function get_icon()
    {
        return 'eicon-t-letter';
    }

    public function get_categories()
    {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
			'crete_title_section',
			[
				'label' => esc_html__( 'Crete Title', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_control(
			'crete_title_title',
			[
				'label' => esc_html__( 'Main Title', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Awesome Experience', 'crete-core' ),
			]
		);
		
		$this->add_control(
			'crete_sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'My Work Experience', 'crete-core' ),
			]
		);
       $this->add_responsive_control(
            'title_align',
            [
                'label' => esc_html__( 'Title Alignment', 'nikstore-core' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', 'nikstore-core' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'nikstore-core' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__( 'Right', 'nikstore-core' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .section-title' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        
		$this->end_controls_section();

        // Style Tabs
        $this->start_controls_section(
			'crete_title_style',
			[
				'label' => esc_html__( 'Title Style', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
         $this->add_control(
            'main_title_color',
            [
                'label' => esc_html__('Title Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete-main-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'main-Heading-typography',
                'label' => esc_html__('Title Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete-main-title',
            ]
        );
        
        $this->add_control(
            'sub_title_color',
            [
                'label' => esc_html__('Sub Title Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-subtitle' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .cr-subtitle::before' => 'background-color: {{VALUE}}',
                    
                ],
            ]
        );
        
         $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Sub-Heading-typography',
                'label' => esc_html__('Sub Title Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .cr-subtitle',
            ]
        );
        

        $this->end_controls_section();

}

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $crtTitle = $settings['crete_title_title'];
        $crtsubTitle = $settings['crete_sub_title'];


        ?>
                       <div class="section-title">
                                        <span class="cr-subtitle position-relative fw-semibold primary-text-color"><?php echo $crtsubTitle;?></span>
                                        <?php if ($crtTitle){ ?>
                                        <h3 class="crete-main-title mt-4"><?php echo $crtTitle;?></h3>    
                                        <?php } ?>
                                    </div>
        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \crete_title());

