<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Create a widget 1
  //
  CSF::createWidget( 'crete_contact_widget_df', array(
    'title'       => 'Crete Contact Widget',
    'classname'   => 'crete_contact_widget_df',
    'description' => 'Contact Information',
    'fields'      => array(

      array(
        'id'      => 'title',
        'type'    => 'text',
        'title'   => 'Title',
      ),

      array(
        'id'      => 'sub_title',
        'type'    => 'text',
        'title'   => 'Subtitle',
        'default' => 'Need Any Help, Call Us 24/7 For Support',
      ),
      
       array(
        'id'      => 'phone_number',
        'type'    => 'text',
        'title'   => 'Phone Number',
        'default' => '+286 985 2156',
      ),
      
      array(
        'id'      => 'email_address',
        'type'    => 'text',
        'title'   => 'Email Address',
        'default' => 'info@example.com',
      ),
      
        array(
        'id'      => 'office_address',
        'type'    => 'text',
        'title'   => 'Office Address',
        'default' => '125 Berlin, Germany',
      ),

     
    )
  ) );

  //
  // Front-end display of widget example 1
  // Attention: This function named considering above widget base id.
  //
  if( ! function_exists( 'crete_contact_widget_df' ) ) {
    function crete_contact_widget_df( $args, $instance ) {

      echo $args['before_widget'];
        $phone = $instance['phone_number'];
        $email = $instance['email_address'];
         $address = $instance['office_address'];
    
      ?>
      <div class="contact-widget">
                            <h6 class="mb-2 text-white"><?php echo $instance['title'];?></h6>
                            
                            <p class="mb-32 text-white"><?php echo $instance['sub_title'];?></p>
                             <?php if ($phone){ ?>
                            <div class="sidebar-icon-box">
                                <span class="icon d-flex align-items-center justify-content-center rounded-circle">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                               
                                <div>
                                    <span class="fs-sm fw-semibold subtitle">Call Us</span>
                                    <a href="tel:<?php echo $phone;?>"><h6 class="mb-0 text-white fs-18"><?php echo $phone;?></h6></a>
                                </div>
                                
                            </div>
                            <?php } ?>
                             <?php if ($email){ ?>
                            <div class="sidebar-icon-box mt-20">
                                <span class="icon d-flex align-items-center justify-content-center rounded-circle">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <div>
                                    <span class="fs-sm fw-semibold subtitle">Mail Us</span>
                                    <a href="mailto:<?php echo $email;?>"><h6 class="mb-0 text-white fs-18"><?php echo $email; ?></h6></a>
                                </div>
                            </div>
                            <?php } ?>
                             <?php if ($address){ ?>
                            <div class="sidebar-icon-box mt-20">
                                <span class="icon d-flex align-items-center justify-content-center rounded-circle">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <div>
                                    <span class="fs-sm fw-semibold subtitle">Office Address</span>
                                   <h6 class="mb-0 text-white fs-18"><?php echo $address;?></h6>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
      <?php

      echo $args['after_widget'];

    }
  }

}
