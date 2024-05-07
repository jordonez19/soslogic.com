<?php
// Create a top-tab
  CSF::createSection( $prefix, array(
    'id'    => 'woocommerce', // Set a unique slug-like ID
    'title' => 'Woocoommerce',
    'icon'     => 'fa fa-shopping-cart',
  ) );
  
     // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'woocommerce', // The slug id of the parent section
    'title'  => 'Single Product',
    'fields' => array(
   
        array(
          'id'          => 'single_woo_breadcumb_padding',
          'type'        => 'spacing',
          'title'       => 'Breradcrumb Padding',
          'output'      => '.emerce-common-breadcrumbs.emerce-woo-breadcumb',
          'output_mode' => 'padding', // or margin, relative
          'default'     => array(
            'top'       => '65',
            'right'     => '15',
            'bottom'    => '58',
            'left'      => '15',
            'unit'      => 'px',
          ),
        ),
        
        array(
          'id'          => 'xpc_bd_woo_bg_color',
          'type'        => 'teconce_gradient',
          'title'       => 'Breadcrumb Background Color',
          'output'      => '.emerce-common-breadcrumbs.emerce-woo-breadcumb',
          'output_mode' => 'background' // Supports css properties like ( border-color, color, background-color etc )
        ),
        
         array(
          'id'          => 'xpc_bd_woo_txt_color',
          'type'        => 'teconce_gradient',
          'title'       => 'Breadcrumb Text Color',
          'output'      => '.emerce-common-breadcrumbs.emerce-woo-breadcumb,
          .emerce-common-breadcrumbs.emerce-woo-breadcumb h1, 
          .emerce-common-breadcrumbs.emerce-woo-breadcumb .emerce-breadcrumb a, 
          .emerce-common-breadcrumbs.emerce-woo-breadcumb .emerce-breadcrumb, 
          .emerce-common-breadcrumbs.emerce-woo-breadcumb .woocommerce-breadcrumb a, 
          .emerce-common-breadcrumbs.emerce-woo-breadcumb .woocommerce-breadcrumb,
          .woocommerce-breadcrumb a, .woocommerce-breadcrumb,
          .woocommerce-breadcrumb h1',
          'output_mode' => 'color' // Supports css properties like ( border-color, color, background-color etc )
        ),
        
        
        array(
          'id'         => 'bd_title_hide_woo',
          'type'       => 'switcher',
          'title'      => 'Product Title Hide from Breadcrumb',
          'text_on'    => 'Show',
          'text_off'   => 'Hide',
          'text_width' => 120
        ),
        
        
        array(
  'id'      => 'main_woo_ttl_typo',
  'type'    => 'typography',
  'title'   => 'Main Title Typography',
  'output'  => '.pivoo-single-product-box .product_title',
  'text_align' => false,
  'default' => array(
    'font-family'    => 'Urbanist',
    'font-size'      => '30',
    'line-height'    => '42',
    'letter-spacing' => '0',
    'text-transform' => 'capitalize',
    'subset'         => 'latin-ext',
    'type'           => 'google',
    'unit'           => 'px',
  ),
),


        )
        
        
        
        ));