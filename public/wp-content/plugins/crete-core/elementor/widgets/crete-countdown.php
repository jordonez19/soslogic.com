<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Crete_Countdown extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_countdown';
    }

    public function get_title()
    {
        return esc_html__('Crete Countdown', 'crete-core');
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
			'crete_countdown_section',
			[
				'label' => esc_html__( 'Crete Countdown', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

         $this->add_control(
            'crete_counter_style',
            [
                'label' => esc_html__( 'Crete Counter Section Style', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style_one',
                'options' => [
                    'style_one' => esc_html__( 'Style One', 'textdomain' ),
                    'style_two'  => esc_html__( 'Style Two', 'textdomain' ),
                ],

            ]
        );
        
        $this->add_control(
            'crete_phone_number',
            [
                'label' => esc_html__( 'Phone Number', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( '
+(25) 1258 36 3215', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                'condition' => [
                    'crete_counter_style' => 'style_two',
                ],
            ]
        );
        
        $this->add_control(
            'crete_phone_number_title',
            [
                'label' => esc_html__( 'Phone Below Title', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Call Me Directly Anytime', 'textdomain' ),
                'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
                'condition' => [
                    'crete_counter_style' => 'style_two',
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
                    'crete_counter_style' => 'style_one',
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
                    'crete_counter_style' => 'style_one',
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
                    'crete_counter_style' => 'style_one',
                ],
            ]
        );
        
        
        $repeater = new \Elementor\Repeater();
        
        	$repeater->add_control(
			'list_count',
			[
				'label' => esc_html__( 'Count', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '86' , 'textdomain' ),
				'label_block' => true,
			]
		);
		
			$repeater->add_control(
			'list_count_suf',
			[
				'label' => esc_html__( 'Suffix', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+' , 'textdomain' ),
				'label_block' => true,
			]
		);

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
			'icon',
			[
				'label' => esc_html__( 'Icon', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
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
		
			$repeater->add_control(
			'sea_color',
			[
				'label' => esc_html__( 'Sea Colored', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'textdomain' ),
				'label_off' => esc_html__( 'No', 'textdomain' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Counter List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'Review', 'textdomain' ),
						'list_count' => esc_html__( '86', 'textdomain' ),
						'list_count_suf' => esc_html__( '+', 'textdomain' ),
					
					],
					[
					'list_title' => esc_html__( 'Team', 'textdomain' ),
						'list_count' => esc_html__( '29', 'textdomain' ),
						'list_count_suf' => esc_html__( '+', 'textdomain' ),
						
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);

        
		$this->end_controls_section();

        // Style Tabs
        $this->start_controls_section(
			'crete_countdown_style',
			[
				'label' => esc_html__( 'Counter Style', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'section_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .dreamer-section',
			]
		);

        $this->end_controls_section();

}

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $cstyle = $settings['crete_counter_style'];


        ?>
        
        <?php if ($cstyle=='style_one'){
            
            crete_countdown_section_style_1($settings);
        
       } elseif ($cstyle=='style_two'){ 
         crete_countdown_section_style_2($settings);
       } ?>

        
        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \Crete_Countdown());

