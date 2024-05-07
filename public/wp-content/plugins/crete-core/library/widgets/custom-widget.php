<?php if ( ! defined( 'ABSPATH' )  ) { die; }

  CSF::createWidget( 'crete_custom_block_widget', array(
    'title'       => 'Crete Custom Block Shortcode Widget',
    'classname'   => 'crete-custom-block',
    'description' => 'A Custom Block or shortcode item for sidebar',
    'fields'      => array(

      array(
        'id'      => 'title',
        'type'    => 'text',
        'title'   => 'Title',
      ),

      array(
        'id'      => 'opt-text',
        'type'    => 'text',
        'title'   => 'Your Shortcode',
      ),

    )
  ) );

  //
  // Front-end display of widget example 1
  // Attention: This function named considering above widget base id.
  //
  if( ! function_exists( 'crete_custom_block_widget' ) ) {
    function crete_custom_block_widget( $args, $instance ) {

      echo $args['before_widget'];

      if ( ! empty( $instance['title'] ) ) { ?>
        <h2 class="widget-title"><?php echo $instance['title'];?></h2>
      <?php  }

      // var_dump( $args ); // Widget arguments
      // var_dump( $instance ); // Saved values from database
      // echo $instance['title'];
      // echo $instance['opt-text'];
      $shortcode = $instance['opt-text'];
     echo do_shortcode( $shortcode );

      echo $args['after_widget'];

    }
  }

