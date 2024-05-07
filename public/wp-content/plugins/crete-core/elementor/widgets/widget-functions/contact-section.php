<?php
function crete_contact_style_one($settings){
    $subtitle = $settings['crete_contact_sub'];
$title = $settings['crete_contact_title'];
$desc = $settings['crete_contact_desc'];
$cfshortcode = $settings['crete_contact_form'];
$formtitle = $settings['crete_form_title'];
$titlestyle = $settings['crete_form_title_after'];
$email = $settings['crete_info_email'];
$phone = $settings['crete_info_phone'];
$address = $settings['crete_info_address'];

$emaillabel = $settings['crete_label_email'];
$phonelabel = $settings['crete_label_phone'];
$addresslabel = $settings['crete_label_address'];
    ?>


<!--contact section start-->
<section class="contact-section dark-bg-color ptb-100 position-relative z-1 overflow-hidden">
    <span class="circle-shape position-absolute z--1 rounded-circle"></span>
    <span class="circle-shape-2 position-absolute z--1 rounded-circle"></span>
    <span class="circle-shape-3 position-absolute z--1 rounded-circle"></span>
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-xl-6">
                <div class="contact-info">
                    <?php if ($subtitle) { ?>
                        <span class="cr-subtitle text-white position-relative fw-semibold wow fadeInUp d-inline-block"><?php echo $subtitle;?></span>
                    <?php } ?>
                    <?php if ($title) { ?>
                        <h2 class="mb-4 mt-4 text-white wow fadeInUp" data-wow-delay="0.2s"><?php echo $title;?></h2>
                    <?php } ?>
                    <?php if($desc){ ?>
                        <p class="lead fw-medium wow fadeInUp" data-wow-delay="0.3s"><?php echo $desc;?></p>
                    <?php } ?>
                    <ul class="contact-info-list mt-5">
                        <?php if($email){ ?>
                            <li class="d-flex align-items-center gap-4 wow fadeInUp" data-wow-delay="0.1s">
                                <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle bg-white flex-shrink-0">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/mail.svg" alt="mail" class="img-fluid">
                                </span>
                                <div>
                                    <span class="fw-medium fs-xl"><?php echo $emaillabel;?></span>
                                    <a href="mailto:<?php echo $email;?>"><h6 class="mb-0 text-white fw-semibold mt-1"><?php echo $email;?></h6></a>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if($phone){ ?>
                            <li class="d-flex align-items-center gap-4 wow fadeInUp" data-wow-delay="0.2s">
                                <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle bg-white flex-shrink-0">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/phone.svg" alt="phone" class="img-fluid">
                                </span>
                                <div>
                                    <span class="fw-medium fs-xl"><?php echo $phonelabel;?></span>
                                    <a href="tel:<?php echo $phone;?>"><h6 class="mb-0 text-white fw-semibold mt-1"><?php echo $phone;?></h6></a>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if($address){ ?>
                            <li class="d-flex align-items-center gap-4 wow fadeInUp" data-wow-delay="0.3s">
                                <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle bg-white flex-shrink-0">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/location.svg" alt="address" class="img-fluid">
                                </span>
                                <div>
                                    <span class="fw-medium fs-xl"><?php echo $addresslabel;?></span>
                                    <h6 class="mb-0 text-white fw-semibold mt-1"><?php echo $address;?></h6>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="contact-form-box bg-white">
                    <?php if ($formtitle){ ?>
                        <h3 class="mb-32 cf-side-title-crete"><?php echo $formtitle;?> <?php if($titlestyle){ ?><span class="primary-bg-light primary-text-color px-2"><?php echo $titlestyle; ?></span><?php } ?></h3>
                    <?php } ?>
                    <?php echo do_shortcode($cfshortcode);?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact section end-->
<?php
}
function crete_contact_style_two($settings){

    $subtitle = $settings['crete_contact_sub'];
    $title = $settings['crete_contact_title'];
    $desc = $settings['crete_contact_desc'];
    $cfshortcode = $settings['crete_contact_form'];
    $formtitle = $settings['crete_form_title'];
    $titlestyle = $settings['crete_form_title_after'];
    $email = $settings['crete_info_email'];
    $phone = $settings['crete_info_phone'];
    $address = $settings['crete_info_address'];
    $map = $settings['crete_contact_map'];
    ?>
    <!--contact form area start-->
    <section class="contact-form-area ptb-100 bg-light-white position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="ct-left">
                        <?php if ($subtitle) { ?>
                            <span class="cr-subtitle text-white position-relative fw-semibold wow fadeInUp d-inline-block"><?php echo $subtitle;?></span>
                        <?php } ?>
                        <?php if ($title) { ?>
                            <h2 class="mb-4 mt-4 text-white wow fadeInUp" data-wow-delay="0.2s"><?php echo $title;?></h2>
                        <?php } ?>

                        <?php echo do_shortcode($cfshortcode);?>
                    </div>
                </div>
            </div>
        </div>
        <div class="google-map">
            <?php echo $map;?>

        </div>
    </section>
    <!--contact form area end-->
<?php
    }
function crete_contact_style_three($settings){
    $subtitle = $settings['crete_contact_sub'];
$title = $settings['crete_contact_title'];
$desc = $settings['crete_contact_desc'];
$cfshortcode = $settings['crete_contact_form'];
$formtitle = $settings['crete_form_title'];
$titlestyle = $settings['crete_form_title_after'];
$email = $settings['crete_info_email'];
$phone = $settings['crete_info_phone'];
$address = $settings['crete_info_address'];

$emaillabel = $settings['crete_label_email'];
$phonelabel = $settings['crete_label_phone'];
$addresslabel = $settings['crete_label_address'];
    ?>


<!--contact section start-->
<section class="contact-section hm5-contact-section contact_box position-relative">
    
    <div class="container-1660">
        <div class="row align-items-center g-5">
             <div class="col-xl-6">
                <div class="contact-form-box">
                    <?php if ($formtitle){ ?>
                        <h3 class="mb-32 cf-side-title-crete"><?php echo $formtitle;?> <?php if($titlestyle){ ?><span class="primary-bg-light primary-text-color px-2"><?php echo $titlestyle; ?></span><?php } ?></h3>
                    <?php } ?>
                    <?php echo do_shortcode($cfshortcode);?>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="contact-info">
                    <?php if ($subtitle) { ?>
                        <span class="cr-subtitle text-white position-relative fw-semibold d-inline-block"><?php echo $subtitle;?></span>
                    <?php } ?>
                    <?php if ($title) { ?>
                        <h2 class="mb-4 mt-4 text-white" ><?php echo $title;?></h2>
                    <?php } ?>
                    <?php if($desc){ ?>
                        <p class="lead fw-medium" ><?php echo $desc;?></p>
                    <?php } ?>
                    <ul class="contact-info-list mt-5">
                        <?php if($email){ ?>
                            <li class="d-flex align-items-center gap-4">
                                <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle bg-white flex-shrink-0">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/mail.svg" alt="mail" class="img-fluid">
                                </span>
                                <div>
                                    <span class="fw-medium fs-xl"><?php echo $emaillabel;?></span>
                                    <a href="mailto:<?php echo $email;?>"><h6 class="mb-0 text-white fw-semibold mt-1"><?php echo $email;?></h6></a>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if($phone){ ?>
                            <li class="d-flex align-items-center gap-4">
                                <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle bg-white flex-shrink-0">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/phone.svg" alt="phone" class="img-fluid">
                                </span>
                                <div>
                                    <span class="fw-medium fs-xl"><?php echo $phonelabel;?></span>
                                    <a href="tel:<?php echo $phone;?>"><h6 class="mb-0 text-white fw-semibold mt-1"><?php echo $phone;?></h6></a>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if($address){ ?>
                            <li class="d-flex align-items-center gap-4">
                                <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle bg-white flex-shrink-0">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/location.svg" alt="address" class="img-fluid">
                                </span>
                                <div>
                                    <span class="fw-medium fs-xl"><?php echo $addresslabel;?></span>
                                    <h6 class="mb-0 text-white fw-semibold mt-1"><?php echo $address;?></h6>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
           
        </div>
         <div class="hm5-map-box position-relative mt-120">
             <?php echo $settings['crete_contact_map'];?>
                        
                    </div>
    </div>
</section>
<!--contact section end-->
<?php
}