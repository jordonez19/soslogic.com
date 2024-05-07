<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_op_about extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_op_about';
    }

    public function get_title()
    {
        return esc_html__('Crete Onepage Section', 'crete-core');
    }

    public function get_icon()
    {
        return 'eicon-button';
    }

    public function get_categories()
    {
        return ['crete-one-page-element'];
    }

    protected function register_controls()
    {


     $this->start_controls_section(
			'crete_op_main_section',
			[
				'label' => esc_html__( 'Section Info', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'section_id',
			[
				'label' => esc_html__( 'Section ID', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' =>true,
				'default' => esc_html__( 'home', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your section id here', 'textdomain' ),
			]
		);
		
		  $this->add_control(
            'block-sec',
            [
                'label' => esc_html__( 'Select Block', 'karte-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'description' => 'Add or edit block from Crete > Crete Blocks',
                'options'     => array_flip(crete_elements_categories( 'product', array(
                    'post_type' => 'crete_block',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC',
                ) )),
                'label_block' => true,
                'separator' => 'after',
            ]
        );
		
	   $this->end_controls_section();
		
        

       

      

}

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $section_id = $settings['section_id'];
        $block = get_post( $settings['block-sec']);
        if ($block){ 
        $slug = $block->post_name;
        }
       

        ?>
        <?php if( \Elementor\Plugin::instance()->editor->is_edit_mode() ){ ?>
        <section class="main-content-wrapper hm5-box about_box active" id="<?php echo $section_id;?>">
            <?php } else {  ?>
            <section class="main-content-wrapper hm5-box about_box" id="<?php echo $section_id;?>">
            <?php } ?>
            <div class="hm5-about-section overlfow-hidden">
                <div class="container-1660">
                    <div class="hm5-about-box">
                       <?php  if ($block){ echo do_shortcode('[crete_block id="'.$slug.'"]'); }?>
                    </div>
                </div>
            </div>
        </section>

        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \crete_op_about());

