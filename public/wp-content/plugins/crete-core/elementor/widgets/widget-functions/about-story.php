<?php
function crete_about_story_1($settings)
{

    ?>
    <!--about section start-->
    <section class="hm3-about-section ptb-100 overflow-hidden" id="about">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="hm3-about-left">
                        <h2 class="text-white mb-4 wow fadeInUp"><?php echo $settings['crete_about_story_left_title']; ?></h2>
                        <p class="fs-20 fw-meidum text-white mb-40 wow fadeInUp"
                           data-wow-delay="0.2s"><?php echo $settings['crete_about_story_left_sub_title']; ?></p>
                        <p class="desc mb-40 wow fadeInUp"
                           data-wow-delay="0.3s"><?php echo $settings['crete_about_story_left_decription']; ?></p>
                        <a href="<?php echo $settings['crete_about_story_left_btn_link']['url']; ?>"
                           class="template-btn primary-btn wow fadeInUp"
                           data-wow-delay="0.4s"><?php echo $settings['crete_about_story_left_btn_text']; ?></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="exp-filter mt-4 mt-lg-0">
                        <ul class="nav nav-tabs border-0">
                            <li><a href="#experience" data-bs-toggle="tab"
                                   class="active"><span><?php echo $settings['name_experience_title']; ?></span></a>
                            </li>
                            <li><a href="#education"
                                   data-bs-toggle="tab"><span><?php echo $settings['name_education_title']; ?></span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="experience">

                                <?php
                                if ($settings['experience_list']) {
                                    foreach ($settings['experience_list'] as $experience) {
                                        ?>
                                        <div class="hm3-exp-box">
                                            <div>
                                                <h6 class="mb-1"><?php echo $experience['experience_title']; ?></h6>
                                                <p class="primary-text-color mb-0"><?php echo $experience['experience_company']; ?></p>
                                            </div>
                                            <span class="date"><?php echo $experience['experience_date']; ?></span>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="tab-pane fade" id="education">
                                <?php
                                if ($settings['education_list']) {
                                    foreach ($settings['education_list'] as $education) {
                                        ?>
                                        <div class="hm3-exp-box">
                                            <div>
                                                <h6 class="mb-1"><?php echo $education['education_title']; ?></h6>
                                                <p class="primary-text-color mb-0"><?php echo $education['education_company']; ?></p>
                                            </div>
                                            <span class="date"><?php echo $education['Education_date']; ?></span>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hm3-brand-slider mt-100">
                <?php
                if ($settings['brand_list']) {
                    foreach ($settings['brand_list'] as $brand) {
                        ?>
                        <div class="hm3-brand-item">
                            <p class="mb-0"><?php echo $brand['brand_title']; ?></p>
                            <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle bg-white">
                        <img src="<?php echo $brand['brand_image']['url']; ?>" alt="slack"
                             class="img-fluid brand_custome_image_size">
                    </span>
                            <h6 class="text-white fs-30 mb-0"><?php echo $brand['brand_performance']; ?>%</h6>
                        </div>

                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!--about section end-->
    <?php
}

function crete_about_story_2($settings)

{
    $oneofexed = $settings['crete_about_style_ex_ed_on_off'];
if( $oneofexed == 'yes'){
    ?>
    <!--experience section start-->
    <section class="hm4-exp-section ptb-100">
        <div class="container">
            <div class="hm4-exp-box d-flex flex-wrap flex-xl-nowrap align-items-center justify-content-between">
                <div class="exp-left position-relative">
                    <span class="exp-badge"><span><?php echo $settings['name_experience_title']; ?></span></span>
                    <ul class="exp-list">
                        <?php
                        if ($settings['experience_list']) {
                            foreach ($settings['experience_list'] as $experience) {
                                ?>

                                <li class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                                    <div class="exp-content-left">
                                        <h6 class="mb-0"><?php echo $experience['experience_title']; ?></h6>
                                        <span class="primary-text-color fw-medium"><?php echo $experience['experience_company']; ?></span>
                                    </div>
                                    <span class="st2_date_c"><?php echo $experience['experience_date']; ?></span>
                                </li>

                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="exp-right position-relative">
                    <span class="exp-badge"><span><?php echo $settings['name_education_title']; ?></span></span>
                    <ul class="exp-list">
                        <?php
                        if ($settings['education_list']) {
                            foreach ($settings['education_list'] as $education) {
                                ?>
                                <li class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                                    <div class="exp-content-left">
                                        <h6 class="mb-0"><?php echo $education['education_title']; ?></h6>
                                        <span class="primary-text-color fw-medium"><?php echo $education['education_company']; ?></span>
                                    </div>
                                    <span class="st2_date_c"><?php echo $education['Education_date']; ?></span>
                                </li>

                                <?php
                            }
                        } ?>


                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--experience section end-->

        <?php

}
    ?>


    <!--brand section start-->
    <div class="hm4-brand-section hm3-light-bg ptb-100 overflow-hidden">
        <div class="container">
            <div class="hm4-brand-slider mt-100">
                <?php
                if ($settings['brand_list']) {
                    foreach ($settings['brand_list'] as $brand) {
                        ?>
                        <div class="hm3-brand-item hm4-brand-single">
                            <p class="mb-0"><?php echo $brand['brand_title']; ?></p>
                            <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle">
                            <img src="<?php echo $brand['brand_image']['url']; ?>" alt="slack" class="img-fluid">
                        </span>
                            <h6 class="fs-30 mb-0"><?php echo $brand['brand_performance']; ?></h6>
                        </div>
                        <?php
                    }
                } ?>


            </div>
        </div>
    </div>
    <!--brand section end-->


    <?php
}