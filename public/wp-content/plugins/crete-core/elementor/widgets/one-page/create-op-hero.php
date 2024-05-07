<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class crete_op_hero extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_op_hero';
    }

    public function get_title()
    {
        return esc_html__('Crete Onepage Hero', 'crete-core');
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
				'label' => esc_html__( 'Hero Info', 'crete-core' ),
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
		
	   $this->end_controls_section();
		
        $this->start_controls_section(
			'crete_op_left_section',
			[
				'label' => esc_html__( 'Left Box Info', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'left_author_img',
			[
				'label' => esc_html__( 'Author Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			
			]
		);
		
		$this->add_control(
			'author_email',
			[
				'label' => esc_html__( 'Email', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' =>true,
				'default' => esc_html__( 'hello@crete.design', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your email here', 'textdomain' ),
			]
		);
		
		$this->add_control(
			'author_address',
			[
				'label' => esc_html__( 'Address', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' =>true,
				'default' => esc_html__( 'Based in Frankfurt, DE', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your address here', 'textdomain' ),
			]
		);
		
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'list_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'facebook' , 'textdomain' ),
				'label_block' => true,
			]
		);
		
			$repeater->add_control(
			'list_url',
			[
				'label' => esc_html__( 'Url', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#' , 'textdomain' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook',
					'library' => 'fa-brand',
				],
			
			]
		);

	

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Social Links', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'Facebook', 'textdomain' ),
						
					],
					[
						'list_title' => esc_html__( 'Twitter', 'textdomain' ),
						
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);



          $this->add_control(
			'copyright_text',
			[
				'label' => esc_html__( 'Copyright', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' =>true,
				'default' => esc_html__( '© 2023 Crete. All Rights Reserved', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your copyright text here', 'textdomain' ),
			]
		);

       

        
		$this->end_controls_section();
		
		
		$this->start_controls_section(
			'crete_op_right_section',
			[
				'label' => esc_html__( 'Right Box Info', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		 $this->add_control(
			'subtitle_text',
			[
				'label' => esc_html__( 'Subtitle', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' =>true,
				'default' => esc_html__( 'Hello! I am Mason William', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your subtitle text here', 'textdomain' ),
			]
		);
		
		$this->add_control(
			'main_title',
			[
				'label' => esc_html__( 'Main Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' =>true,
				'default' => esc_html__( 'Sr.' ),
				'placeholder' => esc_html__( 'Type your title text here', 'textdomain' ),
			]
		);
		
		$this->add_control(
			'typer_title',
			[
				'label' => esc_html__( 'Typing Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' =>true,
				'default' => esc_html__( 'UI/UX Designer,Web Developer,SEO Specialist' ),
				'placeholder' => esc_html__( 'Type your title with comma here', 'textdomain' ),
			]
		);
		
		$this->add_control(
			'main_description',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' =>true,
				'default' => esc_html__( 'I am a freelancer based in the United Kingdom and i have been building noteworthy UX/UI designs and websites for years, which comply with the latest design trends. I help convert a vision and an idea into meaningful and useful products.' ),
				'placeholder' => esc_html__( 'Type your description here', 'textdomain' ),
			]
		);

		
		
		$this->end_controls_section();
		
		
		$this->start_controls_section(
			'crete_op_right_btn_section',
			[
				'label' => esc_html__( 'Right Button Info', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'button_one_title',
			[
				'label' => esc_html__( 'Button One Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' =>true,
				'default' => esc_html__( 'Download My CV' ),
				'placeholder' => esc_html__( 'Type your title text here', 'textdomain' ),
			]
		);
		
		$this->add_control(
			'button_one_url',
			[
				'label' => esc_html__( 'Button One URL', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' =>true,
				'default' => esc_html__( '#' ),
				'placeholder' => esc_html__( 'Type your url here', 'textdomain' ),
			]
		);
		
		
			$this->add_control(
			'button_two_title',
			[
				'label' => esc_html__( 'Button Two Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' =>true,
				'default' => esc_html__( 'Hire Me Now' ),
				'placeholder' => esc_html__( 'Type your title text here', 'textdomain' ),
			]
		);
		
		$this->add_control(
			'button_two_url',
			[
				'label' => esc_html__( 'Button Two URL', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' =>true,
				'default' => esc_html__( '#' ),
				'placeholder' => esc_html__( 'Type your url here', 'textdomain' ),
			]
		);
		
		$this->end_controls_section();
		
		
			$this->start_controls_section(
			'crete_op_right_counter_section',
			[
				'label' => esc_html__( 'Right Counter Info', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'counter_title',
			[
				'label' => esc_html__( 'Count', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '7,695' , 'textdomain' ),
				'label_block' => true,
			]
		);
		
			$repeater->add_control(
			'counter_suffix',
			[
				'label' => esc_html__( 'suffix', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'counter_content',
			[
				'label' => esc_html__( 'Content', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'PROJECT COMPLETED WORLDWIDE' , 'textdomain' ),
				'show_label' => false,
			]
		);
		
		$repeater->add_control(
			'counter_icon',
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
			'counter_list',
			[
				'label' => esc_html__( 'Counter List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'counter_title' => esc_html__( '7,695', 'textdomain' ),
						'counter_content' => esc_html__( 'PROJECT COMPLETED WORLDWIDE', 'textdomain' ),
					],
					[
						'counter_title' => esc_html__( '1,259', 'textdomain' ),
						'counter_content' => esc_html__( 'REACHED MILLION ($) VALUATION', 'textdomain' ),
					],
				],
				'title_field' => '{{{ counter_title }}}',
			]
		);

		$this->end_controls_section();

        // Style Tabs
        $this->start_controls_section(
			'crete_op_hero_style',
			[
				'label' => esc_html__( 'Hero Style', 'crete-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        

        $this->end_controls_section();

}

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $authorimage= $settings['left_author_img']['url'];
        $email = $settings['author_email'];
        $address= $settings['author_address'];
        $lists = $settings['list'];
        $copyright = $settings['copyright_text'];
        $section_id = $settings['section_id'];
        $subtitle = $settings['subtitle_text'];
        $maintitle = $settings['main_title'];
        $typertitle = $settings['typer_title'];
        $desc = $settings['main_description'];
        $btnonetext = $settings['button_one_title'];
        $btnoneurl = $settings['button_one_url'];
        $btntwotext = $settings['button_two_title'];
        $btntwourl = $settings['button_two_url'];
        $counter = $settings['counter_list'];

        ?>
        <section class="main-content-wrapper hm5-box active banner_box" id="<?php echo $section_id;?>">
            <div class="hm5-banner-section">
                <div class="container-1660">
                    <div class="row g-5 align-items-center">
                        <div class="col-xxl-4 col-xl-6">
                            <div class="hm5-author-card">
                                <?php if($authorimage){ ?>
                                <div class="thumbnail text-center">
                                    <img src="<?php echo $authorimage;?>" alt="author" class="img-fluid">
                                </div>
                                <?php } ?>
                                <div class="text-center mt-32">
                                    <a href="mailto:<?php echo $email;?>"><h6 class="text-white mb-0 fw-semibold"><?php echo $email;?></h6></a>
                                    <?php if ($address){ ?>
                                    <h6 class="text-white mb-0 fw-semibold"><?php echo $address;?></h6>
                                    <?php } ?>
                                </div>
                                <?php if($lists){?>
                                <div class="mt-40 hm5-author-socials d-flex align-items-center gap-3 justify-content-center">
                                    <?php foreach($lists as $list){ 
                                        $url = $list['list_url'];
                                    ?>
                                    <a href="<?php echo esc_url($url);?>" target="_blank"><?php \Elementor\Icons_Manager::render_icon( $list['icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                    <?php } ?>
                                   
                                </div>
                                <?php } ?>
                                <?php if($copyright){ ?>
                                <p class="mb-0 text-center mt-50"><?php echo $copyright;?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-xxl-8 col-xl-6">
                            <div class="hm5-author-right mt-32 mt-xl-0">
                                <?php if($subtitle){ ?>
                                <span class="hm5-subtitle primary-text-color fw-semibold wow fadeInUp d-block" data-wow-delay="0.1s"><?php echo $subtitle;?></span>
                                <?php } ?>
                                <?php if ($maintitle){?>
                                <h1 class="mb-40 mt-32 text-white"><?php echo $maintitle;?> <?php if($typertitle){ ?><span class="typer text-white" id="main" data-words="<?php echo $typertitle;?>" data-delay="100" data-deleteDelay="1000"></span><?php } ?></h1>
                                <?php } ?>
                                <?php if($desc){ ?>
                                <p class="mb-50 fw-medium"><?php echo $desc;?></p>
                                <?php } ?>
                                <div class="d-flex align-items-center hm5-authors-btn flex-wrap">
                                    <?php if($btnoneurl){ ?>
                                    <a href="<?php echo $btnoneurl;?>" class="template-btn primary-btn"><?php echo $btnonetext;?></a>
                                    <?php } ?>
                                     <?php if($btntwourl){ ?>
                                    <a href="<?php echo $btntwourl;?>" class="template-btn secondary-btn"><?php echo $btntwotext;?></a>
                                    <?php } ?>
                                </div>
                                <?php if($counter){ ?>
                                <div class="hm5-counter-box">
                                    <div class="row g-5 mt-5">
                                        <?php foreach ($counter as $count){ 
                                        $ctitle = $count['counter_title'];
                                        $cdesc = $count['counter_content'];
                                        $suffix = $count['counter_suffix'];
                                        ?>
                                        <div class="col-sm-6">
                                            <div class="hm4-counter-column hm5-counter-column d-flex align-items-center flex-wrap flex-xxl-nowrap gap-4">
                                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle shadow-none">
                                                    <?php \Elementor\Icons_Manager::render_icon( $count['counter_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                                </span>
                                                <div>
                                                    <h4 class="mb-3 text-white"><span class="counter"><?php echo $ctitle;?></span> <span><?php echo $suffix;?></span></h4>
                                                    <span class="fs-sm text text-uppercase"><?php echo $cdesc;?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \crete_op_hero());

