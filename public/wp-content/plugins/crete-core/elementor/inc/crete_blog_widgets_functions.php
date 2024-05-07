<?php

if (!function_exists('crete_blog_post_style_one')) {
    function crete_blog_post_style_one($the_query)
    {

?>
<div class="crete-blog-section">
    <div class="crete-blog-section-container">
        <div class="row">
            <?php
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                    ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card crete-health-services-card crete-blog-position">

                    <?php if (has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('crete-blog-sthome-one'); ?></a>
                    <?php } ?>
                    <div class="card-body">
                        <div class="post-author">
                            <a class="card-text crete-p"
                                href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php esc_html_e('By ', 'crete-core'); ?><?php the_author(); ?></a>
                        </div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <a class="read-more-btn-link"
                            href="<?php the_permalink(); ?>"><?php _e('Read More', 'karte-core'); ?></a>

                        <div class="crete-blog-date">
                            <span class="blog-date-day"><?php echo get_the_date('d'); ?></span>
                            <span class="blog-date-month"><?php echo get_the_date('M'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
                    } ?>
        </div>
    </div>
</div>

<?php

    }
}



if (!function_exists('crete_blog_post_style_two')) {
    function crete_blog_post_style_two($the_query)
    { ?>

<div class="crete2-blog crete2-bg">
    <div class="crete2-blog-container">
        <div class="row">

            <?php
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                    ?>

            <div class="col-lg-6 col-md-6 col-sm-12 crete2-blog-position">
                <?php if (has_post_thumbnail()) { ?>
                <div class="crete2-blog-main-img">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('crete-blog-sthome-two'); ?></a>
                </div>
                <?php } ?>
                <div class="crete2-blog-main-container">
                    <div class="row row-cols-2">
                        <div class="col">
                            <span><i class="ri-calendar-2-line"></i> <?php echo get_the_date(); ?></span>
                        </div>
                        <div class="col">
                            <span><i class="ri-user-line"></i> <a
                                    href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                        </div>
                    </div>
                    <div class="crete2-blog-main-container-bottom">
                        <h3 class="pt-4 crete2-h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <a class="read-more-btn-link st2__link"
                            href="<?php the_permalink(); ?>"><?php _e('Read More', 'karte-core'); ?></a>
                    </div>
                </div>
            </div>

            <?php }
                    } ?>

        </div>
    </div>
</div>

<?php }
}


if (!function_exists('crete_blog_post_style_three')) {
    function crete_blog_post_style_three($the_query)
    { ?>

<div class="crete3-Blog">
    <div class="crete3-Blog-container">
        <div class="row row-2">
            <?php
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                    ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="crete3-Blog-all">
                    <?php if (has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('crete-blog-sthome-three'); ?></a>
                    <?php } ?>
                    <div class="crete3-Blog-inner">
                        <div class="post-author">
                            <a
                                href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php esc_html_e('By ', 'crete-core'); ?><?php the_author(); ?></a>
                        </div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="crete3-Blog-rm">
                            <a class="read-more-btn-link st3__link"
                                href="<?php the_permalink(); ?>"><?php _e('Read More', 'karte-core'); ?></a>
                        </div>

                    </div>
                </div>

            </div>
            <?php }
                    } ?>
        </div>
    </div>
</div>


<?php }
}

if (!function_exists('crete_blog_post_style_four')) {
    function crete_blog_post_style_four($the_query)
    { ?>

<div class="row">

    <?php
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
        ?>

    <div class="col-lg-4">
        <div class="st4-blog-single">
            <?php if (has_post_thumbnail()) { ?>
            <div class="st4-post-thumb">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('crete-blog-sthome-four'); ?></a>
            </div>
            <?php } ?>

            <div class="st4-post-meta">
                <ul>
                    <li><?php crete_post_cat(); ?></li>
                    <li><?php crete_posted_on(); ?></li>
                </ul>
            </div>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="st4-post-author">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                <span class="author-name">
                    <?php crete_posted_by(); ?>
                </span>
            </div>
        </div>
    </div>

    <?php }
                    } ?>

</div>




<?php }
}


if (!function_exists('crete_blog_post_style_five')) {
    function crete_blog_post_style_five($the_query)
    { ?>

<div class="row">
    <?php
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
        ?>
    <div class="col-lg-6">
        <div class="st5-blog-single">
            <?php if (has_post_thumbnail()) { ?>
            <div class="st5-post-thumb">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('crete-blog-sthome-four'); ?></a>
            </div>
            <?php } ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo crete_get_excerpt_alt(150); ?></p>
            <div class="st5-post-meta">
                <ul>
                    <li><i class="ri-briefcase-line"></i> <?php crete_post_cat(); ?></li>
                    <li><i class="ri-calendar-2-line"></i> <?php crete_posted_on(); ?></li>
                    <li><i class="ri-user-line"></i> <span class="pby"><?php esc_html_e('By', 'crete-core'); ?></span>
                        <?php crete_posted_by(); ?></li>
                </ul>
            </div>
        </div>
    </div>

    <?php }
            } ?>

</div>

<?php }
}



if (!function_exists('crete_blog_post_style_six')) {
    function crete_blog_post_style_six($the_query)
    { ?>

<div class="row">
    <?php
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
        ?>
    <div class="col-lg-4">
        <div class="st6-blog-single st5-blog-single">
            <?php if (has_post_thumbnail()) { ?>
            <div class="st5-post-thumb">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('crete-blog-sthome-four'); ?></a>
            </div>
            <?php } ?>
           
            
            <div class="st6-post-meta">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <ul>
                    <li> <?php crete_post_cat(); ?></li>
                    <li> <?php crete_posted_on(); ?> <i class="ri-arrow-right-line"></i></li>
                    
                </ul>
            </div>
        </div>
    </div>

    <?php }
            } ?>

</div>

<?php }
}