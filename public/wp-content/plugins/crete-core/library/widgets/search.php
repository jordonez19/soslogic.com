<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Create a widget 1
  //
  CSF::createWidget( 'crete_search_default', array(
    'title'       => 'Crete Search',
    'classname'   => 'crete-search-default',
    'description' => 'Add search form for blog',
    'fields'      => array(

      array(
        'id'      => 'title',
        'type'    => 'text',
        'title'   => 'Title',
      ),



    )
  ) );

  //
  // Front-end display of widget example 1
  // Attention: This function named considering above widget base id.
  //
  if( ! function_exists( 'crete_search_default' ) ) {
    function crete_search_default( $args, $instance ) {

      echo $args['before_widget'];

      if ( ! empty( $instance['title'] ) ) {
        echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
      }

      
      
       $crete_options = get_option( 'crete_options' );
       $placeholder = !empty($crete_options['search_placeholder_text'] )? $crete_options['search_placeholder_text'] : 'Enter Keyword';
      ?>

        <div class="sidebar--search--blog crete-site-search-wd search-widget">
            <form class="d-flex align-items-center gap-0" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php $searchresults = get_search_query(); ?>
                <input type="text" placeholder="<?php echo esc_html($placeholder);?>" value="<?php echo esc_html($searchresults); ?>" name="s" id="search">
                <button type="submit" class="submit-btn template-btn primary-btn"><i class="fas fa-magnifying-glass"></i></button>
                <input type="hidden" name="post_type" value="post" />
            </form>


            <div class="clearfix"></div>
        </div>

      <?php echo $args['after_widget'];

    }
  }

}
