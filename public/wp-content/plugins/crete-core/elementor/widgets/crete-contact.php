<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Crete_Contact extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_contact';
    }

    public function get_title()
    {
        return esc_html__('Crete Contact', 'crete-core');
    }

    public function get_icon()
    {
        return 'eicon-form-horizontal';
    }

    public function get_categories()
    {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
			'crete_contact_section',
			[
				'label' => esc_html__( 'Contact Content', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
            'create_cf_style',
            [
                'label' => esc_html__( 'Contact Style', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style-one',
                'options' => [
                    'style-one' => esc_html__( 'Style One', 'textdomain' ),
                    'style-two' => esc_html__( 'Style Two', 'textdomain' ),
                    'style-three' => esc_html__( 'Style Three', 'textdomain' ),
                ],

            ]
        );


        $this->add_control(
			'crete_contact_sub',
			[
				'label' => esc_html__( 'Subtitle', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '100% discount on early purchase', 'crete-core' ),
			]
		);
		
		  $this->add_control(
			'crete_contact_title',
			[
				'label' => esc_html__( 'Title', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Lets Work Together', 'crete-core' ),
			]
		);
		
		$this->add_control(
			'crete_contact_desc',
			[
				'label' => esc_html__( 'Description', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Interdum condimentum congue conubia netus neque lentesque curabitur etiam nisl montes, gravida luctus nec morbi dignissim ridiculus nam hendrerit ullamcorper, euismod', 'crete-core' ),
			]
		);
        

        
        
		$this->end_controls_section();
		
		$this->start_controls_section(
			'crete_list_section',
			[
				'label' => esc_html__( 'Contact Info Content', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'crete_label_email',
			[
				'label' => esc_html__( 'Email Label', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Mail Us', 'crete-core' ),
			]
		);
		
		$this->add_control(
			'crete_info_email',
			[
				'label' => esc_html__( 'Email', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'info@example.com', 'crete-core' ),
			]
		);
		
		$this->add_control(
			'crete_label_phone',
			[
				'label' => esc_html__( 'Phone Label', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Call Us', 'crete-core' ),
			]
		);
		
		$this->add_control(
			'crete_info_phone',
			[
				'label' => esc_html__( 'Phone', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '456 1122 7890', 'crete-core' ),
			]
		);
		
			$this->add_control(
			'crete_label_address',
			[
				'label' => esc_html__( 'Address Label', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Address', 'crete-core' ),
			]
		);
		
		$this->add_control(
			'crete_info_address',
			[
				'label' => esc_html__( 'Address', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '214 Berlin, Germany', 'crete-core' ),
			]
		);
		
		$this->end_controls_section();
		$this->start_controls_section(
			'crete_form_section',
			[
				'label' => esc_html__( 'Form Content', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'crete_form_title',
			[
				'label' => esc_html__( 'Title', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get a free', 'crete-core' ),
			]
		);
		
			$this->add_control(
			'crete_form_title_after',
			[
				'label' => esc_html__( 'Style Title', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'quote now', 'crete-core' ),
			]
		);
		
		$this->add_control(
			'crete_contact_form',
			[
				'label' => esc_html__( 'Contact Form Shortcode', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                
			]
		);

		$this->add_control(
			'crete_contact_map',
			[
				'label' => esc_html__( 'Map Code', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,

			]
		);
		
			$this->end_controls_section();




        // Style Tabs
        $this->start_controls_section(
			'crete_content_style',
			[
				'label' => esc_html__( 'Content Style', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
            'subtitle_c_color',
            [
                'label' => esc_html__( 'Subtitle Color', 'crete-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
        
                'selectors' => [
                    '{{WRAPPER}} .cr-subtitle.text-white' => 'color: {{VALUE}} !important;',

					'{{WRAPPER}} .cr-subtitle::before' => 'background-color: {{VALUE}} !important;',
                ],
            ]
        );
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_c_typography',
				'label' => esc_html__( 'Subtitle Typography', 'crete-core' ),
				'selector' => '{{WRAPPER}} .cr-subtitle.text-white',
			]
		);
        
         $this->add_control(
            'title_c_color',
            [
                'label' => esc_html__( 'Title Color', 'crete-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
        
                'selectors' => [
                    '{{WRAPPER}} .contact-info h2.text-white,
                    {{WRAPPER}} .ct-left h2' => 'color: {{VALUE}} !important;',


                ],
            ]
        );
        
         $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_c_typography',
				'label' => esc_html__( 'Title Typography', 'crete-core' ),
				'selector' => '{{WRAPPER}} .contact-info h2.text-white,
				{{WRAPPER}} .ct-left h2',
			]
		);
		
		 $this->add_control(
            'desc_c_color',
            [
                'label' => esc_html__( 'Description Color', 'crete-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
        
                'selectors' => [
                    '{{WRAPPER}} .contact-info p.lead' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
         $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'desc_c_typography',
				'label' => esc_html__( 'Description Typography', 'crete-core' ),
				'selector' => '{{WRAPPER}} .contact-info p.lead',
			]
		);

		$this->add_control(
			'Contact-Info-Style',
			[
				'label' => esc_html__('Contact Info Style', 'textdomain'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'Contact-Title-color',
			[
				'label' => esc_html__('Contact Title Color', 'textdomain'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .contact-section.dark-bg-color .contact-info-list li span' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'Contact-Title-typography',
				'label' => esc_html__('Contact Title Typography', 'textdomain'),
				'selector' => '{{WRAPPER}} .contact-section.dark-bg-color .contact-info-list li span',
			]
		);
		$this->add_control(
			'Contact-Details-color',
			[
				'label' => esc_html__('Contact Details Color', 'textdomain'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .contact-info-list li h6' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'Contact-Details-typography',
				'label' => esc_html__('Contact Details Typography', 'textdomain'),
				'selector' => '{{WRAPPER}} .contact-info-list li h6',
			]
		);
        $this->end_controls_section();
        
        $this->start_controls_section(
			'crete_form_style',
			[
				'label' => esc_html__( 'Contact Form Style', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
            'cf_title_color',
            [
                'label' => esc_html__( 'Title Color', 'crete-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
        
                'selectors' => [
                    '{{WRAPPER}} .cf-side-title-crete' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        
         $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'cf_title_typography',
				'label' => esc_html__( 'Title Typography', 'crete-core' ),
				'selector' => '{{WRAPPER}} .cf-side-title-crete',
			]
		);
		
		 $this->end_controls_section();
		 
		 
		 $this->start_controls_section(
			'crete_section_style',
			[
				'label' => esc_html__( 'Section Style', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => esc_html__( 'Background', 'crete-core' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .contact-section.dark-bg-color',
            ]
        );
		$this->add_control(
			'Section-Shapes-Style',
			[
				'label' => esc_html__('Section Shapes Style', 'textdomain'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'Shape-1-color',
			[
				'label' => esc_html__('Shape 1 Color', 'textdomain'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .circle-shape' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'Shape-2-color',
			[
				'label' => esc_html__('Shape 2 Color', 'textdomain'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .circle-shape-2' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'Shape-3-color',
			[
				'label' => esc_html__('Shape 3 Color', 'textdomain'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .circle-shape-3' => 'border-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_section();

}

    protected function render()
    {
        $settings = $this->get_settings_for_display();
		$create_cf_style = $settings['create_cf_style'];

        ?>
            <?php if ($create_cf_style=='style-one'){
                crete_contact_style_one($settings);
             } elseif ($create_cf_style=='style-two'){
                 crete_contact_style_two($settings);
            } elseif ($create_cf_style=='style-three'){
                 crete_contact_style_three($settings);
            } 
            
            ?>

        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \Crete_Contact());

