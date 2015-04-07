<?php
/**
 * @package   WordCamp_Belohorizonte_Badges
 * @author    Myles McNamara <myles@smyl.es>
 * @license   GPL-2.0+
 * @link      http://smyl.es
 * @copyright 2015 Myles McNamara
 *
 * @wordpress-plugin
 * Plugin Name: WordCamp Belo Horizonte Badges
 * Plugin URI:  https://github.com/valeriosouza/wordcamp-belo-horizonte-badges
 * Description: Display 2015 WordCamp Belo Horizonte badges on your site with Shortcode or Widget
 * Version:     1.1.0
 * Author:      Valerio Souza
 * Author URI:  http://valeriosouza.com.br
 * Text Domain: wordcamp-belohorizonte-badges
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: valeriosouza/wordcamp-belohorizonte-badges
 * GitHub Branch:   master
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-wordcamp-belohorizonte-badges.php' );

require_once( plugin_dir_path( __FILE__ ) . '/includes/widget-wordcamp_belohorizonte_badge.php' );

// Register hooks that are fired when the plugin is activated or deactivated.
// When the plugin is deleted, the uninstall.php file is loaded.
register_activation_hook( __FILE__, array( 'WordCamp_Belohorizonte_Badges', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'WordCamp_Belohorizonte_Badges', 'deactivate' ) );

// Load instance
add_action( 'plugins_loaded', array( 'WordCamp_Belohorizonte_Badges', 'get_instance' ) );
//WordCamp_Belohorizonte_Badges::get_instance();

?>
