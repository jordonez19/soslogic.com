<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_newsletter extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_newsletter';
    }

    public function get_title()
    {
        return esc_html__('Crete Newsletter', 'crete-core');
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
			'crete_newsletter_section',
			[
				'label' => esc_html__( 'Crete Newsletter', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
          $this->add_control(
			'sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Whats Going On' , 'textdomain' ),
				'label_block' => true,
			]
		);
		
		 $this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Subscribe to our' , 'textdomain' ),
				'label_block' => true,
			]
		);
		
		 $this->add_control(
			'style_title',
			[
				'label' => esc_html__( 'Style Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Newsletter' , 'textdomain' ),
				'label_block' => true,
			]
		);
		
		$this->add_control(
			'shortcode',
			[
				'label' => esc_html__( 'Form Shortcode', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( '' , 'textdomain' ),
				'label_block' => true,
			]
		);

     
  
		$this->end_controls_section();

        // Style Tabs
        $this->start_controls_section(
			'crete_newsletter_style',
			[
				'label' => esc_html__( 'Newsletter Style', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
       $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'section_background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .newsletter-section',
			]
		);
       

        $this->end_controls_section();

}

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        


        ?>
      <!--newsletter area start-->
    <section class="newsletter-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="text-center">
                        <span class="cr-subtitle fw-semibold position-relative primary-text-color"><?php echo $settings['sub_title'];?></span>
                        <h2 class="mt-4"><?php echo $settings['title'];?> <?php if($settings['style_title']){?><span class="primary-text-color primary-bg-light"><?php echo $settings['style_title'];?></span><?php } ?></h2>
                        
                        <?php echo do_shortcode($settings['shortcode']);?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--newsletter area end-->
        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \crete_newsletter());

