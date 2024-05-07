<?php

function crete_hero_style_1($settings) {
    ?>
    <!--hero section start-->
    <div class="hero-section position-relative z-1 overflow-hidden" data-background="<?php echo $settings['section_bg_img']['url']; ?>">
        <span class="circle-shape-1 position-absolute z--1"></span>
        <span class="circle-shape-2 position-absolute z--1"></span>
        <span class="circle-shape-3 position-absolute z--1" data-parallax='{"y": 40}'></span>
        <span class="circle-shape-4 position-absolute z--1" data-parallax='{"y": 80}'></span>
        <span class="circle-shape-5 position-absolute z--1" data-parallax='{"y": 100}'></span>

        <?php if (!empty($settings['shape_img_1']['url'])) { ?>
            <img src="<?php echo $settings['shape_img_1']['url']; ?>" alt="bulb" class="position-absolute bulb-shape z--1">
        <?php } ?>

        <?php if (!empty($settings['shape_img_2']['url'])) { ?>
            <img src="<?php echo $settings['shape_img_2']['url']; ?>" alt="bulb" class="position-absolute percent-shape z--1" data-parallax='{"y": 120}'>
        <?php } ?>

        <div class="container custom_container_width">
            <div class="row g-4 align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="hero-content-left">

                        <?php if (!empty($settings['sub_heading'])) { ?>
                            <span class="cr-subtitle position-relative text-white wow fadeInUp d-inline-block"><?php echo $settings['sub_heading']; ?></span>
                        <?php } ?>

                        <?php if (!empty($settings['heading'])) { ?>
                            <h1 class="display-2 mt-4 mb-32 fw-bold wow fadeInUp" data-wow-delay="0.2s"><?php echo $settings['heading']; ?></h1>
                        <?php } ?>

                        <?php if (!empty($settings['info'])) { ?>
                            <p class="mb-60 text-white lead fw-medium wow fadeInUp crete__hero_style_one" data-wow-delay="0.3s"><?php echo $settings['info']; ?></p>
                        <?php } ?>

                        <div class="d-flex align-items-center gap-4 flex-wrap">

                            <?php if (!empty($settings['button_text_1'])) { ?>
                                <a href="<?php echo $settings['button_link_1']['url']; ?>" class="template-btn white-btn wow fadeInUp" data-wow-delay="0.4s"><?php echo $settings['button_text_1']; ?></a>
                            <?php } ?>

                            <?php if (!empty($settings['button_text_2'])) { ?>
                                <a href="<?php echo $settings['button_link_2']['url']; ?>" class="template-btn primary-outline wow fadeInUp" data-wow-delay="0.5s">
                                    <?php echo $settings['button_text_2']; ?>
                                    <span class="ms-2">
                                            <?php \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']); ?>
                                    </span>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php if (!empty($settings['banner_main_img_mobile']['url'])) { ?>
                    <div class="col-lg-5 d-xl-none">
                        <img src="<?php echo $settings['banner_main_img_mobile']['url']; ?>" alt="hero" class="img-fluid">
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php if (!empty($settings['banner_main_img']['url'])) { ?>
            <img src="<?php echo $settings['banner_main_img']['url']; ?>" alt="hero" class="img-fluid hero-image">
        <?php } ?>
    </div>
    <!--hero section end-->
    <?php
}


function crete_hero_style_2($settings) {
    ?>
    <!--hero section start-->
    <section class="hm2-hero-section position-relative z-1 overflow-hidden">
        <?php if (!empty($settings['shape_img_1']['url'])) { ?>
            <img src="<?php echo $settings['shape_img_1']['url']; ?>" alt="hero shape" class="hero-shape position-absolute z--1 end-0 top-0">
        <?php } ?>

        <?php if (!empty($settings['shape_img_7']['url'])) { ?>
            <img src="<?php echo $settings['shape_img_7']['url']; ?>" alt="layer blur" class="position-absolute start-0 top-0 z--1">
        <?php } ?>

        <span class="circle-shape-1 position-absolute z--1" data-parallax='{"y": 60}'></span>
        <span class="circle-shape-2 position-absolute z--1" data-parallax='{"x": 80}'></span>
        <span class="circle-shape-3 position-absolute z--1" data-parallax='{"y": -60}'></span>
        <div class="container custom_container_width">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 col-md-10">
                    <div class="hm2-hero-content">

                        <?php if (!empty($settings['heading'])) { ?>
                            <h1 class="display-2 fw-bold mb-4 wow fadeInUp">
                                <?php echo $settings['heading']; ?>
                            </h1>
                        <?php } ?>

                        <?php if (!empty($settings['info'])) { ?>
                            <p class="mb-5 lead fw-medium wow fadeInUp" data-wow-delay="0.2s">
                                <?php echo $settings['info']; ?>
                            </p>
                        <?php } ?>

                        <div class="d-flex align-items-center gap-4 flex-wrap">

                            <?php if (!empty($settings['button_text_1'])) { ?>
                                <a href="<?php echo $settings['button_link_1']['url']; ?>" class="template-btn primary-btn wow fadeInUp" data-wow-delay="0.3s"><?php echo $settings['button_text_1']; ?></a>
                            <?php } ?>

                            <?php if (!empty($settings['button_text_2'])) { ?>
                                <a href="<?php echo $settings['button_link_2']['url']; ?>" class="template-btn outline-secondary wow fadeInUp crete__hero_two_button_two" data-wow-delay="0.4s">
                                    <?php echo $settings['button_text_2']; ?>
                                    <span class="ms-2">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']); ?>
                                </span>
                                </a>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <?php if (!empty($settings['banner_main_img']['url'])) { ?>
                        <div class="hero-image crete__hero_two_main_img">
                            <img src="<?php echo $settings['banner_main_img']['url']; ?>" alt="hero man" class="hero-man">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->
    <?php
}


function crete_hero_style_3($settings) {
    ?>
    <!--hero section start-->
    <section class="hm3-hero-section bg-light-white position-relative overflow-hidden" data-background="<?php echo $settings['section_bg_img']['url']; ?>">

        <?php if (!empty($settings['shape_img_1']['url'])) { ?>
            <img src="<?php echo $settings['shape_img_1']['url']; ?>" alt="circle" class="position-absolute hero-shape-1">
        <?php } ?>

        <?php if (!empty($settings['shape_img_2']['url'])) { ?>
            <img src="<?php echo $settings['shape_img_2']['url']; ?>" alt="white line" class="position-absolute line-white z--1">
        <?php } ?>

        <?php if (!empty($settings['text_shape'])) { ?>
            <span class="text-shape position-absolute z--1"><?php echo $settings['text_shape']; ?></span>
        <?php } ?>

        <div class="container custom_container_width">
            <div class="row g-4">
                <div class="col-xl-6 col-lg-6 col-md-9 align-self-center">
                    <div class="hero-content">

                        <?php if (!empty($settings['heading'])) { ?>
                            <h1 class="display-2 mb-4 fw-bold wow fadeInUp crete__hero_style_three_heading"><?php echo $settings['heading']; ?></h1>
                        <?php } ?>

                        <?php if (!empty($settings['info'])) { ?>
                            <p class="mb-32 wow fadeInUp crete__hero_style_three_descripiton" data-wow-delay="0.2s"><?php echo $settings['info']; ?></p>
                        <?php } ?>

                        <?php if (!empty($settings['button_text_1'])) { ?>
                            <a href="<?php echo $settings['button_link_1']['url']; ?>" class="template-btn primary-btn rounded-pill wow fadeInUp crete__hero_style_three_button" data-wow-delay="0.3s"><?php echo $settings['button_text_1']; ?></a>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 align-self-end">
                    <div class="hero-image wow fadeInUp">

                        <?php if (!empty($settings['banner_main_img']['url'])) { ?>
                            <img src="<?php echo $settings['banner_main_img']['url']; ?>" alt="hero man" class="img-fluid">
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->
    <?php
}

function crete_hero_style_4($settings) {
    ?>
    <!--hero section start-->
    <section class="hm4-hero-section bg-white position-relative z-1 overflow-hidden">
        <span class="circle-shape-1 position-absolute z--1 rounded-circle"></span>
        <span class="circle-shape-2 position-absolute z--1 rounded-circle"></span>
        <span class="circle-shape-3 position-absolute z--1 rounded-circle"></span>
        <span class="circle-shape-4 position-absolute z--1 rounded-circle" data-parallax='{"y": 100}'></span>
        <span class="circle-shape-5 position-absolute z--1 rounded-circle" data-parallax='{"x": 100}'></span>

        <div class="container custom_container_width">
            <div class="row align-items-center g-5">
                <div class="col-xl-7">
                    <div class="hm4-hero-content">

                        <?php if (!empty($settings['sub_heading'])) { ?>
                            <span class="primary-text-color hm4-subtitle fw-semibold"><?php echo $settings['sub_heading']; ?></span>
                        <?php } ?>

                        <?php if (!empty($settings['heading'])) { ?>
                            <h1 class="display-1 fw-bold mt-40 mb-50"><?php echo $settings['heading']; ?></h1>
                        <?php } ?>

                        <?php if (!empty($settings['info'])) { ?>
                            <p class="lead mb-50 fw-medium"><?php echo $settings['info']; ?></p>
                        <?php } ?>

                        <?php if (!empty($settings['button_text_1'])) { ?>
                            <a href="<?php echo $settings['button_link_1']['url']; ?>" class="template-btn primary-btn text-uppercase"><?php echo $settings['button_text_1']; ?></a>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="hm4-hero-right position-relative z-1">
                        <?php if (!empty($settings['banner_main_img']['url'])) { ?>
                            <img src="<?php echo $settings['banner_main_img']['url']; ?>" alt="not found" class="img-fluid">
                        <?php } ?>
                        <?php if (!empty($settings['shape_img_1']['url'])) { ?>
                            <span class="hero-icon html rounded-circle d-inline-flex align-itms-center justify-content-center z--1 bg-white position-absolute">
                            <img src="<?php echo $settings['shape_img_1']['url']; ?>" alt="html" class="img-fluid">
                        </span>
                        <?php } ?>

                        <?php if (!empty($settings['shape_img_2']['url'])) { ?>
                            <span class="hero-icon css rounded-circle d-inline-flex align-itms-center justify-content-center z--1  bg-white position-absolute">
                            <img src="<?php echo $settings['shape_img_2']['url']; ?>" alt="html" class="img-fluid">
                        </span>
                        <?php } ?>

                        <?php if (!empty($settings['shape_img_3']['url'])) { ?>
                            <span class="hero-icon bootstrap rounded-circle d-inline-flex align-itms-center justify-content-center bg-white position-absolute">
                            <img src="<?php echo $settings['shape_img_3']['url']; ?>" alt="html" class="img-fluid">
                        </span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->
    <?php
}