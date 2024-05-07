<?php
// Create a top-tab
  CSF::createSection( $prefix, array(
    'id'    => 'extras', // Set a unique slug-like ID
    'title' => 'Extras',
    'icon'     => 'fa fa-tasks',
  ) );
 // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'extras', // The slug id of the parent section
    'title'  => 'Custom Sidebar',
    'fields' => array(
        
          // start fields
          array(
            'id'              => 'custom_sidebar',
            'title'           => 'Sidebars',
            'desc'            => 'Go to Appearance -> Widgets after create sidebars',
            'type'            => 'group',
            'fields'          => array(
              array(
                'id'          => 'sidebar_name',
                'type'        => 'text',
                'title'       => 'Sidebar Name'
              ),
              array(
                'id'          => 'sidebar_desc',
                'type'        => 'text',
                'title'       => 'Custom Description',
              )
            ),
            'accordion'       => true,
            'button_title'    => 'Add New Sidebar',
            'accordion_title' =>'New Sidebar', 
          ),
          
                
          
        )
        
        ));
        
        
     
        
        
       // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'extras', // The slug id of the parent section
    'title'  => 'Custom Typography',
    'fields' => array( 
       
          // Custom Fonts Upload
      array(
        'id'                 => 'font_family',
        'type'               => 'group',
        'title'              => esc_html__('Upload Custom Fonts', 'crete-core'),
        'button_title'       => esc_html__('Add New Custom Font', 'crete-core'),
        'accordion_title'    => esc_html__('Adding New Font', 'crete-core'),
        'accordion'          => true,
        'desc'               => esc_html__('It is simple. Only add your custom fonts and click to save. After you can check "Font Family" selector. Do not forget to Save!', 'crete-core'),
        'fields'             => array(

          array(
            'id'             => 'name',
            'type'           => 'text',
            'title'          => esc_html__('Font-Family Name', 'crete-core'),
            'attributes'     => array(
              'placeholder'  => esc_html__('for eg. Arial', 'crete-core')
            ),
          ),

          array(
            'id'             => 'ttf',
            'type'           => 'upload',
            'title'          => wp_kses(__('Upload .ttf <small><i>(optional)</i></small>', 'crete-core'), array( 'small' => array(), 'i' => array() )),
            'settings'       => array(
              'upload_type'  => 'font',
              'insert_title' => esc_html__('Use this Font-Format', 'crete-core'),
              'button_title' => wp_kses(__('Upload <i>.ttf</i>', 'crete-core'), array( 'i' => array() )),
            ),
          ),

          array(
            'id'             => 'eot',
            'type'           => 'upload',
            'title'          => wp_kses(__('Upload .eot <small><i>(optional)</i></small>', 'crete-core'), array( 'small' => array(), 'i' => array() )),
            'settings'       => array(
              'upload_type'  => 'font',
              'insert_title' => esc_html__('Use this Font-Format', 'crete-core'),
              'button_title' => wp_kses(__('Upload <i>.eot</i>', 'crete-core'), array( 'i' => array() )),
            ),
          ),

          array(
            'id'             => 'svg',
            'type'           => 'upload',
            'title'          => wp_kses(__('Upload .svg <small><i>(optional)</i></small>', 'crete-core'), array( 'small' => array(), 'i' => array() )),
            'settings'       => array(
              'upload_type'  => 'font',
              'insert_title' => esc_html__('Use this Font-Format', 'crete-core'),
              'button_title' => wp_kses(__('Upload <i>.svg</i>', 'crete-core'), array( 'i' => array() )),
            ),
          ),

          array(
            'id'             => 'otf',
            'type'           => 'upload',
            'title'          => wp_kses(__('Upload .otf <small><i>(optional)</i></small>', 'crete-core'), array( 'small' => array(), 'i' => array() )),
            'settings'       => array(
              'upload_type'  => 'font',
              'insert_title' => esc_html__('Use this Font-Format', 'crete-core'),
              'button_title' => wp_kses(__('Upload <i>.otf</i>', 'crete-core'), array( 'i' => array() )),
            ),
          ),

          array(
            'id'             => 'woff',
            'type'           => 'upload',
            'title'          => wp_kses(__('Upload .woff <small><i>(optional)</i></small>', 'crete-core'), array( 'small' => array(), 'i' => array() )),
            'settings'       => array(
              'upload_type'  => 'font',
              'insert_title' => esc_html__('Use this Font-Format', 'crete-core'),
              'button_title' =>wp_kses(__('Upload <i>.woff</i>', 'crete-core'), array( 'i' => array() )),
            ),
          ),

          array(
            'id'             => 'css',
            'type'           => 'textarea',
            'title'          => wp_kses(__('Extra CSS Style <small><i>(optional)</i></small>', 'crete-core'), array( 'small' => array(), 'i' => array() )),
            'attributes'     => array(
              'placeholder'  => esc_html__('for eg. font-weight: normal;', 'crete-core'),
            ),
          ),

        ),
      ),
      // End All field

        )
        ));
        
        
         // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'extras', // The slug id of the parent section
    'title'  => 'Maintenance Mode',
    'fields' => array(
        
         array(
  'id'      => 'maintenance_mode',
  'type'    => 'switcher',
  'title'   => 'Mainteance Mode/ Coming Soon',
  'label'   => 'Do you want activate it ?',
  'default' => false
),

array(
  'id'    => 'maintenance_logo',
  'type'  => 'media',
  'title' => 'Logo',
),
array(
  'id'    => 'mainteance_bg',
  'type'  => 'background',
  'title' => 'Background',
  'output' => '.crete-mainteannce-box',
),

     array(
  'id'      => 'maintenance_mode_overlay',
  'type'    => 'switcher',
  'title'   => 'Overlay Enable',
  'label'   => 'Do you want activate it ?',
  'default' => false
),
          
          array(
  'id'    => 'm_overlay_color',
  'type'  => 'teconce_gradient',
  'title' => 'Overlay Color',
  'dependency' => array( 'maintenance_mode_overlay', '==', 'true' ),
  'output' => '.crete-mainteannce-box.moverlay:before',
  'output_mode' => 'background', 
),

         array(
  'id'    => 'm_inner_box_color',
  'type'  => 'teconce_gradient',
  'title' => 'Inner Box Background Color',
  'output' => '.crete-maintenance-style1 .mm-main-box',
  'default' => '#ffffff',
  'output_mode' => 'background', 
),
array(
  'id'      => 'maintenance_title',
  'type'    => 'text',
  'title'   => 'Title',
  'default' => 'We Are Launching Soon'
),

array(
  'id'       => 'man_time_select',
  'type'     => 'date',
  'title'    => 'Time Select',
  'settings' => array(
    'dateFormat'      => 'mm/dd/yy',
    'changeMonth'     => true,
    'changeYear'      => true,
    'showWeek'        => true,
    'showButtonPanel' => true,
    'weekHeader'      => 'Week',
    'monthNamesShort' => array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ),
    'dayNamesMin'     => array( 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ),
  )
),

 array(
  'id'    => 'm_counter_bg_color',
  'type'  => 'teconce_color',
  'title' => 'Counter Background Color',
  'default' => '#4CD080',
  'output' => '.crete-maintenance-style1 .crete-count-item',
  'output_mode' => 'background', 
  
),

array(
  'id'    => 'm_counter_number_color',
  'type'  => 'teconce_color',
  'title' => 'Counter Number Color',
  'default' => '#ffffff',
  'output' => '.emerce-count-value',
  'output_mode' => 'color', 
),
array(
  'id'    => 'm_counter_lable_color',
  'type'  => 'teconce_color',
  'title' => 'Counter Label Color',
  'default' => '#ffffff',
  'output' => '.crete-maintenance-style1 .emerce-count-value .label',
  'output_mode' => 'color', 
),

array(
  'id'    => 'maintenance_shortcode',
  'type'  => 'wp_editor',
  'title' => 'Subscription Form Shortcode',
),

array(
  'id'          => 'maintenance_style',
  'type'        => 'select',
  'title'       => 'Style',
  'placeholder' => 'Select an option',
  'options'     => array(
    'style1'  => 'Style 1',
    'style2'  => 'Style 2',
    'style3'  => 'Style 3',
  ),
  'default'     => 'style1'
),

                
          
        )
        
        ));
        
        
 CSF::createSection( $prefix, array(
    'parent' => 'extras', // The slug id of the parent section
    'title'  => 'Translations',
    'fields' => array(
 
 
 
 array(
  'id'      => 'search_placeholder_text',
  'type'    => 'text',
  'title'   => 'Search Placeholder Text',
  'default' => 'Enter Keyword'
),

 array(
  'id'      => 'single_blog_by',
  'type'    => 'text',
  'title'   => 'Blog Meta Text',
  'default' => 'by'
),


 array(
  'id'      => 'single_blog_share',
  'type'    => 'text',
  'title'   => 'Blog Share Text',
  'default' => 'Share'
),


 array(
  'id'      => 'blog_archive_read_more',
  'type'    => 'text',
  'title'   => 'Blog Archive Read More Button',
  'default' => 'Read More'
),



        )
        ));       
        
        
        
        
CSF::createSection( $prefix, array(
    'parent' => 'extras', // The slug id of the parent section
    'title'  => 'Export / Import',
    'fields' => array(
        array(
  'type' => 'backup',
),
        )
        ));
        