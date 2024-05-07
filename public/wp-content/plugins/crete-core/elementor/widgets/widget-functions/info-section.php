<?php

function crete_info_section_style_1($settings)
{
    ?>
    <!--about section start-->
    <section class="about-section ptb-100 overflow-hidden">
        <div class="row align-items-center g-5 crete_reverce_info">
            <div class="col-xl-6 col-lg-6">
                <div class="about-left position-relative">
                    <?php if (!empty($settings['crete_left_image_one']['url'])) { ?>
                        <img src="<?php echo $settings['crete_left_image_one']['url']; ?>" alt="bulb"
                             class="img-fluid rounded-3">
                    <?php } ?>

                    <div class="ab-award-box bg-white py-40 px-40 position-absolute z-1">
                        <h6 class="mb-0"><?php echo $settings['crete_left_title']; ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-right">
                    <span class="cr-subtitle fw-semibold primary-text-color position-relative wow fadeInUp d-inline-block"><?php echo $settings['crete_right_discount_title']; ?></span>
                    <h2 class="mb-5 mt-4 wow fadeInUp"
                        data-wow-delay="0.2s"><?php echo $settings['crete_right_main_title']; ?> <span
                                class="primary-text-color primary-bg-light px-2"><?php echo $settings['crete_right_main_title_style_text']; ?></span>
                    </h2>
                    <p class="mb-40 wow fadeInUp"
                       data-wow-delay="0.3s"><?php echo $settings['crete_right_decription']; ?> <span
                                class="primary-text-color fw-semibold"><?php echo $settings['crete_right_main_decription_style_text']; ?></span>
                    </p>
                    <div class="d-flex align-items-center gap-4 ab-flex-box flex-wrap flex-sm-nowrap wow fadeInUp crete_hm_one_image_card"
                         data-wow-delay="0.4s">
                        <img src="<?php echo $settings['crete_right_image_one']['url']; ?>" alt="not found"
                             class="img-fluid rounded-2">
                        <p class="mb-0 crete_about_right_decription"><?php echo $settings['crete_right_image_decription_style']; ?></p>
                    </div>
                    <div class="spacer my-40"></div>
                    <div class="d-flex align-items-center gap-4 flex-wrap">
                        <a href="<?php echo $settings['crete_right_button__one_link']['url']; ?>"
                           class="template-btn primary-btn wow fadeInUp"
                           data-wow-delay="0.2s"><?php echo $settings['crete_right_button_one_text']; ?></a>
                        <a href="<?php echo $settings['crete_right_button__two_link']['url']; ?>"
                           class="template-btn secondary-btn wow fadeInUp"
                           data-wow-delay="0.3s"><?php echo $settings['crete_right_button_two_text']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->
    <?php
}

function crete_info_section_style_2($settings)
{
    ?>
    <!--call to action start-->
    <section class="hm2-cta-section bg-white ptb-100 overflow-hidden">
        <div class="container">
            <div class="row align-items-center g-5 crete_reverce_info">
                <div class="col-xl-6">
                    <div class="hm2-cta-left position-relative z-1">

                        <span class="circle-shape position-absolute z--1"></span>
                        <img src="<?php echo $settings['crete_left_image_one']['url']; ?>" alt="not found"
                             class="img-fluid cta-1 wow fadeInLeft">
                        <img src="<?php echo $settings['crete_left_image_two']['url']; ?>" alt="not found"
                             class="img-fluid cta-2 wow fadeInRight">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="hm2-cta-content ps-xl-5">
                        <span class="cr-subtitle position-relative primary-text-color fw-semibold wow fadeInUp d-inline-block"><?php echo $settings['crete_right_discount_title']; ?></span>
                        <h2 class="mt-32 mb-40 wow fadeInUp"
                            data-wow-delay="0.2s"><?php echo $settings['crete_right_main_title']; ?> <span
                                    class="primary-bg-light primary-text-color px-2"><?php echo $settings['crete_right_main_title_style_text']; ?></span> <?php echo $settings['crete_right_main_title_style_text_after']; ?>
                        </h2>
                        <p class="mb-5 wow fadeInUp"
                           data-wow-delay="0.3s"><?php echo $settings['crete_right_decription']; ?></p>
                        <div class="d-flex align-items-center gap-3 gap-sm-4 flex-wrap">
                            <a href="<?php echo $settings['crete_right_button__one_link']['url']; ?>"
                               class="template-btn primary-btn wow fadeInUp"
                               data-wow-delay="0.4s"><?php echo $settings['crete_right_button_one_text']; ?></a>
                            <a href="<?php echo $settings['crete_right_button__one_link']['url']; ?>"
                               class="template-btn outline-secondary wow fadeInUp"
                               data-wow-delay="0.5s"><?php echo $settings['crete_right_button_two_text']; ?> <span
                                        class="ms-2">   <?php \Elementor\Icons_Manager::render_icon($settings['crete_right_button__two_link_icon'], ['aria-hidden' => 'true']); ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action end-->
    <?php
}


function crete_info_section_style_3($settings)
{
    ?>
    <!--exp section start-->
    <section class="exp-section ptb-100 overflow-hidden">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="image-wrapper">

                        <?php if (!empty($settings['crete_left_image_one']['url'])) { ?>
                            <img src="<?php echo $settings['crete_left_image_one']['url']; ?>" alt="about"
                                 class="img-fluid rounded-4">
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="exp-content-right">
                        <span class="cr-subtitle fw-semibold primary-text-color position-relative wow fadeInUp d-inline-block"><?php echo $settings['crete_right_discount_title']; ?></span>

                        <h2 class="mb-5 mt-4 wow fadeInUp"
                            data-wow-delay="0.2s"><?php echo $settings['crete_right_main_title']; ?> <span
                                    class="primary-text-color primary-bg-light px-2"><?php echo $settings['crete_right_main_title_style_text']; ?></span>
                        </h2>
                        <p class="mb-40 wow fadeInUp"
                           data-wow-delay="0.3s"><?php echo $settings['crete_right_decription']; ?> <span
                                    class="primary-text-color fw-semibold"><?php echo $settings['crete_right_main_decription_style_text']; ?></span>
                        </p>
                        <div class="d-flex align-items-center gap-3 gap-sm-4 flex-wrap">

                            <a href="<?php echo $settings['crete_right_button__one_link']['url']; ?>"
                               class="template-btn primary-btn wow fadeInUp"
                               data-wow-delay="0.2s"><?php echo $settings['crete_right_button_one_text']; ?></a>
                            <a href="<?php echo $settings['crete_right_button__two_link']['url']; ?>"
                               class="template-btn  outline-secondary wow fadeInUp"
                               data-wow-delay="0.3s"><?php echo $settings['crete_right_button_two_text']; ?> <span
                                        class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--expt section end-->
    <?php
}

function crete_info_section_style_4($settings)
{
    ?>
    <!--about section start-->
    <section class="hm4-about-section ptb-100 hm3-light-bg overflow-hidden" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-5">
                    <div class="hm4-about-left">
                        <img src="<?php echo $settings['crete_left_image_one']['url']; ?>" alt="not found"
                             class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-right">
                        <h3 class="mb-4"><?php echo $settings['crete_right_main_title']; ?></h3>
                        <span class="fw-medium primary-text-color"><?php echo $settings['crete_right_main_title_style_text']; ?></span>

                        <p class="fw-medium mt-40"><?php echo $settings['crete_right_decription']; ?></p>
                        <div class="mt-5 bg-white rounded-4 hm4-ab-info team-d-info">
                            <div class="row g-4">
                                <?php
                                if ($settings['info_list']) {
                                    foreach ($settings['info_list'] as $infos) {
                                        ?>
                                        <div class="col-md-6">
                                            <div class="td-icon-box d-flex align-items-center flex-wrap">
                                            <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle bg-white theme-shadow">
                                                <?php \Elementor\Icons_Manager::render_icon($infos['info_icon'], ['aria-hidden' => 'true']); ?>
                                            </span>
                                                <div>
                                                    <span><?php echo $infos['info_sub_title']; ?></span>
                                                    <h6 class="mb-0 mt-1 fs-18"><?php echo $infos['info_title']; ?></h6>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                                ?>


                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-wrap gap-4 mt-40">
                            <a href="<?php echo $settings['crete_right_button__one_link']['url']; ?>"
                               class="template-btn primary-btn text-uppercase"><?php echo $settings['crete_right_button_one_text']; ?> </a>
                            <a href="<?php echo $settings['crete_right_button__two_link']['url']; ?>"
                               class="template-btn white-btn text-uppercase"><?php echo $settings['crete_right_button_two_text']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->
    <?php
}
function crete_info_section_style_5($settings)
{
    ?>
     <div class="row g-5 align-items-center">
                            <div class="col-xxl-5 col-xl-6">
                                <div class="hm5-about-left">
                                     <img src="<?php echo $settings['crete_left_image_one']['url']; ?>" alt="not found"
                             class="img-fluid">
                                </div>
                            </div>
                            <div class="col-xxl-7 col-xl-6">
                                <div class="hm5-about-right">
                                     <h3 class="mb-4 text-white"><?php echo $settings['crete_right_main_title']; ?></h3>
                                   <span class="primary-text-color"><?php echo $settings['crete_right_main_title_style_text']; ?></span>
                                   
                                   <p class="fw-medium mb-60 mt-5"><?php echo $settings['crete_right_decription']; ?></p>
                                    
                                    <div class="row g-4">
                                          <?php
        if ($settings['info_list']) {
            foreach ($settings['info_list'] as $infos) {
                ?>
                                        <div class="col-md-6">
                                            <div class="td-icon-box d-flex align-items-center flex-wrap flex-xxl-nowrap">
                                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle bg-white theme-shadow">
                                                   <?php \Elementor\Icons_Manager::render_icon($infos['info_icon'], ['aria-hidden' => 'true']); ?>
                                                </span>
                                                <div>
                                                   <span><?php echo $infos['info_sub_title']; ?></span>
                                                    <h6 class="mb-0 mt-1 fs-18"><?php echo $infos['info_title']; ?></h6>
                                                </div>
                                            </div>
                                        </div>
                                         <?php
            }
        }
        ?>
                                       
                                    
                                      
                                    </div>
                                    <div class="d-flex align-items-center gap-4 flex-wrap mt-60">
                                        <a href="<?php echo $settings['crete_right_button__one_link']['url']; ?>" class="template-btn primary-btn"><?php echo $settings['crete_right_button_one_text']; ?></a>
                                        <a href="<?php echo $settings['crete_right_button__two_link']['url']; ?>" class="template-btn white-btn"><?php echo $settings['crete_right_button_two_text']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
    <?php 
}
function crete_info_section_style_second_1($settings)
{
    ?>
    <!--experts section start-->
    <section class="experts-section overflow-hidden">
        <div class="container custom_container_width">
            <div class="row align-items-center justify-content-between g-5 crete__experts-section-row">
                <div class="col-xl-5 col-lg-6">
                    <div class="exp-content">

                        <?php if (!empty($settings['crete_right_discount_title'])) { ?>
                            <span class="cr-subtitle fw-semibold position-relative primary-text-color wow fadeInUp d-inline-block"><?php echo $settings['crete_right_discount_title'] ?></span>
                        <?php } ?>

                        <?php if (!empty($settings['crete_right_main_title'])) { ?>
                            <h2 class="mt-4 mb-4 wow fadeInUp crete_info_two_title"
                                data-wow-delay="0.2s"><?php echo $settings['crete_right_main_title']; ?>
                                <?php if ($settings['crete_main_title_style_text']) { ?><span
                                        class="primary-text-color primary-bg-light px-2 crete_right_main_title_style_text"><?php echo $settings['crete_main_title_style_text']; ?></span><?php } ?> <?php echo $settings['crete_main_title_style_text_after']; ?>
                            </h2>
                        <?php } ?>

                        <?php if (!empty($settings['crete_decription'])) { ?>
                            <p class="mb-5 wow fadeInUp crete_info_two_decription"
                               data-wow-delay="0.3s"><?php echo $settings['crete_decription']; ?> <span
                                        class="primary-text-color crete_right_decription_style_text"><?php echo $settings['crete_right_decription_style_text']; ?></span>
                            </p>
                        <?php } ?>
                        <div class="cta-box bg-white rounded-3 theme-shadow wow fadeInUp" data-wow-delay="0.4s">
                            <div class="d-flex gap-3 flex-wrap flex-sm-nowrap">
                                <?php if (!empty($settings['check_icon']['value'])) { ?>
                                    <span class="icon-wrapper primary-bg-light rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                   <?php \Elementor\Icons_Manager::render_icon($settings['check_icon'], ['aria-hidden' => 'true']); ?>
                                </span>
                                <?php } ?>
                                <div>
                                    <?php if (!empty($settings['box_title'])) { ?>
                                        <h6 class="mb-20"><?php echo $settings['box_title']; ?></h6>
                                    <?php } ?>

                                    <?php if (!empty($settings['box_info'])) { ?>
                                        <p class="mb-0"><?php echo $settings['box_info']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-4 mt-40 flex-wrap">
                                <?php if (!empty($settings['btn_text'])) { ?>
                                    <a href="<?php echo $settings['btn_link']['url']; ?>"
                                       class="template-btn primary-btn"><?php echo $settings['btn_text']; ?></a>
                                <?php } ?>

                                <?php if (!empty($settings['tel_number'])) { ?>
                                    <a href="tel:<?php echo $settings['tel_number']; ?>">
                                        <div class="cta-call-btn d-flex align-items-center gap-2">
                                            <?php if (!empty($settings['call_icon']['value'])) { ?>
                                                <span class="icon-tel rounded-circle">
                                            <span class="primary-bg-color rounded-circle w-100 h-100 d-inline-flex align-items-center justify-content-center text-white">
                                                <?php \Elementor\Icons_Manager::render_icon($settings['call_icon'], ['aria-hidden' => 'true']); ?>
                                            </span>
                                        </span>
                                            <?php } ?>
                                            <div>
                                                <span class="fs-sm fw-medium mb-2 d-block text-color call_before_text"><?php echo $settings['call_before_text']; ?></span>
                                                <h5 class="mb-0 fs-20 tel_number"><?php echo $settings['tel_number']; ?></h5>
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="exp-right position-relative">
                        <?php if (!empty($settings['meeting_img']['url'])) { ?>
                            <img src="<?php echo $settings['meeting_img']['url']; ?>" alt="not found"
                                 class="img-fluid js-tilt">
                        <?php } ?>

                        <?php if ('yes' == $settings['counter_box']) { ?>
                            <div class="exp-year-box position-absolute rounded-circle crete__counter_bg">
                                <h3 class="text-white crete__counter_number"><span
                                            class="counter"><?php echo $settings['counter_number']; ?></span><?php echo $settings['counter_suffix']; ?>
                                </h3>
                                <h6 class="mb-0 text-white fs-18 crete__counter_text"><?php echo $settings['counter_text']; ?></h6>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--experts section end-->


    <?php
}

function crete_info_section_style_second_2($settings)
{
    ?>
    <!--about section start-->
    <section class="about-section ptb-100 overflow-hidden">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-xl-6">
                    <div class="about-content-left position-relative">
                        <?php if (!empty($settings['meeting_img']['url'])) { ?>
                            <img src="<?php echo $settings['meeting_img']['url']; ?>" alt="not found" class="img-fluid">
                        <?php } ?>



                        <?php if ('yes' == $settings['counter_box']) { ?>

                            <div class="position-absolute ab-years-box wow fadeInUp">
                                <h3 class="mb-0"><?php echo $settings['counter_number']; ?></h3>
                                <p class="mb-0 crete__counter_text"><?php echo $settings['counter_text']; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-content-right">

                        <?php if (!empty($settings['crete_right_discount_title'])) { ?>
                            <span class="cr-subtitle fw-semibold position-relative primary-text-color wow fadeInUp d-inline-block"><?php echo $settings['crete_right_discount_title'] ?></span>
                        <?php } ?>

                        <?php if (!empty($settings['crete_right_main_title'])) { ?>
                            <h2 class="mt-4 mb-4 wow fadeInUp crete_info_two_title"
                                data-wow-delay="0.2s"><?php echo $settings['crete_right_main_title']; ?>
                                <?php if ($settings['crete_main_title_style_text']) { ?><span
                                        class="primary-text-color primary-bg-light px-2 crete_right_main_title_style_text"><?php echo $settings['crete_main_title_style_text']; ?></span><?php } ?> <?php echo $settings['crete_main_title_style_text_after']; ?>
                            </h2>
                        <?php } ?>
                        <?php if (!empty($settings['crete_decription'])) { ?>
                            <p class="mb-32 wow fadeInUp crete_info_two_decription"
                               data-wow-delay="0.3s"><?php echo $settings['crete_decription']; ?> <span
                                        class="primary-text-color crete_right_decription_style_text"><?php echo $settings['crete_right_decription_style_text']; ?></span>
                            </p>
                        <?php } ?>
                        <div class="cta-box bg-white rounded-3 theme-shadow">
                            <div class="d-flex gap-3 flex-wrap flex-sm-nowrap">
                                <?php if (!empty($settings['check_icon']['value'])) { ?>
                                    <span class="icon-wrapper primary-bg-light rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                   <?php \Elementor\Icons_Manager::render_icon($settings['check_icon'], ['aria-hidden' => 'true']); ?>
                                </span>
                                <?php } ?>
                                <div>
                                    <?php if (!empty($settings['box_title'])) { ?>
                                        <h6 class="mb-20"><?php echo $settings['box_title']; ?></h6>
                                    <?php } ?>

                                    <?php if (!empty($settings['box_info'])) { ?>
                                        <p class="mb-0"><?php echo $settings['box_info']; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-4 mt-40 flex-wrap">
                                <?php if (!empty($settings['btn_text'])) { ?>
                                    <a href="<?php echo $settings['btn_link']['url']; ?>"
                                       class="template-btn primary-btn"><?php echo $settings['btn_text']; ?></a>
                                <?php } ?>
                                <?php if (!empty($settings['tel_number'])) { ?>
                                    <a href="tel:<?php echo $settings['tel_number']; ?>">
                                        <div class="cta-call-btn d-flex align-items-center gap-2">
                                            <?php if (!empty($settings['call_icon']['value'])) { ?>
                                                <span class="icon-tel rounded-circle">
                                            <span class="primary-bg-color rounded-circle w-100 h-100 d-inline-flex align-items-center justify-content-center text-white">
                                                <?php \Elementor\Icons_Manager::render_icon($settings['call_icon'], ['aria-hidden' => 'true']); ?>
                                            </span>
                                        </span>
                                            <?php } ?>
                                            <div>
                                                <span class="fs-sm fw-medium mb-2 d-block text-color call_before_text"><?php echo $settings['call_before_text']; ?></span>
                                                <h5 class="mb-0 fs-20 tel_number"><?php echo $settings['tel_number']; ?></h5>
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->


    <?php
}