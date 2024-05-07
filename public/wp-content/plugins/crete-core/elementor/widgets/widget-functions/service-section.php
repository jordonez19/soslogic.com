<?php

function crete_service_grid($settings){
    $shape =  $settings['circle_shape_enable'];
    $anim = $settings['service_anim'];
     $animclass="";
    if ($anim=="yes"){
        $animclass="wow fadeInUp";
    }
    ?>
    <!--service section start-->
    <section class="service-section ptb-100 position-relative z-1 overflow-hidden dark-bg-color">
        <?php if ($shape=="yes"){ ?>
        <span class="circle-shape-1 position-absolute z--1"></span>
        <span class="circle-shape-2 position-absolute z--1"></span>
        <?php } ?>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center">
                        <?php if (!empty($settings['crete_searvice_top_sub_text'])) { ?>
                            <span class="cr-subtitle text-white fw-semibold position-relative d-inline-block wow fadeInUp"><?php echo $settings['crete_searvice_top_sub_text']; ?></span>
                        <?php } ?>
                        <?php if (!empty($settings['crete_searvice_top_title_text'])) { ?>
                            <h2 class="text-white mt-3 mb-4 wow fadeInUp crete_searvice_top_title_text"
                                data-wow-delay="0.2s"><?php echo $settings['crete_searvice_top_title_text']; ?></h2>

                        <?php } ?>
                        <?php if (!empty($settings['crete_searvice_top_decription_text'])) { ?>
                            <p class="mb-0 text-gray fw-medium wow fadeInUp lead crete_searvice_top_decription_text"
                               data-wow-delay="0.3s"><?php echo $settings['crete_searvice_top_decription_text']; ?></p>

                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4 mt-60">
                <?php
                if ($settings['crete_main_searvice_section']) {

                    foreach ($settings['crete_main_searvice_section'] as $item) {
                        ?>

                        <div class="col-md-6">
                            <div class="d-flex gap-4 service-card bg-white rounded-3 <?php echo $animclass; ?>">
                        <span class="icon-wrapper flex-shrink-0">
                            <img src="<?php echo $item['crete_main_searvice_image']['url']; ?>" alt="icon" class="img-fluid crete_main_searvice_image">
                        </span>
                                <div>
                                    <h6 class="mb-4"><?php echo $item['crete_main_searvice_title']; ?></h6>
                                    <p class="mb-32 fw-medium"><?php echo $item['crete_main_searvice_decription']; ?></p>
                                    <a href="<?php echo esc_url($item['crete_main_searvice_link']['url']); ?>"
                                       class="explore-btn">
                                        <?php echo $item['crete_main_searvice_link_title']; ?>
                                        <span class="ms-2">
                                    <?php \Elementor\Icons_Manager::render_icon($item['crete_main_searvice_button_icon'], ['aria-hidden' => 'true']); ?>
                                </span>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <?php
                    }

                }
                ?>

            </div>
        </div>
    </section>
    <!--service section end-->
    <?php
}
function crete_service_grid_two($settings){
    $shape =  $settings['circle_shape_enable'];
    $anim = $settings['service_anim'];
     $animclass="";
    if ($anim=="yes"){
        $animclass="wow fadeInUp";
    }
    ?>
       <!--service section start-->
    <section class="service-section ptb-100 bg-light-white">
        <div class="container">
            <div class="row justify-content-center g-4">
                 <?php
                if ($settings['crete_main_searvice_section']) {

                    foreach ($settings['crete_main_searvice_section'] as $item) {
                        ?>
                <div class="col-lg-4 col-md-6">
                    <div class="hm2-service-box text-center text-lg-start <?php echo $animclass; ?>">
                        <span class="icon-wrapper"> 
                             <img src="<?php echo $item['crete_main_searvice_image']['url']; ?>" alt="icon" class="img-fluid crete_main_searvice_image">
                        </span>
                        <h6 class="mt-32"><?php echo $item['crete_main_searvice_title']; ?></h6>
                        <p class="mb-32 mt-4 fw-medium"><?php echo $item['crete_main_searvice_decription']; ?></p>
                        <a href="<?php echo esc_url($item['crete_main_searvice_link']['url']); ?>" class="explore-btn">
                            <?php echo $item['crete_main_searvice_link_title']; ?>
                            <span class="ms-2">
                                <i class="fa-solid fa-arrow-right"></i> 
                            </span>
                        </a>
                    </div>
                </div>
          
             <?php
                    }

                }
                ?>
               
                
            </div>
        </div>
    </section>
    <!--service section end-->
    <?php
}
function crete_service_grid_three($settings){
    $shape =  $settings['circle_shape_enable'];
    $anim = $settings['service_anim'];
     
    ?>
      <div class="row g-4 mt-60">
          <?php
                if ($settings['crete_main_searvice_section']) {

                    foreach ($settings['crete_main_searvice_section'] as $item) {
                        ?>
                                <div class="col-xxl-4 col-lg-6">
                                    <div class="hm5-service-card service-card">
                                        <span class="fs-sm fw-bold text-white text-uppercase d-block mb-5"><?php echo $item['crete_main_sextra_title']; ?></span>
                                        <span class="icon-wrapper">
                                            <img src="<?php echo $item['crete_main_searvice_image']['url']; ?>" alt="icon" class="img-fluid crete_main_searvice_image">
                                        </span>
                                        <div class="mt-40">
                                            <h6 class="mb-4 text-white"><?php echo $item['crete_main_searvice_title']; ?></h6>
                                            <p class="mb-32 fw-medium"><?php echo $item['crete_main_searvice_decription']; ?></p>
                                            <a href="<?php echo esc_url($item['crete_main_searvice_link']['url']); ?>" class="explore-btn">
                                                <?php echo $item['crete_main_searvice_link_title']; ?>
                                                <span class="ms-2">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.25 1.21875L13.75 6.46875C13.9062 6.625 14 6.8125 14 7.03125C14 7.21875 13.9062 7.40625 13.75 7.5625L8.25 12.8125C7.96875 13.0938 7.46875 13.0938 7.1875 12.7812C6.90625 12.5 6.90625 12 7.21875 11.7188L11.375 7.78125H0.75C0.3125 7.78125 0 7.4375 0 7.03125C0 6.59375 0.3125 6.28125 0.75 6.28125H11.375L7.21875 2.3125C6.90625 2.03125 6.90625 1.53125 7.1875 1.25C7.46875 0.9375 7.9375 0.9375 8.25 1.21875Z" fill="#1F1F1F"/>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php } } ?>
            </div>
    <!--service section end-->
    <?php
}
function crete_service_slider($settings){
    $vector = $settings['service_vector']['url'];
    $shape =  $settings['circle_shape_enable'];
    ?>
    <!--brand & service start-->
    <section class="service-section cr2-brand-n-service bg-light-white position-relative z-1 overflow-hidden">
        <?php if( $shape == 'yes'){ ?>
            <span class="circle-shape-1 rounded-circle position-absolute z--1"></span>
        <span class="circle-shape-2 rounded-circle position-absolute z--1"></span>
       <?php }?>

        <?php if ($vector){?>
                <img src="<?php echo esc_url($vector);?>" class="position-absolute net-vector top-0 end-0 z--1 w-100" alt="vector">
                <?php } ?>
        <div class="hm2-service-section pb-100 overflow-hidden">

            <div class="container pt-100 position-relative z-1">

                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="text-center">
                            <span class="cr-subtitle position-relative primary-text-color fw-semibold wow fadeInUp d-inline-block"><?php echo $settings['crete_searvice_top_sub_text']; ?></span>
                            <h2 class="mb-0 mt-4 wow fadeInUp crete_searvice_top_title_text"><?php echo $settings['crete_searvice_top_title_text']; ?> <span class="primary-bg-light primary-text-color px-2"><?php echo $settings['crete_searvice_top_title_style_text']; ?></span></h2>
                        </div>
                    </div>
                </div>
                <div class="hm2-service-slider slider-spacing mt-60">
                <?php
                if ($settings['crete_main_searvice_section']) {

                foreach ($settings['crete_main_searvice_section'] as $item) {
                ?>

                        <div class="hm2-service-box">
                        <span class="icon-wrapper">
                            <img src="<?php echo $item['crete_main_searvice_image']['url']; ?>" alt="icon" class="img-fluid">
                        </span>
                            <h6 class="mt-32"><?php echo $item['crete_main_searvice_title']; ?></h6>
                            <p class="mb-32 mt-4 fw-medium"><?php echo $item['crete_main_searvice_decription']; ?></p>
                            <a href="<?php echo esc_url($item['crete_main_searvice_link']['url']); ?> " class="explore-btn">
                                <?php echo $item['crete_main_searvice_link_title']; ?>
                                <span class="ms-2">
                               <?php \Elementor\Icons_Manager::render_icon($item['crete_main_searvice_button_icon'], ['aria-hidden' => 'true']); ?>
                            </span>
                            </a>
                        </div>


                <?php
                }}

                ?>
                </div>
            </div>
        </div>
    </section>
    <!--brand & service end-->
    <?php
}