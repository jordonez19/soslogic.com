<?php

function crete_testimonial_style_1($settings) {
    ?>
    <!--feedback section start-->
    <section class="feedback-section ptb-100 dark-bg-color position-relative z-1 overflow-hidden">
        <span class="circle-shape-1 position-absolute z--1"></span>
        <span class="circle-shape-2 position-absolute z--1"></span>
        <div class="container custom_container_width">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section-title">
                        <?php if (!empty($settings['section_sub_title'])) { ?>
                            <span class="cr-subtitle fw-semibold text-white position-relative"><?php echo $settings['section_sub_title']; ?></span>
                        <?php } ?>

                        <?php if (!empty($settings['section_title'])) { ?>
                            <h2 class="mb-0 text-white mt-4"><?php echo $settings['section_title']; ?></h2>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="feedback-slider mt-60 slider-spacing">
                <?php foreach ($settings['list'] as $item) { ?>
                    <div class="slide-single">
                        <div class="feedback-single bg-white">
                            <?php if (!empty($item['quote_img_1']['url'])) { ?>
                                <img src="<?php echo $item['quote_img_1']['url']; ?>" alt="quote" class="img-fluid  align-self-start">
                            <?php }; ?>
                            <div class="feedback-content">
                                <h3 class="fw-medium mb-0 clients-comment"><?php echo $item['comment']; ?></h3>
                                <div class="spacer mt-50 mb-40"></div>
                                <div class="d-flex align-items-center gap-3">
                                    <?php if (!empty($item['author_img']['url'])) { ?>
                                        <img src="<?php echo $item['author_img']['url']; ?>" alt="client" class="img-fluid rounded-circle flex-shrink-0 crete__author-img">
                                    <?php }; ?>

                                    <div>
                                        <?php if (!empty($item['author_name'])) { ?>
                                            <h6 class="fw-semibold mb-1 crete__testimonial_author_name"><?php echo $item['author_name']; ?></h6>
                                        <?php } ?>
                                        <?php if (!empty($item['author_designation'])) { ?>
                                            <span class="fw-medium crete__testimonial_author_designation"><?php echo $item['author_designation']; ?></span>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                            <?php if (!empty($item['quote_img_2']['url'])) { ?>
                                <img src="<?php echo $item['quote_img_2']['url']; ?>" alt="quote" class="img-fluid align-self-end">
                            <?php }; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--feedback section end-->
    <?php
}

function crete_testimonial_style_2($settings) {
    ?>
    <!--feedback section start-->
    <section class="cr2-feedback-section overflow-hidden">
        <div class="container custom_container_width">
            <div class="row">
                <div class="col-xl-6">
                    <div class="cr2-feedback-left ptb-100">
                        <?php if (!empty($settings['section_sub_title'])) { ?>
                            <span class="cr-subtitle position-relative text-white fw-semibold crete__feedback-section-sub-heading"><?php echo $settings['section_sub_title']; ?></span>
                        <?php } ?>

                        <?php if (!empty($settings['section_title'])) { ?>
                            <h2 class="mt-4 mb-32 text-white crete__feedback-section-heading"><?php echo $settings['section_title']; ?></h2>
                        <?php } ?>

                        <?php if (!empty($settings['section_description'])) { ?>
                            <p class="mb-60 text-white mx-470 fw-medium crete__feedback-section-description"><?php echo $settings['section_description']; ?></p>
                        <?php } ?>

                        <div class="d-flex align-items-center cr2-feedback-counter">

                            <?php if (!empty($settings['review_counter_number'])) { ?>
                                <div>
                                    <h3 class="mb-1 text-white fs-40 crete__counter_number"><span class="counter"><?php echo $settings['review_counter_number']; ?></span><span><?php echo $settings['review_counter_suffix']; ?></span></h3>
                                    <span class="text-white fw-medium crete__counter_text"><?php echo $settings['review_counter_text']; ?></span>
                                </div>
                            <?php } ?>

                            <div>
                                <h3 class="mb-1 text-white fs-40 crete__review_number"><?php echo $settings['ratting_number']; ?></h3>
                                <span class="text-white fw-medium crete__review_text"><?php echo $settings['ratting_text']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="cr2-feedback-vertical-slider">
                        <div class="cr2-feedback-slider">
                            <?php foreach ($settings['list'] as $item) { ?>
                                <div class="cr2-feedback-single">
                                    <p class="mb-0 fw-medium crete__testimonial_comment"><?php echo $item['comment']; ?></p>
                                    <span class="spacer"></span>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="clients_info d-flex align-items-center gap-4 flex-wrap">
                                            <?php if (!empty($item['author_img']['url'])) { ?>
                                                <img src="<?php echo $item['author_img']['url']; ?>" alt="client" class="img-fluid rounded-circle crete__author-img">
                                            <?php }; ?>
                                            <div>
                                                <?php if (!empty($item['author_name'])) { ?>
                                                    <h5 class="mb-0 fw-semibold crete__testimonial_author_name"><?php echo $item['author_name']; ?></h5>
                                                <?php } ?>

                                                <?php if (!empty($item['author_designation'])) { ?>
                                                    <span class="fw-medium fs-sm crete__testimonial_author_designation"><?php echo $item['author_designation']; ?></span>
                                                <?php } ?>

                                            </div>
                                        </div>
                                        <?php if (!empty($item['quote_img_1']['url'])) { ?>
                                            <img src="<?php echo $item['quote_img_1']['url']; ?>" alt="quote" class="img-fluid">
                                        <?php }; ?>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feedback section end-->
    <?php
}

function crete_testimonial_style_3($settings) {
    ?>
    <!--testmonial section start-->
    <section class="hm3-feedback-section hm3-light-bg pb-100" id="feedback">
        <div class="container custom_container_width">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="text-center">
                        <?php if (!empty($settings['section_sub_title'])) { ?>
                            <span class="cr-subtitle position-relative fw-semibold primary-text-color wow fadeInUp crete__feedback-section-sub-heading"><?php echo $settings['section_sub_title']; ?></span>
                        <?php } ?>

                        <?php if (!empty($settings['section_title'])) { ?>
                            <h2 class="mt-4 wow fadeInUp crete__feedback-section-heading" data-wow-delay="0.2s"><?php echo $settings['section_title']; ?> <span class="primary-bg-light primary-text-color px-1 text-italic fw-normal crete__section_title_special_text"><?php echo $settings['section_title_special_text']; ?></span></h2>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="hm3-feedback-slider slider-spacing mt-60">
                <?php foreach ($settings['list'] as $item) { ?>
                    <?php
                    if ('1' == $item['reivew']) {
                        $review = '<li><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>';
                    } elseif ('2' == $item['reivew']) {
                        $review = '<li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>';
                    } elseif ('3' == $item['reivew']) {
                        $review = '<li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>';
                    } elseif ('4' == $item['reivew']) {
                        $review = '<li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>';
                    } else {
                        $review = '<li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>';
                    }
                    ?>
                    <div class="hm3-feedback-single">
                        <?php if (!empty($item['author_img']['url'])) { ?>
                            <img src="<?php echo $item['author_img']['url']; ?>" alt="client" class="rounded-circle crete__author-img">
                        <?php }; ?>

                        <?php if (!empty($item['review_title'])) { ?>
                            <h6 class="mt-32 mb-4 crete__review-title"><?php echo $item['review_title']; ?></h6>
                        <?php }; ?>

                        <p class="mb-0 crete__testimonial_comment"><?php echo $item['comment']; ?></p>
                        <span class="spacer"></span>
                        <div class="d-flex align-items-center flex-wrap flex-xl-nowrap gap-3">
                            <?php if ('yes' == $item['Enable-Reviwe']) { ?>
                                <ul class="d-flex star-ratings">
                                    <?php echo $review; ?>
                                </ul>
                            <?php } ?>
                            <div class="info">
                                <?php if (!empty($item['author_name'])) { ?>
                                    <h6 class="mb-0 fs-18 crete__testimonial_author_name"><?php echo $item['author_name']; ?></h6>
                                <?php } ?>
                                <?php if (!empty($item['author_designation'])) { ?>
                                    <p class="mb-0 crete__testimonial_author_designation"><?php echo $item['author_designation']; ?></p>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!--testimonial section end-->
    <?php
}

function crete_testimonial_style_4($settings) {
    ?>
    <!--feedback section start-->
    <section class="hm4-feedback-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section-title">
                        <?php if (!empty($settings['section_sub_title'])) { ?>
                            <span class="cr-subtitle position-relative primary-text-color fw-semibold crete__feedback-section-sub-heading"><?php echo $settings['section_sub_title']; ?></span>
                        <?php } ?>

                        <?php if (!empty($settings['section_title'])) { ?>
                            <h3 class="mt-4 mb-0 crete__feedback-section-heading"><?php echo $settings['section_title']; ?></h3>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="hm4-feedback-slider slider-spacing mt-">
                <?php foreach ($settings['list'] as $item) { ?>
                    <?php
                    if ('1' == $item['reivew']) {
                        $review = '<li><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>';
                    } elseif ('2' == $item['reivew']) {
                        $review = '<li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>';
                    } elseif ('3' == $item['reivew']) {
                        $review = '<li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>';
                    } elseif ('4' == $item['reivew']) {
                        $review = '<li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>';
                    } else {
                        $review = '<li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>';
                    }
                    ?>
                    <div class="hm4-feedback-single">
                        <p class="mb-0 crete__testimonial_comment"><?php echo $item['comment']; ?></p>
                        <span class="spacer"></span>
                        <div class="d-flex align-items-center flex-wrap flex-xxl-nowrap gap-3 justify-content-between">
                            <div class="info d-flex align-items-center gap-4">

                                <?php if (!empty($item['author_img']['url'])) { ?>
                                    <div class="thumb">
                                        <img src="<?php echo $item['author_img']['url']; ?>" alt="client" class="rounded-circle img-fluid crete__author-img">
                                    </div>
                                <?php } ?>

                                <div>
                                    <?php if (!empty($item['author_name'])) { ?>
                                        <h6 class="mb-0 fs-18 crete__testimonial_author_name"><?php echo $item['author_name']; ?></h6>
                                    <?php } ?>
                                    <?php if (!empty($item['author_designation'])) { ?>
                                        <p class="mb-0 crete__testimonial_author_designation"><?php echo $item['author_designation']; ?></p>
                                    <?php }; ?>
                                </div>
                            </div>
                            <?php if ('yes' == $item['Enable-Reviwe']) { ?>
                                <ul class="d-flex star-ratings">
                                    <?php echo $review; ?>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!--feedback section end-->
    <?php
}
