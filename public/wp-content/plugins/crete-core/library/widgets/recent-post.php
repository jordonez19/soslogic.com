<?php 
if( class_exists( 'CSF' ) ) {

  CSF::createWidget( 'crete_post_widget', array(
    'title'       => 'Crete Post',
    'classname'   => 'crete-post',
    'description' => 'Crete post Widget to show blog post on sidebar.',
    'fields'      => array(

   
      array(
      'id'      => 'title',
      'type'    => 'text',
      'title'   => 'Title',
    ),
    
     array(
      'id'      => 'post_count',
      'type'    => 'number',
      'title'   => 'Post Count',
    ),

   array(
  'id'          => 'order',
  'type'        => 'select',
  'title'       => 'Select',
  'placeholder' => 'Select an option',
  'options'     => array(
    'asc' => 'Ascending',
    'desc' => 'Descending'
  ),
  'default'     => 'desc'
),

    )
  ) );

  //
  // Front-end display of widget example 1
  // Attention: This function named considering above widget base id.
  //
  if( ! function_exists( 'crete_post_widget' ) ) {
    function crete_post_widget( $args, $instance ) {

      echo $args['before_widget'];
      
      $post_count = $instance['post_count'] ;
      $order = $instance['order'] ;
        echo '<div class="crete-sidebar-post">';
      if ( ! empty( $instance['title'] ) ) {
        echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
      }


        $postargs = array(
        'post_type' => 'post',
      'posts_per_page' => $post_count,
      'order' => (string) trim($order),
      );
      
       $the_query = new \WP_Query($postargs);
       echo '<ul class="sidebar-post-list">';
        while ($the_query -> have_posts()) : $the_query -> the_post();
         crete_post_style_list_sidebar();
       endwhile; wp_reset_postdata();
      echo "</ul>";
     
     
        

      echo '</div>';
      
     echo $args['after_widget'];

    }
  }
  
}
 


