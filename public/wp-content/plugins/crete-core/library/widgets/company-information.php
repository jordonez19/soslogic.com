<?php if ( ! defined( 'ABSPATH' )  ) { die; }

  CSF::createWidget( 'crete_company_information', array(
    'title'       => 'Crete Company Information',
    'classname'   => 'crete-information',
    'description' => 'Crete info details on sidebar.',
    'fields'      => array(

   
      array(
      'id'      => 'title',
      'type'    => 'text',
      'title'   => 'Title',
    ),
    
    array(
  'id'    => 'company_logo',
  'type'  => 'media',
  'title' => 'Company Logo',
),
    
array(
  'id'      => 'company_details',
  'type'    => 'textarea',
  'title'   => 'Company Details',
  
),

array(
  'id'     => 'social_links',
  'type'   => 'repeater',
  'title'  => 'Social Links',
  'fields' => array(

    array(
      'id'    => 'social_url',
      'type'  => 'text',
      'title' => 'URL'
    ),
    array(
  'id'    => 'social_icon',
  'type'  => 'icon',
  'title' => 'Icon',
),

  ),
),

 
    )
  ) );

  //
  // Front-end display of widget example 1
  // Attention: This function named considering above widget base id.
  //
  if( ! function_exists( 'crete_company_information' ) ) {
    function crete_company_information( $args, $instance ) {
        global $post;
		
	$logo = $instance['company_logo']['url'];
	$desc = $instance['company_details'];
	$social= $instance['social_links'];
	
        
      echo $args['before_widget'];
      
      if ( ! empty( $instance['title'] ) ) { ?>
      <h2 class="widget-title"><?php echo $instance['title'];?></h2>
    <?php  }
?>
      <div class="footer-widget text-widget">
                        <?php if ($logo) { ?>
                            <img src="<?php echo esc_url($logo);?>" alt="logo" class="img-fluid">
                            <?php } ?>
                            <?php if ($desc){ ?>
                            <p class="my-32 text-white"><?php echo $desc;?> </p> 
                            <?php } ?>
                            <?php if ($social) {?>
                            <div class="footer-social">
                                <?php foreach ($social as $sitem){ 
                                $url = $sitem['social_url'];
                                $icon = $sitem['social_icon'];
                                ?>
                                <a href="<?php echo esc_url($url);?>"><i class="<?php echo esc_html($icon);?>"></i></a>
                                <?php } ?>
                                
                            </div>
                            <?php } ?>
                        </div>
    
    
 

 <?php    echo $args['after_widget']; }
  }


