<?php

/**
 * Custom Font Family
 */
if ( ! function_exists( 'crete_custom_font_load' ) ) {
  function crete_custom_font_load() {

    $font_family       = cs_get_option( 'font_family' );

    ob_start();

    if( ! empty( $font_family ) ) {

      foreach ( $font_family as $font ) {
        echo '@font-face{';

        echo 'font-family: "'. $font['name'] .'";';

        if( empty( $font['css'] ) ) {
          echo 'font-style: normal;';
          echo 'font-weight: normal;';
        } else {
          echo wp_kses( $font['css'], 'post' );
        }

        echo ( ! empty( $font['ttf']  ) ) ? 'src: url('. $font['ttf'] .');' : '';
        echo ( ! empty( $font['eot']  ) ) ? 'src: url('. $font['eot'] .');' : '';
        echo ( ! empty( $font['svg']  ) ) ? 'src: url('. $font['svg'] .');' : '';
        echo ( ! empty( $font['woff'] ) ) ? 'src: url('. $font['woff'] .');' : '';
        echo ( ! empty( $font['otf']  ) ) ? 'src: url('. $font['otf'] .');' : '';

        echo '}';
      }

    }

    // Typography
    $output = ob_get_clean();
    return $output;
  }
}

/* Custom Styles */
if( ! function_exists( 'crete_custom_css' ) ) {
  function crete_custom_css() {
    wp_enqueue_style('crete-default-style', get_template_directory_uri() . '/style.css');
    $output  = crete_custom_font_load();
    //$output .= crete_dynamic_styles();
    $custom_css = crete_compress_css_lines( $output );

    wp_add_inline_style( 'crete-default-style', $custom_css );
   
  }
  add_action( 'wp_enqueue_scripts', 'crete_custom_css' );
}
