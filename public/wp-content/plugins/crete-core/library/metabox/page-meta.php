<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'crete_page_options';

  //
  // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'              => 'Page Options',
    'post_type'          => 'page',
    'data_type'          => 'unserialize',
    'context'            => 'advanced',
    'priority'           => 'default',
    'exclude_post_types' => array(),
    'page_templates'     => '',
    'post_formats'       => '',
    'show_restore'       => false,
    'enqueue_webfont'    => true,
    'async_webfont'      => false,
    'output_css'         => true,
    'theme'              => 'dark',
    'class'              => '',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Breadcrumb Options',
    'fields' => array(

            array(
              'id'         => 'bd_options_global',
              'type'       => 'switcher',
              'title'      => 'Breadcrumb Options',
              'text_on'    => 'Custom',
              'text_off'   => 'Global',
              'text_width' => 100
            ),
  
         array(
          'id'          => 'x_breadcrumb_margin',
          'type'        => 'spacing',
          'title'       => 'Margin',
          'output'      => '.crete_page_custom_breadcrumb',
          'output_mode' => 'margin', // or margin, relative
          'dependency' => array( 'bd_options_global', '==', 'true' ),
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
          'output'      => '.crete_page_custom_breadcrumb',
          'output_mode' => 'padding', // or margin, relative
          'dependency' => array( 'bd_options_global', '==', 'true' ),
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
            'output'      => '.crete_page_custom_breadcrumb',
            'background_gradient'             => true,
            'background_origin'               => true,
            'background_clip'                 => true,
            'background_blend_mode'           => true,
            'dependency' => array( 'bd_options_global', '==', 'true' ),

        ),


        array(
            'id'                              => 'x_breadcumb_bg_overlay',
            'type'                            => 'background',
            'title'                           => 'Breadcrumb Background Overlay',
            'output'      => '.crete_page_custom_breadcrumb.breadcrumb-section::before,.crete_page_custom_breadcrumb:before',
            'dependency' => array( 'bd_options_global', '==', 'true' ),
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
          'output'      => '.crete_page_custom_breadcrumb .breadcrumb-content h1,.crete_page_custom_breadcrumb .breadcrumb-content ul li,.crete_page_custom_breadcrumb.breadcrumb-content ul li+li::before,.crete_page_custom_breadcrumb',
          'output_mode' => 'color',
          'output_important' => true,
          'dependency' => array( 'bd_options_global', '==', 'true' ),
          
        ),

        array(
            'id'    => 'x_breadcumb_color_link',
            'type'  => 'teconce_color',
            'title' => 'Link Color',
            'default'=>'#fff',
            'output'      => '.crete_page_custom_breadcrumb .breadcrumb-content ul li a',
            'output_mode' => 'color',
            'dependency' => array( 'bd_options_global', '==', 'true' ),

        ),
       
       
        
    
    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Page Options',
    'fields' => array(

       array(
          'id'         => 'page_width',
          'type'       => 'button_set',
          'title'      => 'Set page width',
          'options'    => array(
            'container'  => 'Boxed',
            'container-fluid-med' => 'Full Width',
          ),
          'default'    => 'container'
        ),
        
        array(
          'id'         => 'global_page_meta',
          'type'       => 'button_set',
          'title'      => 'Post Options Type',
          'options'    => array(
            'disabled' => 'Global',
            'enabled'  => 'Custom',
           
          ),
          'default'    => 'disabled'
        ),
        
        array(
          'id'          => 'select_header_blocks_meta',
          'type'        => 'select',
          'title'       => 'Select Custom Header',
          'placeholder' => 'Select a Header',
          'dependency' => array( 'global_page_meta', '==', 'enabled' ),
          'options'     => 'posts',
          'query_args'  => array(
            'post_type' => 'crete_header',
          ),
        ),
        
         array(
          'id'          => 'select_footer_blocks_meta',
          'type'        => 'select',
          'title'       => 'Select Custom Footer',
          'placeholder' => 'Select a Footer',
          'dependency' => array( 'global_page_meta', '==', 'enabled' ),
          'options'     => 'posts',
          'query_args'  => array(
            'post_type' => 'crete_footer',
          ),
        ),
        
        array(
  'id'          => 'page_padding_b',
  'type'        => 'spacing',
  'title'       => 'Page Padding',
  'output'      => '.crete-default-page-content',
  'output_mode' => 'padding', // or margin, relative
   'dependency' => array( 'global_page_meta', '==', 'enabled' ),
  'default'     => array(
    'top'       => '120',
    'right'     => '0',
    'bottom'    => '120',
    'left'      => '0',
    'unit'      => 'px',
  ),
),

    )
  ) );
  
 

}
