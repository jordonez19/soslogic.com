<?php

if( ! defined( 'ABSPATH' ) ) exit(); // Exit if accessed directly

if ( !class_exists( 'Crete_Elementor_Addons_Assests' ) ) {

    class Crete_Elementor_Addons_Assests{

        /**
         * [$_instance]
         * @var null
         */
        private static $_instance = null;

        /**
         * [instance] Initializes a singleton instance
         * @return [Crete_Elementor_Addons_Assests]
         */
        public static function instance() {
            if ( is_null( self::$_instance ) ) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        /**
         * [__construct] Class construcotr
         */
        public function __construct(){

            // Register Scripts
            add_action( 'wp_enqueue_scripts', [ $this, 'register_assets' ] );
            add_action( 'admin_enqueue_scripts', [ $this, 'register_assets' ] );

           

            add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );

        }

        /**
         * All available styles
         *
         * @return array
         */
        public function get_styles() {

            $style_list = [

                'crete-main-css' => [
                    'src'     => CRETE_PL_ASSETS . 'css/crete-elementor.css',
                    'version' => 1.1
                ],
                
            ];
            return $style_list;

        }

        /**
         * All available scripts
         *
         * @return array
         */
        public function get_scripts(){


            $script_list = [

                'crete-main-js' => [
                    'src'     => CRETE_PL_ASSETS . 'js/crete-elementor.js',
                    'version' => 1.1,
                    'deps'    => [ 'jquery' ]
                ],
                
                  'back-min' => [
                    'src'     => CRETE_PL_ASSETS . 'js/back.min.js',
                    'version' => 1.1,
                    'deps'    => [ 'jquery' ]
                ],
                
                 'global-drivers' => [
                    'src'     => CRETE_PL_ASSETS . 'js/global-dividers.min.js',
                    'version' => 1.1,
                    'deps'    => [ 'jquery' ]
                ],
                

            ];

        

            return $script_list;

        }

        /**
         * Register scripts and styles
         *
         * @return void
         */
        public function register_assets() {
            $scripts = $this->get_scripts();
            $styles  = $this->get_styles();

            // Register Scripts
            foreach ( $scripts as $handle => $script ) {
                $deps = ( isset( $script['deps'] ) ? $script['deps'] : false );
                wp_register_script( $handle, $script['src'], $deps, $script['version'], true );
            }

            // Register Styles
            foreach ( $styles as $handle => $style ) {
                $deps = ( isset( $style['deps'] ) ? $style['deps'] : false );
                wp_register_style( $handle, $style['src'], $deps, $style['version'] );
            }

            
            
        }


       

        /**
         * [enqueue_scripts]
         * @return [void] Frontend Scripts
         */
        public function enqueue_scripts(){

            // CSS
            wp_enqueue_style( 'crete-main-css' );
            

            // JS
            wp_enqueue_script( 'crete-main-js' );
           
   if(is_user_logged_in()){
            wp_enqueue_script( 'back-min' );
		$main_values = array(
			'crete_shapes' => crete_get_svg_shapes()
		);
		wp_localize_script( 'back-min', 'crete_elementor_object', $main_values );
            }
            wp_enqueue_script( 'global-drivers' );



        }

    }

    Crete_Elementor_Addons_Assests::instance();

}