<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Crete_Brands extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_brands';
    }

    public function get_title()
    {
        return esc_html__('Crete Brand Slider', 'crete-core');
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
			'crete_brands_section',
			[
				'label' => esc_html__( 'Crete Brand Slider', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

         $this->add_control(
            'crete_brands_style',
            [
                'label' => esc_html__( 'Crete Brands Section Style', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_one',
                'options' => [
                    'style_one' => esc_html__( 'Style One', 'textdomain' ),
                    'style_two'  => esc_html__( 'Style Two', 'textdomain' ),
                ],

            ]
        );
        
    
       
       $this->add_control(
            'crete_sub_title',
            [
                'label' => esc_html__( 'Sub Title Text', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( '50% discount on early purchase', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                'condition' => [
                    'crete_brands_style' => 'style_one',
                ],
            ]
        );
        
        
        $this->add_control(
            'crete_main_title',
            [
                'label' => esc_html__( 'Title Text', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'An original team of creators designers &', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                'condition' => [
                    'crete_brands_style' => 'style_one',
                ],
            ]
        );
        
        $this->add_control(
            'crete_style_title',
            [
                'label' => esc_html__( 'Style Title Text', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'dreamers.', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                'condition' => [
                    'crete_brands_style' => 'style_one',
                ],
            ]
        );
        
        
        $repeater = new \Elementor\Repeater();
        
    
		$repeater->add_control(
			'list_title',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'List Title' , 'textdomain' ),
				'label_block' => true,
			]
		);
		
			$repeater->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Client Logo', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);
		

		

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Brands List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'Client One', 'textdomain' ),
						
					
					],
					[
					'list_title' => esc_html__( 'Client Two', 'textdomain' ),
						
						
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);

        
		$this->end_controls_section();

      

}

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $cstyle = $settings['crete_brands_style'];


        ?>
        
        <?php if ($cstyle=='style_one'){
            
            crete_brands_section_style_1($settings);
        
       } elseif ($cstyle=='style_two'){
           crete_brands_section_style_2($settings);
       } ?>

        
        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \Crete_Brands());

