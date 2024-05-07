<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_parallax_box extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_parallax_box';
    }

    public function get_title()
    {
        return esc_html__('Crete Feature Infobox', 'crete-core');
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
			'crete_parallax_box_section',
			[
				'label' => esc_html__( 'Crete Parallax Infobox', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

       

        $this->add_control(
			'crete_ib_sub_title',
			[
				'label' => esc_html__( 'Sub title', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Company Features', 'crete-core' ),
			]
		);
		
		   $this->add_control(
			'crete_ib_main_title',
			[
				'label' => esc_html__( 'Main title', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'We Provide Best Solution For Your', 'crete-core' ),
			]
		);
		
			   $this->add_control(
			'crete_ib_style_title',
			[
				'label' => esc_html__( 'Style title', 'crete-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Company', 'crete-core' ),
			]
		);
		
				$repeater = new \Elementor\Repeater();
			
			$repeater->add_control(
			'info_icon',
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
			'info_list_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'List Title' , 'textdomain' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'info_list_content',
			[
				'label' => esc_html__( 'Content', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'List Content' , 'textdomain' ),
				'show_label' => false,
			]
		);

	

		$this->add_control(
			'info-list',
			[
				'label' => esc_html__( 'Info Box List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'info_list_title' => esc_html__( 'Quality Services', 'textdomain' ),
						'info_list_content' => esc_html__( 'Purpose quality vectors with highly efficient incubate', 'textdomain' ),
					],
					[
						'info_list_title' => esc_html__( 'Fast Delivery', 'textdomain' ),
						'info_list_content' => esc_html__( 'Purpose quality vectors with highly efficient incubate', 'textdomain' ),
					],
				],
				'title_field' => '{{{ info_list_title }}}',
			]
		);
		
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'percent_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Product Design' , 'textdomain' ),
				'label_block' => true,
			]
		);
		
			$repeater->add_control(
			'percent_amount',
			[
				'label' => esc_html__( 'Percent Amount', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '70' , 'textdomain' ),
				'label_block' => true,
			]
		);



		$this->add_control(
			'percent-list',
			[
				'label' => esc_html__( 'Percentage Bar', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'percent_title' => esc_html__( 'Product Design', 'textdomain' ),
						'percent_amount' => esc_html__( '70', 'textdomain' ),
						
					],
					[
						'percent_title' => esc_html__( 'Industry Expertise', 'textdomain' ),
						'percent_amount' => esc_html__( '93', 'textdomain' ),
						
					],
				],
				'title_field' => '{{{ percent_title }}}',
			]
		);


      
        
		$this->end_controls_section();

        // Style Tabs
         // Style Tabs
        $this->start_controls_section(
			'crete_marquee_style',
			[
				'label' => esc_html__( 'Box Style', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
	$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'box_bg_main',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .sr-feature-section',
			]
		);
		
	
		
		
		$this->end_controls_section();
      

}

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $subtitle = $settings['crete_ib_sub_title'];
        $maintitle = $settings['crete_ib_main_title'];
        $styletitle = $settings['crete_ib_style_title'];


        ?>
       <!--feature section start-->
    <section class="ptb-100 sr-feature-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="sr-feature-box bg-white rounded-4 theme-shadow">
                        <?php if($subtitle){ ?>
                        <span class="cr-subtitle position-relative fw-semibold primary-text-color"><?php echo $subtitle;?></span>
                        <?php } ?>
                        <?php if ($maintitle){ ?>
                        <h3 class="mb-5 mt-4"><?php echo $maintitle;?> <?php if($styletitle){ ?><span class="primary-text-color primary-bg-light px-1"><?php echo $styletitle;?></span><?php } ?></h3>
                        <?php } ?>
                        <?php if ( $settings['info-list'] ) { ?>
                        <div class="row g-5">
                            <?php foreach (  $settings['info-list'] as $item ) {
                                
                                ?>
                            <div class="col-sm-6">
                                <div class="sr-image-box">
                                    <span class="icon">
                                      <?php \Elementor\Icons_Manager::render_icon( $item['info_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </span>
                                    <h5 class="mt-4 mb-20 fs-20"><?php echo $item['info_list_title'];?></h5>
                                    <p class="mb-0"><?php echo $item['info_list_content'];?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <?php if($settings['percent-list']){?>
                        <div class="sr-service-progress mt-5">
                             <?php foreach (  $settings['percent-list'] as $pitem ) {
                                $ptitle = $pitem['percent_title'];
                                $pamount = $pitem['percent_amount'];
                                ?>
                            <div class="cr-progress-single">
                                <div class="d-flex align-items-center justify-content-between gap-3 mb-40">
                                    <h6 class="mb-0 fs-18"><?php echo $ptitle; ?></h6>
                                    <h6 class="mb-0 fs-18"><?php echo $pamount; ?>%</h6>
                                </div>
                                <div class="cr-progress-bar">
                                    <div class="cr-progress" data-percent="<?php echo $pamount; ?>" data-color="#5044EB"></div>
                                </div>
                            </div>
                            <?php } ?>
                          
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section end-->
        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \crete_parallax_box());

