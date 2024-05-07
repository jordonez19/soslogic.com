<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_accordion extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_accordion';
    }

    public function get_title()
    {
        return esc_html__('Crete Accordion', 'crete-core');
    }

    public function get_icon()
    {
        return 'eicon-accordion';
    }

    public function get_categories()
    {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
			'crete_accordion_section',
			[
				'label' => esc_html__( 'Crete Accordion', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
			'list_content',
			[
				'label' => esc_html__( 'Content', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'List Content' , 'textdomain' ),
				'show_label' => false,
			]
		);
		
		$repeater->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);
		
		$repeater->add_control(
			'expanded',
			[
				'label' => esc_html__( 'Expanded', 'textdomain' ),
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
				'label' => esc_html__( 'Repeater List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'What is Digital Marketing Solution', 'textdomain' ),
						'list_content' => esc_html__( 'Aenean at lobortis tincidunt felis nulla nisl semper nullam justo, eros natoque faucibus senectus erat nunc nostra himenaeos sem turpis, mi libero sociosqu nec ridiculus penatibus donec aliquet vulputate. Venenatis vulputate ultrices eleifend dapibus phasellus tempus vehicula facilisi', 'textdomain' ),
					],
					[
						'list_title' => esc_html__( 'Design and Development', 'textdomain' ),
						'list_content' => esc_html__( 'Aenean at lobortis tincidunt felis nulla nisl semper nullam justo, eros natoque faucibus senectus erat nunc nostra himenaeos sem turpis, mi libero sociosqu nec ridiculus penatibus donec aliquet vulputate. Venenatis vulputate ultrices eleifend dapibus phasellus tempus vehicula facilisi', 'textdomain' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);
       

  
		$this->end_controls_section();

        // Style Tabs
        $this->start_controls_section(
			'crete_accordion_style',
			[
				'label' => esc_html__( 'Accordion Style', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
       $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__( 'Title Typgraphy', 'crete-core' ),
				'selector' => '{{WRAPPER}} .accordion-header a',
			]
		);
       

        $this->end_controls_section();

}

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        


        ?>
     <div class="faq-left">
                        <div class="accordion" id="accordion">
                            <?php	if ( $settings['list'] ) {
                                $i = 0; /* Seems redundant */
                                 
                            	foreach (  $settings['list'] as $item ) {
                            	    $i++;
                            	    $title = $item['list_title'];
                            	    $desc = $item['list_content'];
                            	    $image = $item['image']['url'];
                            	    $expanded= $item['expanded'];
                            	    $show = "";
                            	    if ($expanded=="yes"){
                            	        $show = "show";
                            	    }
                            ?>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#accordion_<?php echo $i; ?>" data-bs-toggle="collapse"><?php echo $title;?></a>
                                </div>
                                <div class="accordion-collapse collapse <?php echo $show;?>" id="accordion_<?php echo $i; ?>" data-bs-parent="#accordion">
                                    <div class="accordion-body p-0">
                                        <div class="d-flex align-items-center gap-4 flex-wrap flex-md-nowrap">
                                            <?php if($image){ ?>
                                            <div class="feature-image">
                                                <img src="<?php echo $image;?>" alt="not found" class="img-fluid rounded-4">
                                            </div>
                                            <?php } ?>
                                            <p class="mb-0"><?php echo $desc;?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } }?>
                            
                            
                           
                           
                        </div>
                    </div>
        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \crete_accordion());

