<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */


if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_pricing_block extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_pricing_block';
    }

    public function get_title()
    {
        return esc_html__('Crete Pricing Table', 'crete-core');
    }

    public function get_icon()
    {
        return 'eicon-price-table';
    }

    public function get_categories()
    {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'Doctorlist_block',
            [
                'label' => esc_html__( 'Pricing Table Contents', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
          $this->add_control(
            'crete_top_sub_text',
            [
                'label' => esc_html__('Sub Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Pricing Plan', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),

            ]
        );
        $this->add_control(
            'crete_top_title_text',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Find the Right', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),

            ]
        );
        
        $this->add_control(
            'crete_style_text',
            [
                'label' => esc_html__('Style Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Plan', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
                'condition' => [
			        'table_style' => 'style1',
		        ],

            ]
        );
        
        $this->add_control(
            'crete_desc',
            [
                'label' => esc_html__('Description', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Dont find any package match with your plan! Want to setup a new tailor-made package for only you?. Contact Us', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
                'condition' => [
			        'table_style' => 'style2',
		        ],

            ]
        );
        
        $this->add_control(
            'crete_btn_text',
            [
                'label' => esc_html__('Button Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Contact US', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
                'condition' => [
			        'table_style' => 'style2',
		        ],

            ]
        );
        
           $this->add_control(
            'crete_btn_url',
            [
                'label' => esc_html__('Button URL', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('#', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
                'condition' => [
			        'table_style' => 'style2',
		        ],

            ]
        );
            $this->add_control(
            'pricing-table',
            [
                'label' => esc_html__( 'Select Pricing Table', 'karte-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options'     => array_flip(crete_elements_categories( 'product', array(
                    'post_type' => 'pricingtable',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC',
                ) )),
                'label_block' => true,
                'separator' => 'after',
            ]
        );
        $this->add_control(
            'table_style',
            [
                'label' => esc_html__( 'Pricing Table Style', 'textdomain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style1',
                'options' => [
                    'style1'  => esc_html__( 'Style One', 'textdomain' ),
                    'style2' => esc_html__( 'Style Two', 'textdomain' ),
                  

                ],

            ]
        );
        



        $this->end_controls_section();
        
           $this->start_controls_section(
            'section-top-content-style',
            [
                'label' => esc_html__('Section Content Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'Sub-Heading-color',
            [
                'label' => esc_html__('Sub Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cr-subtitle, {{WRAPPER}} .hm4-subtitle' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .cr-subtitle:before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Sub-Heading-typography',
                'label' => esc_html__('Sub Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .cr-subtitle, {{WRAPPER}} .hm4-subtitle',
            ]
        );
        
        $this->add_control(
            'Heading-color',
            [
                'label' => esc_html__('Heading Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .crete-section-heading-msv' => 'color: {{VALUE}}',
                    
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Heading-typography',
                'label' => esc_html__('Heading Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .crete-section-heading-msv',
            ]
        );
        $this->end_controls_section();
        
        
          $this->start_controls_section(
            'pricing-table-content-style',
            [
                'label' => esc_html__('Pricing Table Title Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'prc-Heading-color',
            [
                'label' => esc_html__('Table Title Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .prc-title-main' => 'color: {{VALUE}}',
                   
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'prc-Heading-typography',
                'label' => esc_html__('Table Title Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .prc-title-main',
            ]
        );
        
        $this->add_control(
            'prc-desc-color',
            [
                'label' => esc_html__('Table Description Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .msv-ptable-desc' => 'color: {{VALUE}}',
                   
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'prc-desc-typography',
                'label' => esc_html__('Table Description Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .msv-ptable-desc',
            ]
        );
        
        
        $this->end_controls_section();
        
        
          $this->start_controls_section(
            'pricing-table-price-style',
            [
                'label' => esc_html__('Pricing Table Price Style', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'prc-price-color',
            [
                'label' => esc_html__('Table Price Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-title,
                    {{WRAPPER}} .price-amount h3' => 'color: {{VALUE}}',
                   
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'prc-price-typography',
                'label' => esc_html__('Table Price Typography', 'textdomain'),
                'selector' => '{{WRAPPER}} .pricing-title, {{WRAPPER}} .price-amount h3',
            ]
        );
        
        
        
          $this->end_controls_section();
          
          
           $this->start_controls_section(
            'style-2-bg-style',
            [
                'label' => esc_html__('Style Two Background', 'woodly-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                 'condition' => [
			        'table_style' => 'style2',
		        ],
            ]
        );
        
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'style_2_bg',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .hm4-pricing-section',
			]
		);
        
        $this->end_controls_section();
        

      

    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        $pricingtable = get_post( $settings['pricing-table']);
        $cretesub = $settings['crete_top_sub_text'];
        $cretetitle = $settings['crete_top_title_text'];
        $cretestyle = $settings['crete_style_text'];
        $tablestyle =  $settings['table_style'];
        $crtdesc =  $settings['crete_desc'];
        $crtbtntxt=  $settings['crete_btn_text'];
        $crtbtnurl =  $settings['crete_btn_url'];

      
        ?>

        <!--// Pricing Tab Toggle Section Start //-->
       <!--pricing section start-->
       <?php if($tablestyle=='style2'){ ?>
       
         <section class="hm4-pricing-section pt-100 pb-40 overflow-hidden">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-5">
                        <div class="section-title mb-5 mb-xl-0">
                            <?php if ($cretesub) { ?>
                            <span class="cr-subtitle position-relative text-white fw-semibold"><?php echo $cretesub;?></span>
                            <?php } ?>
                            <?php if ($cretetitle) { ?>
                            <h3 class="crete-section-heading-msv text-white my-4"><?php echo $cretetitle; ?></h3>
                            <?php } ?>
                            <?php if ($crtdesc) { ?>
                            <p class="mb-4 text-white"><?php echo $crtdesc;?></p>
                            <?php } ?>
                            <?php if ($crtbtnurl){ ?>
                            <a href="<?php echo $crtbtnurl;?>" class="template-btn white-btn"><?php echo $crtbtntxt;?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-xl-7">
                           <?php if($pricingtable){ 
                   $leftFrepater = get_post_meta( $settings['pricing-table'], 'med_pricing_table', true );
                 if( ! empty( $leftFrepater ) ) {
                        foreach( $leftFrepater as $repeater_1 ) {
                                        $activeclass = '';
                                        if($repeater_1['featured']== 1){
                                            $activeclass = 'pricing-table-featured';
                                        }
                 ?>
                        <div class="hm4-pricing-box position-relative d-flex align-items-center justify-content-between gap-4 mb-60">
                            
                            <span class="saving-badge"><?php echo $repeater_1['discount_text'];?></span>
                            <div class="pricing-features">
                                <h6 class="prc-title-main"><?php echo $repeater_1['title'];?></h6>
                                <ul>
                                    <?php  foreach( $repeater_1['pricing-item'] as $repeater_2 ) { ?>
                                    <li><?php if($repeater_2['cs_image']['url']){?>
                                                                            <img src="<?php echo $repeater_2['cs_image']['url'];?>" alt="price-cs-icon">
                                                                        <?php } else { ?>
                                                                            <i class="<?php echo $repeater_2['icon']; ?> me-2"></i>
                                                                        <?php } ?> <?php echo $repeater_2['pt-title']; ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="price-amount text-center">
                                <h3 class="mb-4"><?php echo $repeater_1['currency'];?><?php echo $repeater_1['price'];?></h3>
                                <a href="<?php echo $repeater_1['btn_url'];?>" class="template-btn primary-btn rounded-pill"><?php echo $repeater_1['btn_text'];?></a>
                            </div>
                        </div>
                    <?php } } } ?>
                    </div>
                </div>
            </div>
        </section>
       <?php } else { ?>
    <section class="pricing-section ptb-100 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center">
                        <?php if ($cretesub){ ?>
                        <span class="cr-subtitle position-relative fw-semibold primary-text-color d-inline-block wow fadeInUp"><?php echo $cretesub;?></span>
                        <?php } ?>
                        <?php if ($cretetitle){ ?>
                        <h2 class="crete-section-heading-msv mt-4 mb-0 wow fadeInUp" data-wow-delay="0.2s"><?php echo $cretetitle;?> <?php if ($cretestyle) { ?><span class="primary-text-color px-2 primary-bg-light"><?php echo $cretestyle;?></span><?php } ?></h2>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-5 justify-content-center">
                 <?php if($pricingtable){ 
                   $leftFrepater = get_post_meta( $settings['pricing-table'], 'med_pricing_table', true );
                 if( ! empty( $leftFrepater ) ) {
                        foreach( $leftFrepater as $repeater_1 ) {
                                        $activeclass = '';
                                        if($repeater_1['featured']== 1){
                                            $activeclass = 'pricing-table-featured';
                                        }
                 ?>
                <div class="col-xl-4 col-md-6 <?php echo $activeclass;?>">
                    <div class="pricing-box text-center wow fadeInUp" data-wow-delay="0.3s">
                        <h3 class="fw-medium prc-title-main"><?php echo $repeater_1['title'];?></h3>
                        <span class="fw-medium d-block mb-32 subtitle msv-ptable-desc"><?php echo $repeater_1['description'];?></span>
                        <span class="package-icon rounded-circle bg-white">
                               <?php if ($repeater_1['imgmed']['url']){
                                                                $path= $repeater_1['imgmed']['url'];
                                                                $e = pathinfo($path, PATHINFO_EXTENSION);
                                                                ?>

                                                                <?php if($e == "svg") { ?>
                                                                    <?php echo file_get_contents( $path ); ?>
                                                                <?php } else { ?>
                                                                    <img src="<?php echo $repeater_1['imgmed']['url']; ?>" class="price-img-saasplate" alt="price image">
                                                                <?php } ?>

                                                            <?php } else { ?>
                                                                <i class="<?php echo $repeater_1['icon']; ?>"></i>
                                                            <?php } ?>
                        </span>
                        <div class="pricing-box-content">
                            <h6 class="h2 pricing-title"><?php echo $repeater_1['currency'];?><?php echo $repeater_1['price'];?> <span class="fs-md fw-medium">/<?php echo $repeater_1['duration'];?></span></h6>
                            <div class="spacer mt-4 mb-32"></div>
                             <?php if( ! empty( $repeater_1['pricing-item'] ) ) {
                                                            ?>
                            <ul class="pricing-features text-start">
                                <?php  foreach( $repeater_1['pricing-item'] as $repeater_2 ) { ?>
                                <li><span class="me-2"> <?php if($repeater_2['cs_image']['url']){?>
                                                                            <img src="<?php echo $repeater_2['cs_image']['url'];?>" alt="price-cs-icon">
                                                                        <?php } else { ?>
                                                                            <i class="<?php echo $repeater_2['icon']; ?>"></i>
                                                                        <?php } ?> </span><?php echo $repeater_2['pt-title']; ?></li>
                                <?php } ?>
                                
                            </ul>
                            <?php } ?>
                            <a href="<?php echo $repeater_1['btn_url'];?>" class="template-btn secondary-btn mt-40 w-100"><?php echo $repeater_1['btn_text'];?></a>
                        </div>
                    </div>
                </div>
                <?php } } } ?>
            
            </div>
        </div>
    </section>
    <?php } ?>
    <!--pricing section end-->

        <!--// Pricing Tab Toggle Section End //-->


    <?php		}

}
\Elementor\Plugin::instance()->widgets_manager->register(new \crete_pricing_block());