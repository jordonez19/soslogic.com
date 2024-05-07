<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_service_feat_box extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_service_feat_box';
    }

    public function get_title()
    {
        return esc_html__('Crete Service Feat Box', 'crete-core');
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
			'crete_service_feat_box_section',
			[
				'label' => esc_html__( 'Crete Button', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

    	$this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				
			]
		);

        $this->add_control(
			'crete_feat_box_title',
			[
				'label' => esc_html__( 'Main Title', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Meet Our Specialist', 'crete-core' ),
			]
		);
		
		$this->add_control(
			'crete_service_feat_desc',
			[
				'label' => esc_html__( 'Main Description', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Meet Our Specialist', 'crete-core' ),
			]
		);
		
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'list_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
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
					'value' => 'fas fa-check',
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


		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Feature List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'We Provide Flexible Product Services', 'textdomain' ),
					
					],
					[
						'list_title' => esc_html__( 'Best Creative Solution with Our Team', 'textdomain' ),
						
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
       $title = $settings['crete_feat_box_title'];
       $desc = $settings['crete_service_feat_desc'];

        ?>
         <div class="srd-feature-box srd-feature-box-crete-msv d-flex align-items-center gap-4 rounded-4 light-bg overflow-hidden flex-wrap flex-md-nowrap">
                            <div class="image-wrapper">
                                <img src="<?php echo $settings['image']['url'];?>" alt="not found" class="img-fluid">
                            </div>
                            <div>
                                <h5 class="mb-3"><?php echo $title;?></h5>
                                <p class="mb-4"><?php echo $desc;?></p>
                                <?php 	if ( $settings['list'] ) { ?>
                                <ul class="srd-feature-list">
                                    <?php foreach (  $settings['list'] as $item ) { ?>
                                    <li><span class="me-2"><?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?></span><?php echo $item['list_title'];?></li>
                                    <?php } ?>
                                   
                                </ul>
                                <?php } ?>
                            </div>
                        </div>
        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \crete_service_feat_box());

