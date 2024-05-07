<?php
// Create a top-tab
  CSF::createSection( $prefix, array(
    'id'    => 'header', // Set a unique slug-like ID
    'title' => 'Header',
    'icon'     => 'fa fa-arrow-up',
  ) );
  
   // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'header', // The slug id of the parent section
    'title'  => 'Logo',
    'fields' => array(
        array(
          'id'    => 'main-logo',
          'type'  => 'media',
          'title' => 'Logo',
        ),
        
         array(
          'id'    => 'main-offcanvas-logo',
          'type'  => 'media',
          'title' => 'Offcanvas Logo',
        ),
        
        array(
          'id'    => 'mobile_offcanvas_logo',
          'type'  => 'media',
          'title' => 'Mobile Offcanvas Logo',
        ),
        
        array(
          'id'    => 'crete-favicon',
          'type'  => 'media',
          'title' => 'Favicon',
        ),
        
        array(
          'id'      => 'logo-width',
          'type'    => 'slider',
          'title'   => 'Logo Width',
          'min'     => 10,
          'max'     => 300,
          'step'    => 1,
          'unit'    => 'px',
          'default' => 180,
          'output' => '.site-main-logo img,
          header .logo-wrapper img',
          'output_mode' => 'width',
        ),
        )
        
        
        
        ));


CSF::createSection( $prefix, array(
    'parent' => 'header', // The slug id of the parent section
    'title'  => 'Header Style',
    'fields' => array(

        array(
            'id'        => 'crete-header-style',
            'type'      => 'image_select',
            'title'     => 'Header Style',
            'options'   => array(
                'style-one' => 'https://teconce.files.wordpress.com/2023/07/header-one.jpg',
                'style-two' => 'https://teconce.files.wordpress.com/2023/07/header-two.jpg',
                'style-three' => 'https://teconce.files.wordpress.com/2023/07/header-three.jpg',
                
                'style-four' => 'https://teconce.files.wordpress.com/2023/07/header-four.jpg',
            ),
            'default'   => 'style-one'
        ),
        
        //Style one content start
        array(
          'type'    => 'heading',
          'content' => 'Style One Content',
          'dependency' => array( 'crete-header-style', '==', 'style-one' ),
          
        ),
        
        
        array(
          'id'    => 'stl_one_phone',
          'type'  => 'text',
          'title' => 'Phone Number',
          'dependency' => array( 'crete-header-style', '==', 'style-one' ),
        ),
        
        array(
          'id'    => 'stl_one_address',
          'type'  => 'text',
          'title' => 'Address',
          'dependency' => array( 'crete-header-style', '==', 'style-one' ),
        ),
        
        array(
          'id'    => 'stl_one_email',
          'type'  => 'text',
          'title' => 'Email',
          'dependency' => array( 'crete-header-style', '==', 'style-one' ),
        ),
        
        array(
          'id'     => 'style_one_social',
          'type'   => 'repeater',
          'title'  => 'Social Links',
          'dependency' => array( 'crete-header-style', '==', 'style-one' ),
          'fields' => array(
                 array(
              'id'      => 'social_icon',
              'type'    => 'icon',
              'title'   => 'Icon',
              'default' => 'fa fa-heart'
            ),
            array(
              'id'    => 'social_link',
              'type'  => 'text',
              'title' => 'Social Link'
            ),
        
          ),
        ),
        
        
        array(
          'id'    => 'stl_contact_title',
          'type'  => 'text',
          'title' => 'Contact Button Title',
          'dependency' => array( 'crete-header-style', '==', 'style-one' ),
        ),
        array(
          'id'    => 'stl_contact_url',
          'type'  => 'text',
          'title' => 'Contact Button URL',
          'dependency' => array( 'crete-header-style', '==', 'style-one' ),
        ),
        
        array(
          'id'    => 'offcanvas_address',
          'type'  => 'textarea',
          'title' => 'Offcanvas Address',
          'dependency' => array( 'crete-header-style', '==', 'style-one' ),
        ),
        
        array(
          'id'    => 'offcanvas_gallery',
          'type'  => 'gallery',
          'title' => 'Offcanvas Gallery',
          'dependency' => array( 'crete-header-style', '==', 'style-one' ),
        ),

        array(
            'id'            => 'stl-one-off-form-s',
            'type'          => 'textarea',
            'title'         => 'Off Canvas Form Shortcode',
            'dependency' => array( 'crete-header-style', '==', 'style-one' ),

        ),

        array(
            'id'    => 'offcanvas_btn_title',
            'type'  => 'text',
            'title' => 'Offcanvas Button Title',
            'dependency' => array( 'crete-header-style', '==', 'style-one' ),
        ),
        array(
            'id'    => 'offcanvas_btn_url',
            'type'  => 'text',
            'title' => 'Offcanvas Button URL',
            'dependency' => array( 'crete-header-style', '==', 'style-one' ),
        ),
        
        
          //Style one content end


        //Style Two and three content start
        array(
            'type'    => 'heading',
            'content' => 'Style Two Content',
            'dependency' => array( 'crete-header-style', '==', 'style-two' ),

        ),
        
        array(
            'type'    => 'heading',
            'content' => 'Style Three Content',
            'dependency' => array( 'crete-header-style', '==', 'style-three' ),

        ),
        


        array(
            'id'    => 'stl_two_phone',
            'type'  => 'text',
            'title' => 'Phone Number',
            'dependency' => array( 'crete-header-style', 'any', 'style-two,style-three' ),
        ),

        array(
            'id'    => 'stl_two_email',
            'type'  => 'text',
            'title' => 'Email',
             'dependency' => array( 'crete-header-style', 'any', 'style-two,style-three' ),
        ),

        //Style Two content end
        //Style Four content start
        array(
            'type'    => 'heading',
            'content' => 'Style Four Content',
            'dependency' => array( 'crete-header-style', '==', 'style-four' ),

        ),

        array(
            'id'    => 'main_container_bg_h4',
            'type'  => 'background',
            'title' => 'Main Container Background',
            'dependency' => array( 'crete-header-style', '==', 'style-four' ),
            'output' => '.hm5-main-section',
        ),


        array(
            'id'        => 'hm4-menu',
            'type'      => 'repeater',
            'title'     => 'Header Four Menu',
            'dependency' => array( 'crete-header-style', '==', 'style-four' ),
            'fields'    => array(

                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Menu Title',
                ),

                array(
                    'id'    => 'link',
                    'type'  => 'text',
                    'title' => 'Menu Link',
                ),

                array(
                    'id'    => 'icon',
                    'type'  => 'icon',
                    'title' => 'Menu Icon',
                ),
                array(
                  'id'    => 'image',
                  'type'  => 'media',
                  'title' => 'Image insted icon',
                ),
                array(
                    'id'       => 'active',
                  'type'     => 'switcher',
                  'title'    => 'Active the menu',
                  'text_on'  => 'Yes',
                  'text_off' => 'No',
                ),


            ),
            'default'   => array(
                array(
                    'title' => 'Home',
                    'link' => '#',
                    'icon' => 'fas fa-home',
                ),
                array(
                    'title' => 'About',
                    'link' => '#',
                    'icon' => 'fas fa-info',
                )
            )
        ),


    )

));


CSF::createSection( $prefix, array(
    'parent' => 'header', // The slug id of the parent section
    'title'  => 'Header Color',
    'fields' => array(

        array(
            'id'    => 'top_header_left_color',
            'type'  => 'teconce_color',
            'title' => 'Top Header Left Color',
            'default'=>'#ffffff',
            'output'      => '.infobar .infobar-content,.infobar .infobar-content a,.infobar .infobar-content p',
            'output_mode' => 'color',
            'output_important' => true,


        ),

        array(
            'id'    => 'top_header_right_color',
            'type'  => 'teconce_color',
            'title' => 'Top Header Right Color',
            'default'=>'#636D78',
            'output'      => '.infobar .infobar-right,.infobar .infobar-right a,.infobar .infobar-right p,
           .infobar .infobar-right .current,
           .infobar-right .info-social a',
            'output_mode' => 'color',
            'output_important' => true,


        ),

        array(
            'id'    => 'top_header_right_border_color',
            'type'  => 'teconce_color',
            'title' => 'Top Header Right Border Color',
            'default'=>'#636D78',
            'output'      => '.info-social.border-left::before',
            'output_mode' => 'background-color',
            'output_important' => true,


        ),
    )
    ));
  CSF::createSection( $prefix, array(
     'parent' => 'header', // The slug id of the parent section
    'title'  => 'Header Sticky Notification Bar',
    'fields' => array(
        
           array(
          'id'         => 'sticky_bar_enable',
          'type'       => 'button_set',
          'title'      => 'Sticky Bar Enable/Disable',
          'options'    => array(
            'enabled'  => 'Enable',
            'disabled' => 'Disable',
          ),
          'default'    => 'disabled'
        ),
       
       
          array(
          'id'         => 'sticky_bar_hide_mob',
          'type'       => 'button_set',
          'title'      => 'Sticky Bar Hide on Mobile',
          'options'    => array(
            'enabled'  => 'Display',
            'disabled' => 'Hide',
          ),
          'default'    => 'enabled'
        ),

            
        
             array(
          'id'         => 'sticky_bar_style',
          'type'       => 'button_set',
          'title'      => 'Sticky Bar Color Style',
          'options'    => array(
            'standard'  => 'Standard',
            'custom' => 'Custom',
          ),
          'default'    => 'standard'
        ),
        
        array(
          'id'       => 'custom_code_notification',
          'type'     => 'code_editor',
          'title'    => 'CSS Editor',
          'settings' => array(
            'theme'  => 'mbo',
            'mode'   => 'css',
          ),
          'default'  => '',
           'dependency' => array( 'sticky_bar_style', '==', 'custom' ),
        ),

       array(
          'id'    => 'sticky_bg_color',
          'type'  => 'teconce_gradient',
          'title' => 'Background Color',
          'default'=>'#FF3366',
          'output'      => '.mayosis-standard-bar',
          'output_mode' => 'background',
          'dependency' => array( 'sticky_bar_style', '==', 'standard' ),
          
        ),
        
         array(
          'id'    => 'sticky_text_color',
          'type'  => 'teconce_color',
          'title' => 'Text Color',
          'default'=>'#ffffff',
          'output'      => '.mayosis-standard-bar',
          'output_mode' => 'color',
          
        ),
        
        array(
          'id'    => 'sticky_btn_color',
          'type'  => 'teconce_gradient',
          'title' => 'Button Background Color',
          'default'=>'#222',
          'output'      => '.mayosis-sticky-bar-btn',
          'output_mode' => 'background',
          
        ),
        
          array(
          'id'    => 'sticky_btn_text_color',
          'type'  => 'teconce_color',
          'title' => 'Button Text Color',
          'default'=>'#ffffff',
          'output'      => '.btn.mayosis-sticky-bar-btn',
          'output_mode' => 'color',
          
        ),
        
        array(
          'id'    => 'sticky_header_content',
          'type'  => 'wp_editor',
          'title' => 'Notification Header Content',
        ),
        
        array(
          'id'      => 'sticky_button_text',
          'type'    => 'text',
          'title'   => 'Button Text',
          'default' => 'Get Started'
        ),
        array(
          'id'      => 'sticky_button_url',
          'type'    => 'text',
          'title'   => 'Button Url',
          'default' => ''
        ),
        
    array(
          'id'         => 'button_target',
          'type'       => 'button_set',
          'title'      => 'Button Target',
          'options'    => array(
            'blank'  => 'Blank',
            'self' => 'Self',
          ),
          'default'    => 'self'
        ),
        
        array(
          'id'          => 'padding_on_box',
          'type'        => 'spacing',
          'title'       => 'Padding on Notification Bar',
          'output'      => '#mayosis-sticky-bar',
          'output_mode' => 'padding', // or margin, relative
          'default'     => array(
            'top'       => '10',
            'right'     => '0',
            'bottom'    => '10',
            'left'      => '0',
            'unit'      => 'px',
          ),
        ),
        
        
         array(
          'id'          => 'padding_on_button',
          'type'        => 'spacing',
          'title'       => 'Padding on Button',
          'output'      => '.mayosis-sticky-bar-btn',
          'output_mode' => 'padding', // or margin, relative
          'default'     => array(
            'top'       => '6',
            'right'     => '12',
            'bottom'    => '6',
            'left'      => '12',
            'unit'      => 'px',
          ),
        ),

    )
    
    
  ) );
  
  

        
        
           // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'header', // The slug id of the parent section
    'title'  => 'Breadcrumb',
    'fields' => array(
        
       
       array(
          'id'          => 'x_breadcrumb_margin',
          'type'        => 'spacing',
          'title'       => 'Margin',
          'output'      => '#crete-hero-banner,.crete_page_global_breadcrumb',
          'output_mode' => 'margin', // or margin, relative
          'default'     => array(
            'top'       => '0',
            'right'     => '0',
            'bottom'    => '0',
            'left'      => '0',
            'unit'      => 'px',
          ),
        ),
        
         array(
          'id'          => 'x_breadcrumb_padding',
          'type'        => 'spacing',
          'title'       => 'Padding',
          'output'      => '#crete-hero-banner,.crete_page_global_breadcrumb',
          'output_mode' => 'padding', // or margin, relative
          'default'     => array(
            'top'       => '176',
            'right'     => '15',
            'bottom'    => '64',
            'left'      => '15',
            'unit'      => 'px',
          ),
        ),
        
        


        array(
            'id'                              => 'x_breadcumb_bg',
            'type'                            => 'background',
            'title'                           => 'Breadcrumb Background',
            'output'      => '.crete-archive-common-bg,.crete_page_global_breadcrumb',
            'background_gradient'             => true,
            'background_origin'               => true,
            'background_clip'                 => true,
            'background_blend_mode'           => true,

        ),


        array(
            'id'                              => 'x_breadcumb_bg_overlay',
            'type'                            => 'background',
            'title'                           => 'Breadcrumb Background Overlay',
            'output'      => '.breadcrumb-section::before,.crete_page_global_breadcrumb:before',
            'background_gradient'             => true,
            'background_origin'               => true,
            'background_clip'                 => true,
            'background_blend_mode'           => true,

        ),


        
        
        
          array(
          'id'    => 'x_breadcumb_color',
          'type'  => 'teconce_color',
          'title' => 'Color',
          'default'=>'#fff',
          'output'      => '.crete_page_global_breadcrumb .breadcrumb-content h1,.crete_page_global_breadcrumb .breadcrumb-content ul li,.crete_page_global_breadcrumb.breadcrumb-content ul li+li::before,.crete_page_global_breadcrumb',
          'output_mode' => 'color',
          'output_important' => true,
          
        ),

        array(
            'id'    => 'x_breadcumb_color_link',
            'type'  => 'teconce_color',
            'title' => 'Link Color',
            'default'=>'#fff',
            'output'      => '.crete_page_global_breadcrumb .breadcrumb-content ul li a',
            'output_mode' => 'color',

        ),
        
        array(
            'id'    => 'x_gray_shape_one_color',
            'type'  => 'teconce_color',
            'title' => 'Gray Shape One Color',
            'default'=>'rgba(0, 0, 0, 0.4)',
            'output'      => '.breadcrumb-section .circle-shape-1',
            'output_mode' => 'background-color',

        ),
        
         array(
            'id'    => 'x_gray_shape_two_color',
            'type'  => 'teconce_color',
            'title' => 'Gray Shape Two Color',
            'default'=>'rgba(0, 0, 0, 0.2)',
            'output'      => '.breadcrumb-section .circle-shape-2',
            'output_mode' => 'background-color',

        ),
        
        array(
            'id'    => 'x_gray_shape_three_color',
            'type'  => 'teconce_color',
            'title' => 'Blue Shape Color',
            'default'=>'#5044EB',
            'output'      => '.breadcrumb-section .circle-shape-3',
            'output_mode' => 'background-color',

        ),

        )
        
        
        
        ));
        
                   // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'header', // The slug id of the parent section
    'title'  => 'Loader',
    'fields' => array(
        array(
  'id'         => 'enable_dbl_loader',
  'type'       => 'button_set',
  'title'      => 'Loader Enable/Disable',
  'options'    => array(
    'enabled'  => 'Enabled',
    'disabled' => 'Disabled',
  ),
  'default'    => 'disabled'
),


array(
          'id'    => 'ldr_bg',
          'type'  => 'teconce_gradient',
          'title' => 'Background Color',
          'default'=>'#FBEEE6',
          'output'      => '.crete-loader,.circle-core',
          'output_mode' => 'background',
          
        ),
        
        array(
          'id'    => 'ldr_cirl_clr',
          'type'  => 'teconce_gradient',
          'title' => 'Circle Color',
          'default'=>'',
          'output'      => '.circle-border',
          'output_mode' => 'background',
          
        ),
        )
         ));