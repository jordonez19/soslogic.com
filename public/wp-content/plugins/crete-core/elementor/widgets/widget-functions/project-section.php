<?php

function crete_project_one($settings)
{
    $item_per_page = $settings['item_per_page'];
    $args = array(
        'post_type' => 'Project',
        'post_status' => 'publish',
        'posts_per_page' => $item_per_page,
        // Several more arguments could go here. Last one without a comma.
    );
    $project_query = new WP_Query($args);

    $project_cat = get_the_terms(get_the_ID(), 'project-category');
    $project_cat_name = join(', ', wp_list_pluck($project_cat, 'name'));
//    echo "<pre>";
//    print_r($project_query);
//    echo "</pre>";
    if (!empty($category[0])) {
        $post_args['tax_query'] = array(
            array(
                'taxonomy' => 'project-category',
                'terms' => $category,
            )
        );
    }
    ?>
    <!--portfolio section start-->
    <section class="portfolio-section ptb-100 light-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section-title">
                        <span class="cr-subtitle position-relative primary-text-color fw-semibold d-inline-block wow fadeInUp"><?php echo $settings['crete_project_top_sub_text']; ?></span>
                        <h2 class="mb-0 mt-4 wow fadeInUp"
                            data-wow-delay="0.2s"><?php echo $settings['crete_project_top_title_text']; ?> <span
                                    class="primary-text-color primary-bg-light px-2"><?php echo $settings['crete_project_top_title_style_text']; ?></span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="cr-pf-slider">
                <div class="single-item mt-5">
                    <div class="row g-4">
                        <?php

                        if ($args) {
                            for ($i = 0; $i < 2; $i++) {
                                $project_query->the_post();
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id($project_query->ID), 'crete-project-big');
                                $project_cat = get_the_terms(get_the_ID(), 'project-category');
                                $project_cat_name = join(', ', wp_list_pluck($project_cat, 'name'));
                                ?>
                                <div class="col-lg-6">
                                    <div class="pf-box position-relative wow fadeInUp">
                                        <img src="<?php echo $image[0]; ?>" alt="not found" class="img-fluid">
                                        <a href="<?php echo get_permalink(); ?>" class="explore-btn">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.4531 1.625V12.875C15.4531 13.5312 14.9375 14 14.3281 14C13.6719 14 13.2031 13.5312 13.2031 12.875V4.34375L2.375 15.1719C2.14062 15.4062 1.85938 15.5 1.57812 15.5C1.25 15.5 0.96875 15.4062 0.78125 15.1719C0.3125 14.75 0.3125 14.0469 0.78125 13.625L11.6094 2.75H3.07812C2.42188 2.75 1.95312 2.28125 1.95312 1.625C1.95312 1.01562 2.42188 0.5 3.07812 0.5H14.3281C14.9375 0.5 15.4531 1.01562 15.4531 1.625Z"
                                                      fill="white"/>
                                            </svg>
                                        </a>
                                        <div class="pf-content">
                                            <h3 class="mb-20 text-white"><a
                                                        href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <p class="mb-0 fw-medium text-white"><?php echo $project_cat_name; ?></p>
                                        </div>
                                    </div>

                                </div>
                            <?php }
                        }

                        $featured_grid_counts = $project_query->post_count - 2;
                        if ($args) {
                            for ($i = 0; $i < 3; $i++) {
                                $project_query->the_post();
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id($project_query->ID), 'crete-project-medium');
                                $project_cat = get_the_terms(get_the_ID(), 'project-category');
                                $project_cat_name = join(', ', wp_list_pluck($project_cat, 'name'));
                                ?>
                                <div class="col-lg-4">
                                    <div class="pf-box position-relative wow fadeInUp">
                                        <img src="<?php echo $image[0]; ?>" alt="not found" class="img-fluid">
                                        <a href="<?php echo get_permalink(); ?>" class="explore-btn">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.4531 1.625V12.875C15.4531 13.5312 14.9375 14 14.3281 14C13.6719 14 13.2031 13.5312 13.2031 12.875V4.34375L2.375 15.1719C2.14062 15.4062 1.85938 15.5 1.57812 15.5C1.25 15.5 0.96875 15.4062 0.78125 15.1719C0.3125 14.75 0.3125 14.0469 0.78125 13.625L11.6094 2.75H3.07812C2.42188 2.75 1.95312 2.28125 1.95312 1.625C1.95312 1.01562 2.42188 0.5 3.07812 0.5H14.3281C14.9375 0.5 15.4531 1.01562 15.4531 1.625Z"
                                                      fill="white"/>
                                            </svg>
                                        </a>
                                        <div class="pf-content">
                                            <h3 class="mb-20 text-white"><a
                                                        href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <p class="mb-0 fw-medium text-white"><?php echo $project_cat_name; ?></p>
                                        </div>
                                    </div>

                                </div>
                            <?php }
                        }


                        ?>

                    </div>

                </div>
                <div class="single-item mt-5">
                    <div class="row g-4">
                        <?php
                        $featured_grid_counts = $project_query->post_count - 5;
                        if ($args) {

                            for ($i = 0; $i < 2; $i++) {
                                $project_query->the_post() && $featured_grid_counts > 0;
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id($project_query->ID), 'crete-project-big');
                                $project_cat = get_the_terms(get_the_ID(), 'project-category');
                                $project_cat_name = join(', ', wp_list_pluck($project_cat, 'name'));
                                if (!empty($category[0])) {
                                    $post_args['tax_query'] = array(
                                        array(
                                            'taxonomy' => 'project-category',
                                            'terms' => $category,
                                        )
                                    );
                                }
                                ?>
                                <div class="col-lg-6">
                                    <div class="pf-box position-relative wow fadeInUp">
                                        <img src="<?php echo $image[0]; ?>" alt="not found" class="img-fluid">
                                        <a href="<?php echo get_permalink(); ?>" class="explore-btn">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.4531 1.625V12.875C15.4531 13.5312 14.9375 14 14.3281 14C13.6719 14 13.2031 13.5312 13.2031 12.875V4.34375L2.375 15.1719C2.14062 15.4062 1.85938 15.5 1.57812 15.5C1.25 15.5 0.96875 15.4062 0.78125 15.1719C0.3125 14.75 0.3125 14.0469 0.78125 13.625L11.6094 2.75H3.07812C2.42188 2.75 1.95312 2.28125 1.95312 1.625C1.95312 1.01562 2.42188 0.5 3.07812 0.5H14.3281C14.9375 0.5 15.4531 1.01562 15.4531 1.625Z"
                                                      fill="white"/>
                                            </svg>
                                        </a>
                                        <div class="pf-content">
                                            <h3 class="mb-20 text-white"><a
                                                        href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <p class="mb-0 fw-medium text-white"><?php echo $project_cat_name; ?></p>
                                        </div>
                                    </div>

                                </div>
                            <?php }
                        }
                        $featured_grid_counts = $project_query->post_count - 7;
                        if ($args) {

                            for ($i = 0; $i < 3; $i++) {
                                $project_query->the_post() && $featured_grid_counts > 0;
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id($project_query->ID), 'crete-project-medium');
                                $project_cat = get_the_terms(get_the_ID(), 'project-category');
                                $project_cat_name = join(', ', wp_list_pluck($project_cat, 'name'));
                                ?>
                                <div class="col-lg-4">
                                    <div class="pf-box position-relative wow fadeInUp">
                                        <img src="<?php echo $image[0]; ?>" alt="not found" class="img-fluid">
                                        <a href="<?php echo get_permalink(); ?>" class="explore-btn">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.4531 1.625V12.875C15.4531 13.5312 14.9375 14 14.3281 14C13.6719 14 13.2031 13.5312 13.2031 12.875V4.34375L2.375 15.1719C2.14062 15.4062 1.85938 15.5 1.57812 15.5C1.25 15.5 0.96875 15.4062 0.78125 15.1719C0.3125 14.75 0.3125 14.0469 0.78125 13.625L11.6094 2.75H3.07812C2.42188 2.75 1.95312 2.28125 1.95312 1.625C1.95312 1.01562 2.42188 0.5 3.07812 0.5H14.3281C14.9375 0.5 15.4531 1.01562 15.4531 1.625Z"
                                                      fill="white"/>
                                            </svg>
                                        </a>
                                        <div class="pf-content">
                                            <h3 class="mb-20 text-white"><a
                                                        href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <p class="mb-0 fw-medium text-white"><?php echo $project_cat_name; ?></p>
                                        </div>
                                    </div>

                                </div>
                            <?php }
                        }
                        ?>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--portfolio section end-->
    <?php
}

function crete_project_two($settings)
{
    $item_per_page = $settings['item_per_page'];

    $args = array(
        'post_type' => 'Project',
        'post_status' => 'publish',
        'posts_per_page' => $item_per_page,
        // Several more arguments could go here. Last one without a comma.
    );
    $project_query = new WP_Query($args);

    $project_cat = get_the_terms(get_the_ID(), 'project-category');
    
    if (!empty($category[0])) {
        $post_args['tax_query'] = array(
            array(
                'taxonomy' => 'project-category',
                'terms' => $category,
            )
        );
    }

    ?>
    <!--case studies start-->
    <section class="ptb-100 case-study-area position-relative z-1 overflow-hidden">
        <div class="container">
            <div class="row justify-content-between g-4">
                <div class="col-xl-6">
                    <div class="section-title">
                        <span class="cr-subtitle position-relative primary-text-color fw-semibold"><?php echo $settings['crete_project_top_sub_text']; ?></span>
                        <h2 class="mt-4 mb-0 text-white"><?php echo $settings['crete_project_top_title_text']; ?> <span
                                    class="text-white primary-bg-color px-2"><?php echo $settings['crete_project_top_title_style_text']; ?></span></h2>
                    </div>
                </div>
                <div class="col-xl-6 align-self-end">
                    <div class="text-end d-none d-xl-block">
                        <a href="projects.html" class="template-btn secondary-btn text-white">View All Projects</a>
                    </div>
                </div>
            </div>
            <div class="case-study-box mt-80 position-relative">
                <?php
                if ($args) {
                    for ($i = 0;
                         $i < $item_per_page;
                         $i++) {
                        $project_query->the_post();
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($project_query->ID), 'crete-project-alt');
                        $project_cat = get_the_terms(get_the_ID(), 'project-category');
                        
                        ?>
                        <img src="<?php echo $image[0]; ?>" alt="case"
                             class="img-fluid case-images case-<?php echo $i; ?>">


                        <div class="case-study-single d-flex align-items-center justify-content-between gap-4 active"
                             data-case="case-<?php echo $i; ?>">
                            <div class="d-flex align-items-center gap-5 content-left">
                                <?php if ($project_cat){ 
                                $catname = $project_cat[0]->name;
                                ?>
                                <span class="tag-btn"><?php echo $catname; ?></span>
                                <?php } ?>
                                <a href="<?php echo get_permalink(); ?>"><h6
                                            class="mb-0 fw-semibold text-white text-elipsis"><?php the_title(); ?></h6></a>
                            </div>
                            <span class="date fw-medium">
                        <?php echo crete_time_ago_function(); ?>
                    </span>
                        </div>

                    <?php }
                } ?>
                <div class="text-center d-xl-none mt-5">
                    <a href="projects.html" class="template-btn secondary-btn text-white">View All Projects</a>
                </div>
            </div>
    </section>
    <!--case studies end-->
    <?php
}

function crete_project_three($settings)
{
    $item_per_page = $settings['item_per_page'];
    $args = array(
        'post_type' => 'Project',
        'post_status' => 'publish',
        'posts_per_page' => $item_per_page,
        // Several more arguments could go here. Last one without a comma.
    );
    $project_query = new WP_Query($args);

    $project_cat = get_the_terms(get_the_ID(), 'project-category');
    $project_cat_name = join(', ', wp_list_pluck($project_cat, 'name'));
//    echo "<pre>";
//    print_r($project_query);
//    echo "</pre>";
    ?>
    <!--project section start-->
    <section class="hm3-project-section ptb-100 overflow-hidden" id="projects">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="text-center">
                <span class="cr-subtitle position-relative text-white wow fadeInUp"><?php echo $settings['crete_project_top_sub_text']; ?></span>
                <h2 class="text-white mt-4 wow fadeInUp" data-wow-delay="0.2s"><?php echo $settings['crete_project_top_title_text']; ?><span
                            class="primary-bg-light text-italic px-2 fw-normal"><?php echo $settings['crete_project_top_title_style_text']; ?></span></h2>
            </div>
        </div>
    </div>
    <div class="row g-4 g-lg-5 justify-content-center mt-5">
    <?php
    if ($args) {
        for ($i = 0; $i < $item_per_page; $i++) {
            $project_query->the_post();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($project_query->ID), 'crete-project-big');
            $project_cat = get_the_terms(get_the_ID(), 'project-category');
            $project_cat_name = join(', ', wp_list_pluck($project_cat, 'name'));
            ?>

            <div class="col-md-6">
                <div class="hm3-project-single bg-white wow fadeInUp">
                    <div class="feature-image">
                        <img src="<?php echo $image[0]; ?>" alt="not found" class="img-fluid">
                    </div>
                    <div class="pr-content mt-40">
                        <span class="text-uppercase fw-medium fs-sm"><?php echo $project_cat_name; ?></span>
                        <a href="<?php echo get_permalink(); ?>"><h6 class="mb-0 mt-2"><?php the_title(); ?></h6></a>
                    </div>
                </div>
            </div>


            <?php }} ?>
            </div>
            </section>
            <!--project section end-->
            <?php
        }
        
        function crete_project_four($settings)
{
    $item_per_page = $settings['item_per_page'];
    $args = array(
        'post_type' => 'Project',
        'post_status' => 'publish',
        'posts_per_page' => $item_per_page,
        // Several more arguments could go here. Last one without a comma.
    );
    $project_query = new WP_Query($args);

    $project_cat = get_the_terms(get_the_ID(), 'project-category');
    $project_cat_name = join(', ', wp_list_pluck($project_cat, 'name'));
//    echo "<pre>";
//    print_r($project_query);
//    echo "</pre>";
    ?>
    <div class="row g-4 mt-60">
         <?php
    if ($args) {
        for ($i = 0; $i < $item_per_page; $i++) {
            $project_query->the_post();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($project_query->ID), 'crete-project-big');
            $project_cat = get_the_terms(get_the_ID(), 'project-category');
            $project_cat_name = join(', ', wp_list_pluck($project_cat, 'name'));
            ?>
                            <div class="col-xl-4 col-md-6">
                                <div class="hm4-project-single hm5-project-single">
                                    <div class="feature-image position-relative">
                                        <img src="<?php echo $image[0]; ?>" alt="not found" class="img-fluid">
                                        <a href="<?php echo get_permalink(); ?>" class="explore-btn"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    <div class="mt-32">
                                        <span class="text-white"><?php echo $project_cat_name; ?></span>
                                         <a href="<?php echo get_permalink(); ?>"><h6 class="mb-0"><?php the_title(); ?></h6></a>
                                    </div>
                                </div>
                            </div>
                    <?php }} ?>
        </div>
   
            <?php
        }