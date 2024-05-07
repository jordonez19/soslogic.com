<?php

function crete_brands_section_style_1($settings){
    
    $subtitle = $settings['crete_sub_title'];
    $title = $settings['crete_main_title'];
    $stltitle = $settings['crete_style_title'];
    ?>
    <div class="position-relative">
     <span class="layer-blur position-absolute z--1"></span>
  <!--brand section start-->
        <div class="crb-brand-section ptb-100">
            <div class="container">
                <div class="crb-brand-area bg-white theme-shadow rounded-5">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="section-title">
                               
                                
                                  <?php if($subtitle){ ?>
                                <span class="cr-subtitle position-relative primary-text-color fw-semibold wow fadeInUp d-inline-block"><?php echo esc_html($subtitle);?></span>
                                <?php } ?>
                        <?php if ($title){ ?>
                        <h2 class="mt-4 mb-0 wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($title);?> <?php if ($stltitle){ ?><span class="primary-text-color primary-bg-light"><?php echo $stltitle;?></span><?php } ?></h2>
                        <?php } ?>
                        
                            </div>
                        </div>
                    </div>
                    <div class="crb-brand-slider slider-spacing mt-5">
                        <?php 	if ( $settings['list'] ) { 
                        foreach (  $settings['list'] as $item ) {
                        ?>
                        <div class="single-item">
                            <img src="<?php echo $item['image']['url']; ?>" alt="brand" class="img-fluid">
                        </div>
                        <?php } } ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <!--brand section end-->
    </div>
    
    
<?php 
}
function crete_brands_section_style_2($settings){

    $subtitle = $settings['crete_sub_title'];
    $title = $settings['crete_main_title'];
    $stltitle = $settings['crete_style_title'];
    ?>

    <!--brand & service start-->
    <section class="cr2-brand-n-service bg-light-white pt-100 position-relative z-1 overflow-hidden">
        <span class="circle-shape-1 rounded-circle position-absolute z--1"></span>
        <span class="circle-shape-2 rounded-circle position-absolute z--1"></span>
        <div class="cr2-brand-section pb-100">
            <div class="container">
                <div class="cr2-brand-slider">
    <?php 	if ( $settings['list'] ) {
        foreach (  $settings['list'] as $item ) {
            ?>
                    <div class="brand-image">
                        <img src="<?php echo $item['image']['url']; ?>" alt="brand" class="img-fluid">
                    </div>
        <?php } } ?>
                    

                </div>
            </div>
        </div>
    </section>
    <?php
}
