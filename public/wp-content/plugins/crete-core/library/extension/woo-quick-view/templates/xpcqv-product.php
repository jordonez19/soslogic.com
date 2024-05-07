<?php

global $post, $woocommerce, $product;
?>
<!-- close modal markup -->
<div class="modal-close">
    <a href="#" class="quick-view-close">
        <i class="ri-close-line"></i>
    </a>
</div>
<!-- close modal markup -->

<!-- product wrapper -->
<div <?php post_class('product product-wrapper'); ?>>
    <div class="row">
        <div class="col-12 col-md-5">
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('crete-product-quick-view'); ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="col-12 col-md-7">
            <div class="crete-quickv-product-details">

                <a href="<?php the_permalink(); ?>">
                    <h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
                </a>

                <div class="rating-qnty">
                    <div class="qv-rating">
                        <?php $average = $product->get_average_rating(); ?>
                        <?php echo '<div class="star-rating" title="' . sprintf(__('Rated %s out of 5', 'woocommerce'), average) . '"><span style="width:' . (($average / 5) * 100) . '%"><strong itemprop="ratingValue" class="rating">' . $average . '</strong> ' . __('out of 5', 'woocommerce') . '</span></div>'; ?>
                        <span class="qv-rating-count">(<?php echo $product->get_review_count(); ?>)</span>
                    </div>
                    <?php do_action('crete_woo_inventory_hook'); ?>
                </div>

                <?php echo maybe_unserialize($product->get_price_html()); ?>

                <?php do_action('woocommerce_single_product_quickview_summary'); ?>
                

                <div class="qv-cat">
                    <span><?php _e('Categories: ', 'crete-core'); ?></span>
                    <?php echo $product->get_categories(); ?>
                </div>
                <div class="qv-tags">
                    <span><?php _e('Tags: ', 'crete-core'); ?></span>
                    <?php echo wc_get_product_tag_list($product->get_id(), ', '); ?>
                </div>
                <div class="qv-sku">
                    <span><?php _e('Sku: ', 'crete-core'); ?></span>
                    <?php echo $product->get_sku(); ?>
                </div>

                
            </div>
        </div>
    </div>


</div>
<!-- product wrapper -->

<div class="clear quick-view-nav-wrapper">
    <?php if (!empty($prev_id)) : ?>
        <a href="#" class="button <?php echo $prev_class; ?>">Prev</a>
    <?php endif; ?>
    <?php if (!empty($next_id)) : ?>
        <a href="#" class="button <?php echo $next_class; ?>">Next</a>
    <?php endif; ?>
</div>