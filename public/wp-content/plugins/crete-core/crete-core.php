<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              teconce.com
 * @since             1.0.0
 * @package           Crete-core
 *
 * @wordpress-plugin
 * Plugin Name:       Crete Core
 * Plugin URI:        teconce.com/crete-core
 * Description:       This is the core plugin for crete theme.
 * Version:           1.4.3
 * Author:            Teconce
 * Author URI:        teconce.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       crete-core
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('CRETE_CORE_VERSION', '1.4.3');


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-crete-core-activator.php
 */
function activate_crete_core() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-crete-core-activator.php';
    Crete_Core_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-crete-core-deactivator.php
 */
function deactivate_crete_core() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-crete-core-deactivator.php';
    Crete_Core_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_crete_core');
register_deactivation_hook(__FILE__, 'deactivate_crete_core');

$crete_options = get_option('crete_options');
$maintenancemode = (!empty($crete_options['maintenance_mode'])) ? $crete_options['maintenance_mode'] : '';
$nightmodeebl = (!empty($crete_options['sp_night_mode_ebl'])) ? $crete_options['sp_night_mode_ebl'] : '';
$woo_plugin_path = trailingslashit(WP_PLUGIN_DIR) . 'woocommerce/woocommerce.php';
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-crete-core.php';
require plugin_dir_path(__FILE__) . 'elementor/class-elementor-main.php';
require plugin_dir_path(__FILE__) . 'library/crete-cpt.php';
require plugin_dir_path(__FILE__) . 'library/codestar/codestar-framework.php';
require plugin_dir_path(__FILE__) . 'library/theme-options/theme-options.php';
require plugin_dir_path(__FILE__) . 'library/theme-options/theme-panels.php';
require plugin_dir_path(__FILE__) . 'library/crete-helper.php';
require plugin_dir_path(__FILE__) . 'library/crete-rating.php';
require plugin_dir_path(__FILE__) . 'library/crete-custom-css.php';
require plugin_dir_path(__FILE__) . 'library/license/Crete.php';


require plugin_dir_path(__FILE__) . 'library/theme-options/extends/custom-color-options.php';
require plugin_dir_path(__FILE__) . 'library/theme-options/extends/custom-gradient-options.php';
require plugin_dir_path(__FILE__) . 'library/theme-options/extends/custom-color-group.php';

require plugin_dir_path(__FILE__) . 'library/metabox/page-meta.php';
require plugin_dir_path(__FILE__) . 'library/metabox/pricing-table-meta.php';
require plugin_dir_path(__FILE__) . 'library/metabox/user-meta.php';
require plugin_dir_path(__FILE__) . 'library/metabox/team-meta.php';
require plugin_dir_path(__FILE__) . 'library/metabox/blog-meta.php';
require plugin_dir_path(__FILE__) . 'library/metabox/case-study-meta.php';


require plugin_dir_path(__FILE__) . 'library/custom-options-helper.php';

require plugin_dir_path(__FILE__) . 'library/custom-fonts/custom-font-functions.php';
if ($nightmodeebl) {
    require plugin_dir_path(__FILE__) . 'library/extension/sp-night-mode/sp-night-mode.php';
}

if ($maintenancemode) {
    require plugin_dir_path(__FILE__) . 'library/maintenance/maintenance.php';
}

require plugin_dir_path(__FILE__) . 'library/widgets/company-information.php';
require plugin_dir_path(__FILE__) . 'library/widgets/about.php';
require plugin_dir_path(__FILE__) . 'library/widgets/search.php';
require plugin_dir_path(__FILE__) . 'library/widgets/tags.php';
require plugin_dir_path(__FILE__) . 'library/widgets/category.php';
require plugin_dir_path(__FILE__) . 'library/widgets/recent-post.php';
require plugin_dir_path(__FILE__) . 'library/widgets/custom-widget.php';
require plugin_dir_path(__FILE__) . 'library/widgets/contact-widget.php';

if (
in_array($woo_plugin_path, wp_get_active_and_valid_plugins())
) {

    require plugin_dir_path(__FILE__) . 'library/extension/crete-live-search/product-search.php';
    require plugin_dir_path(__FILE__) . 'library/extension/woo-stuffs/wishlist.php';
    require plugin_dir_path(__FILE__) . 'library/extension/woo-sale-countdown/woo-sale-countdown.php';
    require plugin_dir_path(__FILE__) . 'library/extension/woo-quick-view/init.php';

}


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_crete_core() {

    $plugin = new Crete_Core();
    $plugin->run();

}

run_crete_core();

