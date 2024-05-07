<?php
// Create a top-tab
  CSF::createSection( $prefix, array(
    'id'    => 'global_style', // Set a unique slug-like ID
    'title' => 'Global Style',
    'icon'     => 'fa fa-magic',
  ) );


 // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'global_style', // The slug id of the parent section
    'title'  => 'Global Style',
    'fields' => array(
       
       array(
          'id'            => 'color-set',
          'type'          => 'tabbed',
          'title'         => 'Site Colors',
          'tabs'          => array(
              array(
                  'title'     => 'Body Color',
                  'icon'      => 'fa fa-paint-brush',
                  'fields'    => array(
                      array(
                           'id' => 'site-bg-color-main',
                           'type'        => 'teconce_color',
                           'title' => 'Site Background Color',
                           'default' => '#ffffff',
                           'output' => 'body',
                           'output_mode' => 'background'
                           ),
                        
                        array(
                          'id'    => 'main_text_colot',
                          'type'  => 'teconce_color',
                          'title' => 'Text Color',
                          'default'=>'#636D78',
                           'help' => 'This is the text color of Whole Website',
                           'output'      => 'body,p,.pivoo-ingredients-items li, li',
                          'output_mode' => 'color',
                        ),
                        )),
              array(
                  'title'     => 'Primary Color',
                  'icon'      => 'fa fa-paint-brush',
                  'fields'    => array(
           array(
          'id'    => 'primary_color',
          'type'  => 'teconce_color',
          'title' => 'Primary Color',
          'default'=>'#5044EB',
          'help' => 'This is the primary color for whole website.If you change it whole site main color will be changed.',
          'output'      => '.pivoo-section-title.title-style-one h3:before,.pivoo-post.style-one .pivoo-category-list a,
          .pivoo-nutritional-information h5,
          span.pivoo-new-tag,.plyr__control--overlaid,.pivoo-author-follow a
          ',
          'output_mode' => 'background',
          
        ),
        
        array(
          'id'    => 'primary-text-color',
          'type'  => 'teconce_color',
          'title' => 'Primary Text Color',
          'default'=>'#ffffff',
           'help' => 'This is the text color of primary color',
           'output'      => '.pivoo-section-title.title-style-one h3:before,.pivoo-post.style-one .pivoo-category-list a,
          .pivoo-nutritional-information h5,
          span.pivoo-new-tag,.plyr__control--overlaid,.pivoo-author-follow a',
          'output_mode' => 'color',
          'output_important' => true,
        ),
          )),
          
           array(
                  'title'     => 'Secondary Color',
                  'icon'      => 'fa fa-paint-brush',
                  'fields'    => array(
                       array(
              'id'    => 'secondary-color',
              'type'  => 'teconce_color',
              'title' => 'Secondary Color',
              'default'=>'#f36a07',
              'help' => 'This is the secondary color for whole website.If you change it whole site main color will be changed.',
              'output'      => '.pivoo-product-sale-tag span.onsale,.plyr--video .plyr__control.plyr__tab-focus, .plyr--video .plyr__control:hover, .plyr--video .plyr__control[aria-expanded=true]',
              'output_mode' => 'background',
              
            ),
            
                 array(
              'id'    => 'secondary-text-color',
              'type'  => 'teconce_color',
              'title' => 'Secondary Text Color',
              'default'=>'#ffffff',
              'output'      => '.pivoo-product-sale-tag span.onsale,.plyr--video .plyr__control.plyr__tab-focus, .plyr--video .plyr__control:hover, .plyr--video .plyr__control[aria-expanded=true]',
                'output_mode' => 'color',
               'help' => 'This is the text color of secondary color',
            ),
        
                      )),
                      
                       array(
                  'title'     => 'Input Field Color',
                  'icon'      => 'fa fa-paint-brush',
                  'fields'    => array(
                      
                         array(
              'id'    => 'global_input_bg',
              'type'  => 'teconce_color',
              'title' => 'Input Field Background Color',
              'default'=>'#ffffff',
              'help' => 'This is the input field background color for whole website',
              'output'      => 'input[type="text"], input[type="email"], input[type="url"], 
              input[type="password"], input[type="search"],
              input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], 
              input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], 
              input[type="color"], select, textarea,
              .select2-container--default .select2-selection--single,
               select.lable-form-all',
              'output_mode' => 'background-color',
              
            ),
            
              array(
              'id'    => 'global_input_border',
              'type'  => 'teconce_color',
              'title' => 'Input Field Border Color',
              'default'=>'#ECEFF2',
              'help' => 'This is the input field border color for whole website',
              'output'      => 'input[type="text"], input[type="email"], input[type="url"], 
              input[type="password"], input[type="search"],
              input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], 
              input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], 
              input[type="color"], select, textarea,
              .select2-container--default .select2-selection--single, select.lable-form-all',
              'output_mode' => 'border-color',
              
            ),
            
            array(
              'id'    => 'global_input_text',
              'type'  => 'teconce_color',
              'title' => 'Input Field Text Color',
              'default'=>'#1F1F1F',
              'help' => 'This is the input field Text color for whole website',
              'output'      => 'input[type="text"], input[type="email"], input[type="url"], 
              input[type="password"], input[type="search"],
              input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], 
              input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], 
              input[type="color"], select, textarea,
              .select2-container--default .select2-selection--single,
              select.lable-form-all',
              'output_mode' => 'color',
              
            ),
            
            
                      
                      )),
              
              
              )),
              
              
              
              
      array(
          'id'            => 'btn_color',
          'type'          => 'tabbed',
          'title'         => 'Site Buttons Colors',
          'tabs'          => array(
               array(
                  'title'     => 'Button Normal State',
                  'icon'      => 'fa fa-paint-brush',
                  'fields'    => array(
                       array(
                      'id'    => 'global_btn_bg',
                      'type'  => 'teconce_gradient',
                      'title' => 'Button Background',
                      'default'=>'#5044EB',
                      'help' => 'Site common button background color',
                      'output'      => 'button, input[type="button"], input[type="submit"], [type=button], [type=submit],
                      .piv-lrn-button',
                      'output_mode' => 'background',
                      
                    ),
                    
                    array(
                      'id'    => 'global_btn_border',
                      'type'  => 'teconce_color',
                      'title' => 'Button Border',
                      'default'=>'#5044EB',
                      'help' => 'Site common button border color',
                      'output'      => 'button, input[type="button"], input[type="submit"], [type=button], [type=submit],
                      .piv-lrn-button',
                      'output_mode' => 'border-color',
                      
                    ),
                    
                    array(
                      'id'    => 'global_btn_text',
                      'type'  => 'teconce_color',
                      'title' => 'Button Text',
                      'default'=>'#ffffff',
                      'help' => 'Site common button text color',
                      'output'      => 'button, input[type="button"], input[type="submit"], [type=button], [type=submit],
                      .piv-lrn-button',
                      'output_mode' => 'color',
                      
                      
                    ),
                       )),
                       
                       array(
                  'title'     => 'Button Hover State',
                  'icon'      => 'fa fa-paint-brush',
                  'fields'    => array(
                      
                       array(
                      'id'    => 'global_btn_bg_hvr',
                      'type'  => 'teconce_gradient',
                      'title' => 'Button Background',
                      'default'=>'#1F1F1F',
                      'help' => 'Site common button background color',
                      'output'      => 'button:hover, input[type="button"]:hover, input[type="submit"]:hover, [type=button]:hover, [type=submit]:hover
                      ,.piv-lrn-button:hover',
                      'output_mode' => 'background',
                      
                    ),
                    
                    array(
                      'id'    => 'global_btn_border_hvr',
                      'type'  => 'teconce_color',
                      'title' => 'Button Border',
                      'default'=>'#1F1F1F',
                      'help' => 'Site common button border color',
                      'output'      => 'button:hover, input[type="button"]:hover, input[type="submit"]:hover, [type=button]:hover, [type=submit]:hover
                      ,.piv-lrn-button:hover',
                      'output_mode' => 'border-color',
                      
                    ),
                    
                    array(
                      'id'    => 'global_btn_text_hvr',
                      'type'  => 'teconce_color',
                      'title' => 'Button Text',
                      'default'=>'#ffffff',
                      'help' => 'Site common button text color',
                      'output'      => 'button:hover, input[type="button"]:hover, input[type="submit"]:hover, [type=button]:hover, [type=submit]:hover
                      ,.piv-lrn-button:hover',
                      'output_mode' => 'color',
                      
                      
                    ),
                      
                       )),
              
               )),
              
    
    array(
          'id'        => 'link_color',
          'type'      => 'teconce_link',
          'title'     => 'Link Color',
          'output'      => 'a',
          'visited' => false,
          'default'   => array(
            'color' => '#636D78',
            'hover' => '#5044EB',
            
          )
        ),
        
        array(
  'id'         => 'crete_global_color', // field id
  'type'       => 'switcher',
  'title'      => 'Global Colors Edit',
  'default'    => false
),

 array(
                          'id'    => 'crete--heading-color-d',
                          'type'  => 'teconce_color',
                          'title' => 'Heading Color',
                          'default'=>'#1F1F1F',
                           'help' => 'This is theme default border color',
                           
                           'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
        
                 array(
                          'id'    => 'crete--border-color',
                          'type'  => 'teconce_color',
                          'title' => 'Border Color',
                          'default'=>'#EEEEEE',
                           'help' => 'This is theme default border color',
                           
                           'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                        array(
                          'id'    => 'crete--border-gray',
                          'type'  => 'teconce_color',
                          'title' => 'Border Gray Color',
                          'default'=>'#DEDEDE',
                           'help' => 'This is the theme border gray version color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                        array(
                          'id'    => 'crete--border-dark',
                          'type'  => 'teconce_color',
                          'title' => 'Border Dark Color',
                          'default'=>'#242424',
                           'help' => 'This is the theme border dark version color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                        array(
                          'id'    => 'crete--white-color',
                          'type'  => 'teconce_color',
                          'title' => 'White Color',
                          'default'=>'#ffffff',
                           'help' => 'This is the theme white color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                          array(
                          'id'    => 'crete--light-color',
                          'type'  => 'teconce_color',
                          'title' => 'Light Color',
                          'default'=>'#F6F6F6',
                           'help' => 'This is the theme light color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                        
                         array(
                          'id'    => 'crete--light-bg',
                          'type'  => 'teconce_color',
                          'title' => 'Light Background Color',
                          'default'=>'#FBFAFA',
                           'help' => 'This is the theme light Background color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                        array(
                          'id'    => 'crete--gray-color',
                          'type'  => 'teconce_color',
                          'title' => 'Gray Color',
                          'default'=>'#737373',
                           'help' => 'This is the theme Gray color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                        
                        array(
                          'id'    => 'crete--gray-100',
                          'type'  => 'teconce_color',
                          'title' => 'Gray 100 Color',
                          'default'=>'#F2F1F9',
                           'help' => 'This is the theme gray 100 color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                        array(
                          'id'    => 'crete--gray-200',
                          'type'  => 'teconce_color',
                          'title' => 'Gray 200 Color',
                          'default'=>'#9097A9',
                           'help' => 'This is the theme gray 200 color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                        
                        array(
                          'id'    => 'crete--light-stroke',
                          'type'  => 'teconce_color',
                          'title' => 'Light Stroke Color',
                          'default'=>'#ECEFF2',
                           'help' => 'This is the theme light stroke color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                        
                        array(
                          'id'    => 'crete--black-color',
                          'type'  => 'teconce_color',
                          'title' => 'Black Color',
                          'default'=>'#000000',
                           'help' => 'This is the theme black color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                       
                        array(
                          'id'    => 'crete--black-light',
                          'type'  => 'teconce_color',
                          'title' => 'Black Light Color',
                          'default'=>'#242B3D',
                           'help' => 'This is the theme black light color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                         array(
                          'id'    => 'crete--light-white',
                          'type'  => 'teconce_color',
                          'title' => 'Light White Color',
                          'default'=>'#F7F7F7',
                           'help' => 'This is the theme white color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),
                        
                        
                        array(
                          'id'    => 'crete--sea-color',
                          'type'  => 'teconce_color',
                          'title' => 'Sea Color',
                          'default'=>'#66D5EC',
                           'help' => 'This is the theme sea color',
                            'dependency' => array( 'crete_global_color', '==', 'true' ),
                        ),



        array(
            'id'         => 'crete_magic_cursor',
            'type'       => 'button_set',
            'title'      => 'Cursor Type',
            'options'    => array(
                'standard'  => 'Standard',
                'magic' => 'Magic Cursor',
            ),
            'default'    => 'standard'
        ),
                        
                        
                         
    )
    
  ) );
  

        
         // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'global_style', // The slug id of the parent section
    'title'  => 'Page Builder Style',
    'fields' => array(
      
      
      array(
  'id'            => 'elementor_content',
  'type'          => 'tabbed',
  'title'         => 'Elements Style',
  'tabs'          => array(
      array(
      'title'     => 'Search Style',
      'icon'      => 'creteo-semi-solid cs-orange',
      'fields'    => array(
          
               array(
              'id'    => 'search-overlay',
              'type'  => 'teconce_color',
              'title' => 'Search Overlay Color',
              'default'=>'#e2e0f5',
              'output' => '.crete-ajax-s-offcanvas,#crete-search-box-popup,.crete-ajax-s-offcanvas .crete-search-result',
              'output_mode' => 'background',
              
            ),
            array(
              'id'          => 'ftitle_colose_color',
              'type'        => 'teconce_color',
              'title'       => 'Title color',
              'default'=>'#ffffff',
              'output'      => '.crete-ajax-search-title',
              'output_mode' => 'color' // Supports css properties like ( border-color, color, background-color etc )
            ),
            
            array(
              'id'          => 'search_input',
              'type'        => 'teconce_color',
              'title'       => 'Search Input Background',
              'default'=>'#e2e0f5',
              'output'      => '.crete-ajax-search-bar .search-wrapper input[type="text"],
              .crete-search-style-two .search-wrapper input[type="text"]',
              'output_mode' => 'background' // Supports css properties like ( border-color, color, background-color etc )
            ),
            
             array(
              'id'          => 'search_input_border',
              'type'        => 'teconce_color',
              'title'       => 'Search Input Border Color',
              'default'=>'#e2e0f5',
              'output'      => '.crete-ajax-search-bar .search-wrapper input[type="text"],
              .crete-search-style-two .search-wrapper input[type="text"]',
              'output_mode' => 'border-color' // Supports css properties like ( border-color, color, background-color etc )
            ),
            
            array(
              'id'          => 'search_input_txt',
              'type'        => 'teconce_color',
              'title'       => 'Search Input Text Color',
              'default'=>'#77829D',
              'output'      => '.crete-ajax-search-bar .search-wrapper input[type="text"],
              .crete-search-style-two .search-wrapper input[type="text"]',
              'output_mode' => 'color' // Supports css properties like ( border-color, color, background-color etc )
            ),
            
            array(
              'id'          => 'search_cat_bg',
              'type'        => 'teconce_color',
              'title'       => 'Search Category Panel Background',
              'default'=>'#05A845',
              'output'      => '.crete-ajax-search-bar .nice-select',
              'output_mode' => 'background' // Supports css properties like ( border-color, color, background-color etc )
            ),
             array(
              'id'          => 'search_cat_bar_border',
              'type'        => 'teconce_color',
              'title'       => 'Search Category Panel Border',
              'default'=>'#05A845',
              'output'      => '.crete-ajax-search-bar .nice-select',
              'output_mode' => 'border-color' // Supports css properties like ( border-color, color, background-color etc )
            ),
            
            array(
              'id'          => 'search_cat_bar_text',
              'type'        => 'teconce_color',
              'title'       => 'Search Category Panel Text',
              'default'=>'#ffffff',
              'output'      => '.crete-ajax-search-bar .nice-select',
              'output_mode' => 'color' // Supports css properties like ( border-color, color, background-color etc )
            ),
             array(
              'id'          => 'search_icon_bg_clr',
              'type'        => 'teconce_color',
              'title'       => 'Search Button Background',
              'default'=>'#ffffff',
              'output'      => '.crete-ajax-search-btn,.search-wrapper svg',
              'output_mode' => 'background' // Supports css properties like ( border-color, color, background-color etc )
            ),
            
            array(
              'id'          => 'search_icon_clr',
              'type'        => 'teconce_color',
              'title'       => 'Search Icon Color',
              'default'=>'#222',
              'output'      => '.search-wrapper i,.crete-ajax-search-btn',
              'output_mode' => 'color' // Supports css properties like ( border-color, color, background-color etc )
            ),
            
             array(
              'id'          => 'product_bg_color_src',
              'type'        => 'teconce_color',
              'title'       => 'Search Product Background',
              'default'=>'#fff',
              'output'      => '.crete-search-result ul li a',
              'output_mode' => 'background' // Supports css properties like ( border-color, color, background-color etc )
            ),
            array(
              'id'          => 'product_text_color_src',
              'type'        => 'teconce_color',
              'title'       => 'Search Product Title Color',
              'default'=>'#222',
              'output'      => '.crete-ajax-product-data h3',
              'output_mode' => 'color' // Supports css properties like ( border-color, color, background-color etc )
            ),
            
           
          
          )),
      )),
      
       array(
              'id'       => 'search_product_style',
              'type'     => 'button_set',
              'title'    => 'Search Product Style',
              'options'  => array(
                'list'   => 'List',
                'grid'   => 'Grid',
                
              ),
              'default'  => 'list'
            ),
            
            array(
              'id'          => 'search_product_grid_count',
              'type'        => 'select',
              'title'       => 'Grid Column Count',
              'placeholder' => 'Select an option',
                'dependency' => array( 'search_product_style', '==', 'grid' ),
              'options'     => array(
                '1'  => 'One Column',
                '2'  => 'Two Column',
                '3'  => 'Three Column',
                '4'  => 'Four Column',
                '5'  => 'Five Column',
                '6'  => 'Six Column',
              ),
              'default'     => '6'
            ),
            array(
              'id'       => 'search_category_ds',
              'type'     => 'button_set',
              'title'    => 'Search Category',
              'options'  => array(
                'show'   => 'Show',
                'hide'   => 'Hide',
                
              ),
              'default'  => 'show'
            ),
            
            array(
              'id'       => 'search_style_ds',
              'type'     => 'button_set',
              'title'    => 'Search Style',
              'options'  => array(
                'one'   => 'One',
                'two'   => 'Two',
                
              ),
              'default'  => 'one'
            ),
    
        )
        
        ));
  
  
   // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'global_style', // The slug id of the parent section
    'title'  => 'Global Options',
    'fields' => array(
        array(
          'id'      => 'gloabal_width_1400',
          'type'    => 'slider',
          'title'   => 'Global Container Width (From 1400px)',
          'min'     => 600,
          'max'     => 1600,
          'step'    => 100,
          'unit'    => 'px',
          'default' => 1320,
        ),
        
         array(
          'id'      => 'gloabal_width_1200',
          'type'    => 'slider',
          'title'   => 'Global Container Width (From 1200px)',
          'min'     => 600,
          'max'     => 1400,
          'step'    => 100,
          'unit'    => 'px',
          'default' => 1140,
        ),
        
        array(
  'id'    => 'elementor-width-overwrite',
  'type'  => 'switcher',
  'title' => 'Elementor Container Width Overwrite',
),

array(
          'id'      => 'overwrite-elem-width',
          'type'    => 'slider',
          'title'   => 'Elementor Container Width',
          'min'     => 600,
          'max'     => 1400,
          'step'    => 100,
          'unit'    => 'px',
          'default' => 1140,
          
            'dependency' => array( 'elementor-width-overwrite', '==', 'true' ),
        ),

        )
        
        ));

