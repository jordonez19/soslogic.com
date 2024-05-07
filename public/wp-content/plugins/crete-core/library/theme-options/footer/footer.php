<?php
// Create a top-tab
  CSF::createSection( $prefix, array(
    'id'    => 'footer', // Set a unique slug-like ID
    'title' => 'Footer',
    'icon'     => 'fa fa-arrow-down',
  ) );
 // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'footer', // The slug id of the parent section
    'title'  => 'Footer Blocks',
    'fields' => array(

        array(
            'id'          => 'footer_main_element',
            'type'        => 'select',
            'title'       => 'Footer Element',
            'placeholder' => 'Select an option',
            'options'     => array(
                'full'  => 'Widget and Copyright',
                'copyright'  => 'Only Copyright',
                'none'  => 'None',

            ),
            'default'     => 'full'
        ),

        array(
            'id'          => 'footer_top_element',
            'type'        => 'select',
            'title'       => 'Footer Top Element',
            'placeholder' => 'Select an option',
            'options'     => array(
                'cta-bar'  => 'CTA Bar',
                'social_slide'  => 'Social Slider',
                'both'  => 'Both',
                'none'  => 'None',
            ),
            'default'     => 'cta-bar'
        ),
        array(
            'id'         => 'cta_bar_position',
            'type'       => 'button_set',
            'title'      => 'CTA Bar State',
            'options'    => array(
                'home'  => 'Only Home Page',
                'other' => 'Only Other Pages',
                'allpage' => 'All Pages',

            ),
            'default'    => 'home',
            'dependency' => array( 'footer_top_element', 'any', 'cta-bar,both' ),
        ),

        array(
            'id'         => 'social_slider_position',
            'type'       => 'button_set',
            'title'      => 'Social Slider State',
            'options'    => array(
                'home'  => 'Only Home Page',
                'other' => 'Only Other Pages',
                'allpage' => 'All Pages',
            ),
            'default'    => 'other',
            'dependency' => array( 'footer_top_element', 'any', 'social_slide,both' ),
        ),

// CTA Content
        array(
            'type'    => 'heading',
            'content' => 'CTA Content',
            'dependency' => array( 'footer_top_element', 'any', 'cta-bar,both' ),
        ),
        array(
            'id'      => 'cta_title',
            'type'    => 'text',
            'title'   => 'CTA Title',
            'default' => 'Have a Project in Mind?',
            'dependency' => array( 'footer_top_element', 'any', 'cta-bar,both' ),
        ),

        array(
            'id'      => 'cta_desc',
            'type'    => 'textarea',
            'title'   => 'CTA Description',
            'default' => 'Luctus sapien pellentesque arcu fermentum accumsan tempus nam facilisis ullamcorper,',
            'dependency' => array( 'footer_top_element', 'any', 'cta-bar,both' ),
        ),

        array(
            'id'      => 'cta_btn_text',
            'type'    => 'text',
            'title'   => 'CTA Button Text',
            'default' => 'Get Started',
            'dependency' => array( 'footer_top_element', 'any', 'cta-bar,both' ),
        ),

        array(
            'id'      => 'cta_btn_url',
            'type'    => 'text',
            'title'   => 'CTA Button Url',
            'default' => '#',
            'dependency' => array( 'footer_top_element', 'any', 'cta-bar,both' ),
        ),


        // Slider Content
        array(
            'type'    => 'heading',
            'content' => 'Social Slider Content',
            'dependency' => array( 'footer_top_element', 'any', 'social_slide,both' ),
        ),

        array(
            'id'     => 'footer_social_slider',
            'type'   => 'repeater',
            'title'  => 'Social Slider',
            'dependency' => array( 'footer_top_element', 'any', 'social_slide,both' ),
            'fields' => array(

                array(
                    'id'    => 'social_name',
                    'type'  => 'text',
                    'title' => 'Name'
                ),

                array(
                    'id'    => 'social_url',
                    'type'  => 'text',
                    'title' => 'URL'
                ),


            ),
        ),

           array(
          'id'         => 'back-top-top-enable',
          'type'       => 'button_set',
          'title'      => 'Back To Top Button',
          'options'    => array(
            'enabled'  => 'Enabled',
            'disabled' => 'Disabled',
          ),
          'default'    => 'enabled'
        ),

 array(
          'id'      => 'backto_top_bt_border',
          'type'    => 'teconce_gradient',
          'title'   => 'Back To Top Button Border Color',
          'default' => '#2b2f3e4f',
           'dependency' => array( 'back-top-top-enable', '==', 'enabled' ),
        ),
        
        
         array(
          'id'      => 'backto_top_bt_border_active',
          'type'    => 'teconce_gradient',
          'title'   => 'Back To Top Button Border Active Color',
          'output'      => '.progress-wrap svg.progress-circle path',
          'output_mode' => 'stroke',
          'default' => '#FF9515',
           'dependency' => array( 'back-top-top-enable', '==', 'enabled' ),
        ),
        
          array(
          'id'      => 'backto_top_bt_icon',
          'type'    => 'teconce_gradient',
          'title'   => 'Back To Top Icon Color',
          'output'      => '.progress-wrap::after',
          'output_mode' => 'color',
          'default' => '#FF9515',
           'dependency' => array( 'back-top-top-enable', '==', 'enabled' ),
        ),
            
        )
        ));
        
        
         // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'footer', // The slug id of the parent section
    'title'  => 'Footer Copyright',
    'fields' => array(
         array(
          'id'    => 'footer_copyright_enable',
          'type'  => 'switcher',
          'title' => 'Footer Copyright Enable/Disable',
          'default' => true,
        ),
        
        array(
              'id'            => 'copyright_text',
              'type'          => 'wp_editor',
              'title'         => 'Copyright Text',
              'tinymce'       => true,
              'quicktags'     => true,
              'media_buttons' => true,
              'height'        => '100px',
              'default'   =>'© copyright 2023 Crete I by Teconce',
              'dependency' => array( 'footer_copyright_enable', '==', 'true', 'all' ),
            ),
        )
        
        ));
        
        
               // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'footer', // The slug id of the parent section
    'title'  => 'Footer Style',
    'fields' => array(
        array(
            'id'          => 'footer_padding',
            'type'        => 'spacing',
            'title'       => 'Padding',
            'output'      => '.footer-section',
            'output_mode' => 'padding', // or margin, relative
            'default'     => array(
                'top'       => '100',
                'right'     => '0',
                'bottom'    => '0',
                'left'      => '0',
                'unit'      => 'px',
            ),
        ),
        array(
            'id'      => 'footer_bg',
            'type'    => 'teconce_gradient',
            'title'   => 'Footer Background Color',
            'default' => '#101727',
            'output'      => '.footer-section',
            'output_mode' => 'background',
        ),

        array(
            'id'      => 'footer_title_color',
            'type'    => 'teconce_color',
            'title'   => 'Title Color',
            'default' => '#9097A9',
            'output'      => '.footer-widget .widget-title, .footer-sidebar .widget-title',
            'output_mode' => 'color',
        ),

        array(
            'id'      => 'footer_text_color',
            'type'    => 'teconce_color',
            'title'   => 'Text Color',
            'default' => '#ffffff',
            'output'      => '.footer-widget, .footer-sidebar,.footer-widget li,.footer-sidebar li,
             .footer-sidebar p,.footer-widget p,.footer-sidebar a,.footer-widget a',
            'output_mode' => 'color',
        ),
        
        array(
          'id'      => 'footer_border_color',
          'type'    => 'teconce_color',
          'title'   => 'Footer Border',
          'default' => '#242B3D',
          'output'      => '.footer-section .footer-copyright, .footer-section .footer-top',
          'output_mode' => 'border-color',
        ),

        array(
            'id'      => 'footer_ttl_border_color',
            'type'    => 'teconce_color',
            'title'   => 'Footer Title Border',
            'default' => '#1A185E',
            'output'      => '.footer-widget .widget-title::before, .footer-sidebar .widget-title:before',
            'output_mode' => 'background-color',
        ),

        array(
            'id'      => 'brand_footer_bg',
            'type'    => 'teconce_gradient',
            'title'   => 'Social Background Color',
            'default' => '#13114C',
            'output'      => '.cr2-footer-brands',
            'output_mode' => 'background',
        ),
        )
        
        ));