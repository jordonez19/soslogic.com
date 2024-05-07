<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */


if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Crete_Blog_Post extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_blog_post';
    }

    public function get_title()
    {
        return esc_html__('Crete Blog Post', 'crete-core');
    }

    public function get_icon()
    {
        return 'eicon-posts-grid';
    }

    public function get_categories()
    {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'post_content_tab',
            [
                'label' => esc_html__('Post Settings', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'blog_style',
            [
                'label' => esc_html__('Select Blog Style', 'crete-core'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'st_one',
                'options' => [
                    'st_one'  => esc_html__('Blog Style One', 'crete-core'),
                    'st_two' => esc_html__('Blog Style Two', 'crete-core'),
                    'st_three' => esc_html__('Blog Style Three', 'crete-core'),
                    
                ],
            ]
        );
        $this->add_control(
            'post_per_page',
            [
                'label' => esc_html__('Number of Post to Show', 'crete-core'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 100,
                'step' => 1,
                'default' => 4,
            ]
        );
        $this->add_control(
            'category',
            array(
                'label'       => esc_html__('Select Category', 'crete-core'),
                'type'        => \Elementor\Controls_Manager::SELECT2,
                'multiple'    => true,
                'options'     => array_flip(crete_elements_categories('category', array(
                    'sort_order'  => 'ASC',
                    'taxonomy'    => 'category',
                    'hide_empty'  => false,
                ))),
                'label_block' => true,
            )
        );

        $this->end_controls_section();
        
        
           $this->start_controls_section(
            'section_contents_m',
            [
                'label' => esc_html__('Section Content', 'crete-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'section_subtitle',
			[
				'label' => esc_html__( 'Subtitle', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'News & Updates', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your sub title here', 'textdomain' ),
			]
		);
		
		$this->add_control(
			'section_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Recent Blog', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
			]
		);
		
			$this->add_control(
			'section_title_style',
			[
				'label' => esc_html__( 'Style Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Updates', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
			]
		);
		
		$this->add_control(
			'section_learn_more_style',
			[
				'label' => esc_html__( 'Learn More Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Learn More', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
			]
		);
		
		
		
		$this->add_control(
			'view_more_txt',
			[
				'label' => esc_html__( 'View More Text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'View All Posts', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your text here', 'textdomain' ),
			]
		);
		
			$this->add_control(
			'view_more_url',
			[
				'label' => esc_html__( 'View More Url', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '#', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your text here', 'textdomain' ),
			]
		);
        
         $this->end_controls_section();
        

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $category = $settings['category'];
        $post_per_page = $settings['post_per_page'];
        $blog_style = $settings['blog_style'];

        if (!empty($category)) {
            $post_args =  array(
                'post_type'      => 'post',
                'post_status' => 'publish',
                'posts_per_page' => $post_per_page,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'terms'    => $category,
                    ),
                )
            );
        } else {
            $post_args =  array(
                'post_type'      => 'post',
                'post_status' => 'publish',
                'posts_per_page' => $post_per_page,
            );
        }

        $the_query = new \WP_Query($post_args);


        switch ($blog_style) {
            case "st_one":
                crete_blog_style_one($the_query,$settings);
                break;
            case "st_two":
                crete_blog_style_two($the_query,$settings);
                break;
                
                case "st_three":
                crete_blog_style_three($the_query,$settings);
                break;
          

        }
    }
}
\Elementor\Plugin::instance()->widgets_manager->register(new \Crete_Blog_Post());
