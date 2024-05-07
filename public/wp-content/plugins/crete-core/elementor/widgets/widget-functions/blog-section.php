<?php
if (!function_exists('crete_blog_style_one')) {
    function crete_blog_style_one($the_query,$settings)
    {
$subtitle = $settings['section_subtitle'];
$title = $settings['section_title'];
$stltitle = $settings['section_title_style'];
$viewmtext = $settings['view_more_txt'];
$viewmurl = $settings['view_more_url'];
$learnmore = $settings['section_learn_more_style'];
?>

 <!--blog section start-->
    <section class="blog-section ptb-100">
        <div class="container-large">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title">
                        <?php if ($subtitle){ ?>
                        <span class="cr-subtitle position-relative fw-semibold primary-text-color d-inline-block wow fadeInUp"><?php echo $subtitle;?></span>
                        <?php } ?>
                        <?php if ($title){ ?>
                        <h2 class="mb-0 mt-4 wow fadeInUp" data-wow-delay="0.2s"><?php echo $title;?> <?php if ($stltitle){ ?><span class="px-1 ms-2 primary-bg-light primary-text-color"><?php echo $stltitle;?></span><?php } ?></h2>
                        <?php } ?>
                    </div>
                </div>
                <?php if ($viewmurl){ ?>
                <div class="col-xl-4 col-lg-4">
                    <div class="text-end d-none d-lg-block">
                        <a href="<?php echo $viewmurl; ?>" class="template-btn secondary-btn"><?php echo $viewmtext; ?></a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="row mt-5 g-4">
                <?php
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                    ?>
                <div class="col-lg-6">
                    <article class="article-card position-relative wow fadeInUp">
                        <?php if (has_post_thumbnail()) { ?>
                        <span class="overlay-bg position-absolute"></span>
                        
                        <div class="feature-image overflow-hidden">
            
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('crete-blog-sthome-one'); ?></a>
                   
                        </div>
                         <?php } ?>
                        <div class="card-content-wrapper bg-white">
                            <div class="blog-meta d-flex align-items-center gap-4 mb-4 flex-wrap">
                                <span class="date fw-medium"><i class="fa-regular fa-calendar-days me-2 primary-text-color"></i><?php crete_posted_on(); ?></span>
                                <span class="tags fw-medium"><i class="fa-solid fa-tags me-2 primary-text-color"></i><?php if (get_the_category_list()) { ?>
                             <?php crete_post_cat(); ?><?php } ?></span>
                            </div>
                            <a href="<?php the_permalink(); ?>"><h3 class="mb-4 title fw-semibold"><?php the_title();?></h3></a>
                            <p class="mb-32 description"><?php echo  wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="explore-btn"><?php echo esc_html($learnmore);?> <span class="ms-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </article>
                </div>
                <?php }
                wp_reset_postdata();
                    } ?>
       
            </div>
             <?php if ($viewmurl){ ?>
            <div class="text-center mt-5 d-lg-none">
                <a href="<?php echo $viewmurl;?>" class="template-btn secondary-btn wow fadeInUp"><?php echo $viewmtext;?></a>
            </div>
            <?php } ?>
        </div>
    </section>
  

<?php

    }
}
if (!function_exists('crete_blog_style_two')) {
    function crete_blog_style_two($the_query,$settings)
    {
$subtitle = $settings['section_subtitle'];
$title = $settings['section_title'];
$stltitle = $settings['section_title_style'];
$viewmtext = $settings['view_more_txt'];
$viewmurl = $settings['view_more_url'];
?>
 <!--blog section start-->
    <section class="blog-section ptb-100 bg-white overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center">
                        
                        <?php if ($subtitle){ ?>
                        <span class="cr-subtitle position-relative fw-semibold primary-text-color d-inline-block wow fadeInUp"><?php echo $subtitle;?></span>
                        <?php } ?>
                        <?php if ($title){ ?>
                        <h2 class="mt-4 wow fadeInUp" data-wow-delay="0.2s"><?php echo $title;?> <?php if ($stltitle){ ?><span class="px-1 ms-2 primary-bg-light primary-text-color"><?php echo $stltitle;?></span><?php } ?></h2>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center g-4">
                <?php
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            global $post;
                            $mycontent = $post->post_content;
                        $word = str_word_count(strip_tags($mycontent));
                        $m = floor($word / 200);
                        $est = $m . ' min read';
                    $post_video = get_post_meta(get_the_ID(), 'video-link', true);
                    ?>
                <div class="col-xl-4 col-sm-6">
                    <article class="hm2-blog-card">
                        <div class="feature-image rounded-3 overflow-hidden position-relative">
                            <?php the_post_thumbnail('full'); ?>
                            <?php if (is_array($post_video) && !empty($post_video['url'])) { ?>
                            <a href="<?php echo $post_video['url'];?>" class="video-btn video-popup-btn rounded-circle d-inline-flex align-items-center justify-content-center"><i class="fas fa-play"></i></a>
                                                                <?php } ?>
                        </div>
                        <div class="blog-content mt-32">
                            <div class="blog-meta d-flex align-items-center flex-wrap gap-4">
                                <span class="fs-sm fw-medium"><?php echo get_the_date('d M, Y'); ?></span>
                                <span class="fs-sm fw-medium"><?php echo esc_html__($est, 'crete'); ?></span>
                            </div>
                            <a href="<?php the_permalink(); ?>"><h6 class="my-4"><?php the_title(); ?></h6></a>
                            <div class="categories d-flex align-items-center gap-3 flex-wrap">
                              <?php if (get_the_category_list()) { ?>
                             <?php crete_post_cat_alt(); ?><?php } ?>
                            </div>
                        </div>
                    </article>
                </div>
                <?php }
                wp_reset_postdata();
                    } ?>
                
            </div>
        </div>
    </section>
    <!--blog section end-->

<?php

    }
}
if (!function_exists('crete_blog_style_three')) {
    function crete_blog_style_three($the_query,$settings)
    {
$subtitle = $settings['section_subtitle'];
$title = $settings['section_title'];
$stltitle = $settings['section_title_style'];
$viewmtext = $settings['view_more_txt'];
$viewmurl = $settings['view_more_url'];
?>
<div class="row g-4 mt-60 justify-content-center">
    <?php
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            global $post;
                            $mycontent = $post->post_content;
                        $word = str_word_count(strip_tags($mycontent));
                        $m = floor($word / 200);
                        $est = $m . ' min read';
                    $post_video = get_post_meta(get_the_ID(), 'video-link', true);
                    ?>
                        <div class="col-xxl-4 col-lg-6">
                            <article class="hm2-blog-card hm5-blog-card">
                                <div class="feature-image overflow-hidden position-relative">
                                    <?php the_post_thumbnail('crete-blog-sthome-four'); ?>
                            
                            
                                </div>
                                <div class="blog-content mt-32">
                                    <div class="blog-meta d-flex align-items-center flex-wrap gap-4">
                                        <span class="fs-sm fw-medium"><?php echo get_the_date('d M, Y'); ?></span>
                                        <span class="fs-sm fw-medium"><?php echo esc_html__($est, 'crete'); ?></span>
                                    </div>
                                   <a href="<?php the_permalink(); ?>"><h6 class="my-4"><?php the_title(); ?></h6></a>
                                    <div class="categories d-flex align-items-center gap-3 flex-wrap">
                                        <?php if (get_the_category_list()) { ?>
                             <?php crete_post_cat_alt(); ?><?php } ?>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php }
                wp_reset_postdata();
                    } ?>
            </div>


<?php

    }
}

