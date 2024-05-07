<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_experience extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_experience';
    }

    public function get_title()
    {
        return esc_html__('Crete Experience', 'crete-core');
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
			'crete_experience_section',
			[
				'label' => esc_html__( 'Crete Experience', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


      $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'list_title',
			[
				'label' => esc_html__( 'Job Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'UI/UX Designer' , 'textdomain' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'list_sub_title',
			[
				'label' => esc_html__( 'Company Name', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Facebook Limited' , 'textdomain' ),
				'label_block' => true,
			]
		);
		
		$repeater->add_control(
			'list_duration',
			[
				'label' => esc_html__( 'Duration', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Jan 2022 - Jan 2023' , 'textdomain' ),
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
						'list_title' => esc_html__( 'UI/UX Designer', 'textdomain' ),
						'list_sub_title' => esc_html__( 'Facebook Limited', 'textdomain' ),
						'list_duration' => esc_html__( 'Jan 2023 - Present', 'textdomain' )
					],
					[
						'list_title' => esc_html__( 'Product Designer', 'textdomain' ),
						'list_sub_title' => esc_html__( 'Oyo Bank Limited', 'textdomain' ),
						'list_duration' => esc_html__( 'Jan 2023 - Present', 'textdomain' )
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);
        
		$this->end_controls_section();

        // Style Tabs
        $this->start_controls_section(
			'crete_experience_style',
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
                <div class="hm5-exp-wrapper mt-60">
                                <div class="row g-4">
                                    <?php if ($experiencelist){
                                    foreach ($experiencelist as $list){
                                    $title = $list['list_title'];
                                    $subtitle = $list['list_sub_title'];
                                    $duration = $list['list_duration'];
                                   
                                    ?>
                                    <div class="col-xl-6">
                                        <div class="hm5-exp-single d-flex align-items-center justify-content-between flex-wrap gap-4">
                                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                                <span class="icon bg-facebook flex-shrink-0 d-inline-flex align-items-center justify-content-center rounded-circle">
                                                   <?php \Elementor\Icons_Manager::render_icon( $list['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                </span>
                                                <div>
                                                    <h6 class="fs-20 mb-0 text-white"><?php echo $title;?></h6>
                                                    <span class="text-white"><?php echo $subtitle;?></span>
                                                </div>
                                            </div>
                                            <span class="date text-white"><?php echo $duration;?></span>
                                        </div>
                                    </div>
                                    <?php } } ?>
                                    
                                  
                                </div>
                            </div>        
        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \crete_experience());

