<?php
// Create a top-tab
CSF::createSection($prefix, array(
    'id' => 'blog', // Set a unique slug-like ID
    'title' => 'Blog',
    'icon' => 'fa fa-book',
));
// Create a sub-tab
CSF::createSection($prefix, array(
    'parent' => 'blog', // The slug id of the parent section
    'title' => 'Single Blog Options',
    'fields' => array(
        array(
            'id' => 'x_sbl_width_set',
            'type' => 'switcher',
            'title' => 'Breadcrumb Background Type',
            'text_off' => 'Featured Image',
            'text_on' => 'Custom',
            'text_width' => 160
        ),
        
        array(
  'id'                              => 'single_blog_bg',
  'type'                            => 'background',
  'title'                           => 'Breadcrumb Background',
  
  'dependency' => array( 'x_sbl_width_set', '==', 'true' ),
  
  'background_gradient'             => true,
  'background_origin'               => true,
  'background_clip'                 => true,
  'background_blend_mode'           => true,
  'output' => '.crete-single-blog-header-custom',
  'default'                         => array(
    'background-color'              => '#111',
    'background-gradient-color'     => '#555',
    'background-gradient-direction' => 'to bottom',
    'background-size'               => 'cover',
    'background-position'           => 'center center',
    'background-repeat'             => 'repeat',
  )
),





        array(
            'id' => 'x_sblbreadcumb_color',
            'type' => 'teconce_color',
            'title' => 'Color',
            'default' => '#222',
            'output' => '.crete-single-blog-header,.crete-single-blog-header h1,.crete-single-blog-header .emerce-breadcrumb a,.crete-single-blog-header .emerce-breadcrumb,
          .crete-single-blog-header .woocommerce-breadcrumb a,
          .crete-single-blog-header .woocommerce-breadcrumb',
            'output_mode' => 'color',

        ),


    )
));

// Create a sub-tab
CSF::createSection($prefix, array(
    'parent' => 'blog', // The slug id of the parent section
    'title' => 'Archive Options',
    'fields' => array(
        array(
            'id' => 'archive_thumnail_width_blog',
            'type' => 'dimensions',
            'title' => 'Thumbnail Width',
            'height' => false,
            'output' => '.tctz-default-thumbnail img'
        ),
    )

));
        
        
