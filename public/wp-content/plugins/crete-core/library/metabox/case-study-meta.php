<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'crete_portfolio_meta';

  //
  // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'              => 'Project Options',
    'post_type'          => 'project',
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
    'nav'                => 'normal',
    'theme'              => 'dark',
    'class'              => '',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Project Information',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'client_name',
        'type'  => 'text',
        'title' => 'Client Name',
      ),
      
      array(
          'id'    => 'project_complete_date',
          'type'  => 'date',
          'title' => 'Project Complete Date',
          'settings' => array(
                'dateFormat'      => 'yy-mm-dd',
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
        'id'    => 'client_address',
        'type'  => 'text',
        'title' => 'Address',
      ),
        

    )
  ) );


}
