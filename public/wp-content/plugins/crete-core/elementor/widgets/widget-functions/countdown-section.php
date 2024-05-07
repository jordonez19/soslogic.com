<?php

function crete_countdown_section_style_1($settings){
    
    $subtitle = $settings['crete_sub_title'];
    $title = $settings['crete_main_title'];
    $stltitle = $settings['crete_style_title'];
    ?>
    
     
        <!--dreamer section start-->
    <section class="dreamer-section pt-100 pb-100 overflow-hidden position-relative z-1">
       
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="text-center mb-5">
                        <?php if($subtitle){ ?>
                        <span class="cr-subtitle position-relative primary-text-color fw-semibold wow fadeInUp d-inline-block"><?php echo esc_html($subtitle);?></span>
                        <?php } ?>
                        <?php if ($title){ ?>
                        <h2 class="mt-4 wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($title);?> <?php if ($stltitle){ ?><span class="primary-text-color primary-bg-light px-2"><?php echo $stltitle;?></span><?php } ?></h2>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <?php if ( $settings['list'] ) { ?>
                <?php foreach (  $settings['list'] as $item ) {
                    $count = $item['list_count'];
                    $suffix = $item['list_count_suf'];
                    $desc = $item['list_title'];
                    $seacolor = $item['sea_color'];
                    $pclass ="primary";
                    if ($seacolor=="yes"){
                        $pclass ="sea-color";
                    }
                   
                ?>
                <div class="col-xl-4 col-md-6">
                    <div class="cr-counter-column text-center <?php echo $pclass;?> wow fadeInUp">
                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center">
                            <?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </span>
                        <div class="cr-counter-circle">
                            <h2 class="mb-3"><span class="counter"><?php echo $count;?></span><?php echo $suffix;?></h2>
                            <p class="mb-0"><?php echo $desc;?></p>
                        </div>
                    </div>
                </div>
                <?php } } ?>
           
            </div>
        </div>
    </section>
    
    
    
<?php 
}

function crete_countdown_section_style_2($settings){
    
    $phone = $settings['crete_phone_number'];
    $titlef = $settings['crete_phone_number_title'];
    
    ?>
    
    <div class="csd-count-box">
                    <div class="row align-items-center g-5">
                        <?php if ($phone){ ?>
                        <div class="col-xl-5">
                            <div class="hm4-telbox d-flex align-items-center flex-wrap flex-xxl-nowrap gap-4">
                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle bg-white flex-shrink-0">
                                    <i class="fas fa-phone"></i>
                                </span>
                                <div>
                                    <a href="tel:<?php echo $phone;?>"><h5><?php echo $phone; ?></h5></a>
                                    <span class="fs-sm fw-bold text-white text-uppercase"><?php echo $titlef;?></span>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-xl-7">
                            <div class="ps-xxl-100">
                                <div class="row g-4">
                                    
                                    <?php if ( $settings['list'] ) { ?>
                <?php foreach (  $settings['list'] as $item ) {
                    $count = $item['list_count'];
                    $suffix = $item['list_count_suf'];
                    $desc = $item['list_title'];
                    $seacolor = $item['sea_color'];
                    $pclass ="primary";
                    if ($seacolor=="yes"){
                        $pclass ="sea-color";
                    }
                   
                ?>
                                    <div class="col-lg-4 col-md-6 col-sm-4">
                                        <div class="hm4-counter-column text-center text-xl-start">
                                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle">
                                                <?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                            </span>
                                            <h4 class="mb-3 mt-4 text-white"><span class="counter"><?php echo $count;?></span></h4>
                                            <span class="fs-sm text-white text-uppercase"><?php echo $desc;?></span>
                                        </div>
                                    </div>
                                   
                                   <?php } } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
    <?php
    
}