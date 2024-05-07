<?php
get_header('blank');

 $crete_options = get_option( 'crete_options' );
$overlay = $crete_options['maintenance_mode_overlay'];
$logo = $crete_options['maintenance_logo']['url'];
$time = $crete_options['man_time_select'];
$sshortcode = $crete_options['maintenance_shortcode'];
$title = $crete_options['maintenance_title'];
$style = $crete_options['maintenance_style'];

$ovclass="";
if($overlay){
    $ovclass="moverlay";
}
?>
<div class="crete-mainteannce-box <?php echo esc_html($ovclass);?>">
    <div class="container">
        
        <?php if($style=="style2"){ ?>
        
         <div class="crete-maintenance-style1 position-relative">
              <svg class="styletwoicon stone2ic1 medi-anim_one">
  <use xlink:href="#style2sp1"></use>
</svg>

 <svg class="styletwoicon stone2ic2 medi-anim_five">
  <use xlink:href="#style2sp2"></use>
</svg>


 <svg class="styletwoicon stone2ic3 medi-anim_three">
  <use xlink:href="#style2sp3"></use>
</svg>

 <svg class="styletwoicon stone2ic4 medi-anim_two">
  <use xlink:href="#style2sp4"></use>
</svg>
            <div class="mm-main-box">
                <?php if($logo){?>
                <img src="<?php echo esc_url($logo);?>" alt="maintenance logo">
                <?php } ?>
                <?php if($title) { ?>
                <h1><?php echo esc_html($title);?></h1>
                <?php } ?>
                <div class="crete_countdown">
                    <?php echo esc_html($time);?>
                </div>
                <div class="maintenance-subscription-shortocde">
                    <?php echo do_shortcode($sshortcode);?>
                </div>
            </div>
        </div>
        
        
        
        <?php } else { ?>
        
        <svg class="styleoneicon stoneic1 medi-anim_one">
          <use xlink:href="#styleoneS1"></use>
        </svg>
        
        <svg class="styleoneicon stoneic2 medi-anim_two">
          <use xlink:href="#styleoneS2"></use>
        </svg> 
        
       
        
        <div class="crete-maintenance-style1 position-relative">
              <svg class="styleoneicon stoneic3 medi-anim_three">
          <use xlink:href="#styleoneS3"></use>
        </svg> 
            <div class="mm-main-box">
                <?php if($logo){?>
                <img src="<?php echo esc_url($logo);?>" alt="maintenance logo">
                <?php } ?>
                <?php if($title) { ?>
                <h1><?php echo esc_html($title);?></h1>
                <?php } ?>
                <div class="crete_countdown">
                    <?php echo esc_html($time);?>
                </div>
                <div class="maintenance-subscription-shortocde">
                    <?php echo do_shortcode($sshortcode);?>
                </div>
            </div>
        </div>
        <?php } ?>
        
    </div>
</div>
    
<?php

get_footer('blank');?>
