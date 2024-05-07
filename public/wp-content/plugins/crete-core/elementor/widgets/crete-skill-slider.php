<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_skill_slider extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_skill_slider';
    }

    public function get_title()
    {
        return esc_html__('Crete Skill Slider', 'crete-core');
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
			'crete_skill_slider_section',
			[
				'label' => esc_html__( 'Crete Skill Slider', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


      $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'list_title',
			[
				'label' => esc_html__( 'Skill Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Figma' , 'textdomain' ),
				'label_block' => true,
			]
		);


		
		$repeater->add_control(
			'list_duration',
			[
				'label' => esc_html__( 'Percent', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '90%' , 'textdomain' ),
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
			
			]
		);

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Repeater List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'Photoshop', 'textdomain' ),
						'list_duration' => esc_html__( '90%', 'textdomain' )
					],
					[
						'list_title' => esc_html__( 'Figma', 'textdomain' ),
						'list_duration' => esc_html__( '96%', 'textdomain' )
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);
        
		$this->end_controls_section();

        // Style Tabs
        $this->start_controls_section(
			'crete_skill_slider_style',
			[
				'label' => esc_html__( 'Experience Style', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        

        $this->end_controls_section();

}

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $experiencelist = $settings['list'];
        


        ?>
        
         <div class="hm5-brand-slider">
             <?php if ($experiencelist){
                 foreach ($experiencelist as $list){
                                    $title = $list['list_title'];
                            
                                    $duration = $list['list_duration'];
                                   
                                    ?>
                                <div class="hm3-brand-item">
                                    <p class="mb-0"><?php echo $title;?></p>
                                    <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle bg-white">
                                        <?php \Elementor\Icons_Manager::render_icon( $list['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </span>
                                    <h6 class="text-white fs-30 mb-0"><?php echo $duration;?></h6>
                                </div>
                                <?php } } ?>
                                
                                
                              
                             
                            </div>
                      
        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \crete_skill_slider());

