<?php

/**
 * @author Teconcetheme
 * @since   1.0
 * @version 1.0
 */
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Crete_Contact_Info_box extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'crete_contact_info_box';
    }

    public function get_title()
    {
        return esc_html__('Crete Contact Infobox', 'crete-core');
    }

    public function get_icon()
    {
        return 'eicon-info-box';
    }

    public function get_categories()
    {
        return ['crete-ele-widgets-cat'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'crete_contact_info_box_section',
            [
                'label' => esc_html__( 'Crete Infobox', 'crete-core' ),
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
            'icon',
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

        $this->add_control(
            'crete_contact_info_box_type',
            [
                'label' => esc_html__('Button Type', 'crete-core'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'crete_default',
                'options' => [
                    'crete_default'  => esc_html__('Default', 'crete-core'),
                    'video'  => esc_html__('Video Popup', 'crete-core'),
                ],
            ]
        );


        $this->add_control(
            'crete_contact_info_box_title',
            [
                'label' => esc_html__( 'Box Text', 'crete-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '+584 (25) 21453', 'crete-core' ),
            ]
        );
        $this->add_control(
            'btn_link',
            [
                'label' => esc_html__( 'Link', 'crete-core' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'crete-core' ),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );

        $this->add_control(
            'crete_contact_sub_t',
            [
                'label' => esc_html__( 'Box  Sub Text', 'crete-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Call Us 24/7', 'crete-core' ),
            ]
        );


       
       

        $this->end_controls_section();

        

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $boxtitle = $settings['crete_contact_info_box_title'];
        $boxurl = $settings['btn_link']['url'];
        $subt= $settings['crete_contact_sub_t'];

if ( ! empty( $settings['btn_link']['url'] ) ) {
			$this->add_link_attributes( 'btn_link', $settings['btn_link'] );
		}

        ?>
        <div class="cp-contact-card">
            <div class="feature-image rounded-top-4">
                <?php
                // Get image HTML
                $this->add_render_attribute( 'image', 'src', $settings['image']['url'] );
                $this->add_render_attribute( 'image', 'alt', \Elementor\Control_Media::get_image_alt( $settings['image'] ) );
                $this->add_render_attribute( 'image', 'title', \Elementor\Control_Media::get_image_title( $settings['image'] ) );
                $this->add_render_attribute( 'image', 'class', 'img-fluid' );
                echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'full', 'image' );
                ?>
            </div>
            <div class="ct-contact-card-content d-flex align-items-center gap-4">
                            <span class="icon wow fadeInUp">
                              <?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </span>
                <div>
                    <?php if ($subt){?>
                    <span class="fs-sm fw-bold primary-text-color text-uppercase wow fadeInUp"><?php echo $subt;?></span>
                     <?php } ?>
                    <?php if($boxurl){ ?>
                    <a  <?php echo $this->get_render_attribute_string( 'btn_link' ); ?>><h6 class="mb-0 mt-1 wow fadeInUp"><?php echo esc_html($boxtitle);?></h6></a>
        <?php } else { ?>
                        <h6 class="mb-0 mt-1 wow fadeInUp"><?php echo esc_html($boxtitle);?></h6>
        <?php } ?>
                </div>
            </div>
        </div>
        <?php



    }

}
\Elementor\Plugin::instance()->widgets_manager->register(new \Crete_Contact_Info_box());

