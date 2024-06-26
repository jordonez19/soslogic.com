<?php

if(!defined('ABSPATH')) exit;
if(!class_exists('CRETE_MAINTENANCE'))
{
    class CRETE_MAINTENANCE
    {
        var $plugin_version = '1.0.3';
        var $plugin_url;
        var $plugin_path;
        function __construct()
        {
            define('CRETE_MAINTENANCE_VERSION', $this->plugin_version);
            define('CRETE_MAINTENANCE_SITE_URL',site_url());
            define('CRETE_MAINTENANCE_URL', $this->plugin_url());
            define('CRETE_MAINTENANCE_PATH', $this->plugin_path());
            $this->plugin_includes();
        }
        function plugin_includes()
        {
        
            add_action('template_redirect', array($this, 'cretem_template_redirect'));
        }
       
        function plugin_url()
        {
            if($this->plugin_url) return $this->plugin_url;
            return $this->plugin_url = plugins_url( basename( plugin_dir_path(__FILE__) ), basename( __FILE__ ) );
        }
        function plugin_path(){ 	
            if ( $this->plugin_path ) return $this->plugin_path;		
            return $this->plugin_path = untrailingslashit( plugin_dir_path( __FILE__ ) );
        }
        function is_valid_page() {
            return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
        }
        function cretem_template_redirect()
        {
            if(is_user_logged_in()){
                //do not display maintenance page
            }
            else
            {
                if( !is_admin() && !$this->is_valid_page()){  //show maintenance page
                    $this->load_sm_page();
                }
            }
        }
        function load_sm_page()
        {
            header('HTTP/1.0 503 Service Unavailable');
            include_once("svg-sprite.php");
            include_once("mm-template.php");
            exit();
        }
    }
    $GLOBALS['crete_maintenance'] = new CRETE_MAINTENANCE();
}
