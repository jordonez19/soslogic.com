<?php
/**
 *  Add Dynamic css to header
 * @version    1.0
 * @author        Teconce
 * @URI        http://teconce.com
 */




  /**
	 * Add extension CSS.
	 */
       function crete_dynamic_css() {
           
           ob_start();
           $crete_options = get_option( 'crete_options' );
           $primarycolor = !empty($crete_options['color-set']['primary_color'])? $crete_options['color-set']['primary_color']: '#5044EB';
            $primarytxcolor = !empty($crete_options['color-set']['primary-text-color'])? $crete_options['color-set']['primary-text-color']: '';
            $secndcolor = !empty($crete_options['color-set']['secondary-color'])? $crete_options['color-set']['secondary-color']: '#f36a07';
            $secndtxtcolor = !empty($crete_options['color-set']['secondary-text-color'])? $crete_options['color-set']['secondary-text-color']: '';
            
            $backtopborder = (! empty( $crete_options['backto_top_bt_border'] ) ) ? $crete_options['backto_top_bt_border'] : '';
            
            
             $globalwdth1400 = !empty($crete_options['gloabal_width_1400'])? $crete_options['gloabal_width_1400']: '';
             $globalwdth1200 = !empty($crete_options['gloabal_width_1200'])? $crete_options['gloabal_width_1200']: '';
             
              $altfontfamily = !empty($crete_options['alt_typo']['font-family'] )? $crete_options['alt_typo']['font-family'] : '';
              $maintxtcolor =  !empty($crete_options['color-set']['main_text_colot'] )? $crete_options['color-set']['main_text_colot'] : '';
              $altcolortxt = !empty($crete_options['alter_text_color'] )? $crete_options['alter_text_color'] : '';
              $lightcolor = !empty($crete_options['light_color'])? $crete_options['light_color'] : '';
              $elementorwdthebl= !empty($crete_options['elementor-width-overwrite'])? $crete_options['elementor-width-overwrite'] : '';
              $elementorwdthmain= !empty($crete_options['overwrite-elem-width'] )? $crete_options['overwrite-elem-width'] : '';
             $srcbtnclr= !empty($crete_options['elementor_content']['search_icon_clr'] )? $crete_options['elementor_content']['search_icon_clr'] : '';
             
             
             
             $creteglobaledit = !empty($crete_options['crete_global_color'] )? $crete_options['crete_global_color'] : '';
             
             $cretebordercolor = !empty($crete_options['crete--border-color'] )? $crete_options['crete--border-color'] : '';
             
             $cretebordergray = !empty($crete_options['crete--border-gray'] )? $crete_options['crete--border-gray'] : '';
             
             $creteborderdark = !empty($crete_options['crete--border-dark'] )? $crete_options['crete--border-dark'] : '';
             
             $cretewhitecolor = !empty($crete_options['crete--white-color'] )? $crete_options['crete--white-color'] : '';
             
             $cretelightcolor = !empty($crete_options['crete--light-color'] )? $crete_options['crete--light-color'] : '';
             
             $cretelightbg = !empty($crete_options['crete--light-bg'] )? $crete_options['crete--light-bg'] : '';
             
             $cretegraycolor= !empty($crete_options['crete--gray-color'] )? $crete_options['crete--gray-color'] : '';
             
             $cretegray100 = !empty($crete_options['crete--gray-100'] )? $crete_options['crete--gray-100'] : '';
             
             $cretegray200 = !empty($crete_options['crete--gray-200'] )? $crete_options['crete--gray-200'] : '';
             
             $cretegray100 = !empty($crete_options['crete--gray-100'] )? $crete_options['crete--gray-100'] : '';
             
             $cretelightstroke= !empty($crete_options['crete--light-stroke'] )? $crete_options['crete--light-stroke'] : '';
             
             $creteblack= !empty($crete_options['crete--black-color'] )? $crete_options['crete--black-color'] : '';
             
             $creteblacklight = !empty($crete_options['crete--black-light'] )? $crete_options['crete--black-light'] : '';
             
             $cretelightwhite = !empty($crete_options['crete--light-white'] )? $crete_options['crete--light-white'] : '';
             
             $creteseacolor = !empty($crete_options['crete--sea-color'] )? $crete_options['crete--sea-color'] : '';
             
             $creteheadingcolor = !empty($crete_options['crete--heading-color-d'] )? $crete_options['crete--heading-color-d'] : '';
             
             
             
		?>
		
	
	:root {
          --template-font: 'Albert Sans', sans-serif;
          --heading-font: 'Albert Sans', sans-serif;
          --theme-primary-color: <?php echo $primarycolor;?>;
          --secondary-color: <?php echo $secndcolor;?>;
          --text-color: <?php echo $maintxtcolor;?>;
          --primary-light: rgba(59, 56, 235, 0.1);
          <?php if ($creteglobaledit){?>
           --headings-color: <?php echo $creteheadingcolor;?>;
          --theme-border-color: <?php echo $cretebordercolor;?>;
          --border-gray: <?php echo $cretebordergray;?>;
          --border-dark: <?php echo $creteborderdark;?>;
          --white-color: <?php echo $cretewhitecolor;?>;
          --light-color: <?php echo $cretelightcolor;?>;
          --light-bg: <?php echo $cretelightbg;?>;
          --light-bg-2: <?php echo $cretelightbg;?>;
          --gray-color: <?php echo $cretegraycolor;?>;
          --gray-100: <?php echo $cretegray100;?>;
          --gray-200: <?php echo $cretegray200;?>;
          --light-stroke: <?php echo $cretelightstroke;?>;
          --black-color: <?php echo $creteblack;?>;
          --black-light: <?php echo $creteblacklight;?>;
          --light-white: <?php echo $cretelightwhite;?>;
          --sea-color: <?php echo $creteseacolor;?>;
          	<?php } ?>
          }

	 
@media (min-width: 1200px){
    .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
        max-width: <?php echo esc_html($globalwdth1200);?>px;
    }
}

  @media (min-width: 1400px){
    .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
        max-width: <?php echo esc_html($globalwdth1400);?>px;
    }
}

<?php if($elementorwdthebl){ ?>
.elementor-section.elementor-section-boxed > .elementor-container{
 max-width: <?php echo esc_html($elementorwdthmain);?>px !important;
 }
<?php } ?>

.progress-wrap{
    box-shadow: inset 0 0 0 2px <?php echo esc_html($backtopborder);?>;
}

	    <?php
		$output = ob_get_clean();

		if ( ! $output ) {
			return;
		}

		$css  = '<style id="crete-swatches-css" type="text/css">';
		$css .= $output;
		$css .= '</style>';

		echo crete_compress_css_lines( $css ); 
	}

add_action('wp_head', 'crete_dynamic_css');