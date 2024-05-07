<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Crete_Button extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_button';
    }

    public function get_title()
    {
        return esc_html__('Crete Button', 'crete-core');
    }

    public function get_icon()
    {
        return 'eicon-button';
    }

    public function get_categories()
    {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
			'crete_button_section',
			[
				'label' => esc_html__( 'Crete Button', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
            'crete_button_type',
            [
                'label' => esc_html__('Button Type', 'crete-core'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'crete_default',
                'options' => [
                    'crete_default'  => esc_html__('Default', 'crete-core'),
                    'video'  => esc_html__('Video Popup', 'crete-core'),
                ],
            ]
        );
       

        $this->add_control(
			'crete_button_title',
			[
				'label' => esc_html__( 'Button Text', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Meet Our Specialist', 'crete-core' ),
			]
		);
        $this->add_control(
			'btn_link',
			[
				'label' => esc_html__( 'Link', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'crete-core' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

        $this->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
        $this->add_control(
            'btn_icon_position',
            [
                'label' => esc_html__('Icon Position', 'crete-core'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'before',
                'options' => [
                    'before'  => esc_html__('Before', 'crete-core'),
                    'after'  => esc_html__('After', 'crete-core'),
                ],
            ]
        );
        $this->add_responsive_control(
			'crete_btn_align',
			[
				'label' => esc_html__( 'Button Alignment', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'flex-start' => [
						'title' => esc_html__( 'Left', 'crete-core' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'crete-core' ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => esc_html__( 'Right', 'crete-core' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .crete-button-container' => 'justify-content: {{VALUE}};',
				],
			]
		);
        $this->add_control(
			'icon_spacing_before',
			[
				'label' => esc_html__( 'Icon Spacing', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 0,
				],
				'selectors' => [
					'{{WRAPPER}} .banner-btn span:first-child' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'btn_icon_position' => 'before'
                ],
			]
		);
        $this->add_control(
			'icon_spacing_after',
			[
				'label' => esc_html__( 'Icon Spacing', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 0,
				],
				'selectors' => [
					'{{WRAPPER}} .banner-btn span:first-child' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
                'condition' => [
                    'btn_icon_position' => 'after'
                ],
			]
		);
        
		$this->end_controls_section();

        // Style Tabs
        $this->start_controls_section(
			'crete_button_style',
			[
				'label' => esc_html__( 'Button Style', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'btn_typo',
				'selector' => '{{WRAPPER}} .banner-btn',
			]
		);

        $this->start_controls_tabs(
            'style_tabs'
        );
        // Button Normal Style
        $this->start_controls_tab(
            'style_normal_tab',
            [
                'label' => esc_html__( 'Normal', 'crete-core' ),
            ]
        );
        $this->add_control(
			'btn_tex_color',
			[
				'label' => esc_html__( 'Text Color', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				
				'selectors' => [
					'{{WRAPPER}} .banner-btn' => 'fill: {{VALUE}}; color: {{VALUE}};',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'Background', 'crete-core' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .banner-btn',
			]
		);
        $this->add_control(
			'padding',
			[
				'label' => esc_html__( 'Padding', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .banner-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'crete-core' ),
				'selector' => '{{WRAPPER}} .banner-btn',
			]
		);
        $this->add_control(
			'border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .banner-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->end_controls_tab();

        // Button Hover Style
        $this->start_controls_tab(
            'style_hover_tab',
            [
                'label' => esc_html__( 'Hover', 'crete-core' ),
            ]
        );
        $this->add_control(
			'btn_hover_tex_color',
			[
				'label' => esc_html__( 'Text Color', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner-btn:hover, {{WRAPPER}} .banner-btn:focus' => 'color: {{VALUE}};',
					'{{WRAPPER}} .banner-btn:hover svg, {{WRAPPER}} .banner-btn:focus svg' => 'fill: {{VALUE}};',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'hover_background',
				'label' => esc_html__( 'Background', 'crete-core' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .banner-btn:hover',
			]
		);
        $this->add_control(
			'hover_padding',
			[
				'label' => esc_html__( 'Padding', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .banner-btn:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'hover_border',
				'label' => esc_html__( 'Border', 'crete-core' ),
				'selector' => '{{WRAPPER}} .banner-btn:hover',
			]
		);
        $this->add_control(
			'hover_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .banner-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->end_controls_tab();
        
        $this->end_controls_tabs();

         $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'btn_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'crete-core' ),
				'selector' => '{{WRAPPER}} .banner-btn',
                
			]
		);


        $this->end_controls_section();

}

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $ss_button_type = $settings['crete_button_type'];


        ?>
        <?php if($ss_button_type=="video"){?>
        <div class="crete-button-container" style="display: flex;">
            <a href="<?php echo esc_url($settings['btn_link']['url']); ?>" data-lity>
                <div class="banner-btn" style="flex-direction: <?php  if("after" == $settings['btn_icon_position']){ echo esc_attr( 'row-reverse' ); }; ?>">
                    <span><?php Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
                    <span><?php echo $settings['crete_button_title']; ?></span>
                </div>
            </a>
        </div>
        
        <?php } else { ?>
        <div class="crete-button-container" style="display: flex;">
            <a href="<?php echo esc_url($settings['btn_link']['url']); ?>">
                <div class="banner-btn" style="flex-direction: <?php  if("after" == $settings['btn_icon_position']){ echo esc_attr( 'row-reverse' ); }; ?>">
                    <span><?php Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
                    <span><?php echo $settings['crete_button_title']; ?></span>
                </div>
            </a>
        </div>
        <?php } ?>
        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \Crete_Button());

