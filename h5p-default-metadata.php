<?php
/**
 * UBC H5P Addon - Default Metadata Modification
 *
 * @package     UBC H5P
 * @author      Kelvin Xu
 * @copyright   2021 University of British Columbia
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: UBC H5P Addon - Default Metadata Modification
 * Plugin URI:  https://ubc.ca/
 * Description: Modify the default value of h5p content metadata.
 * Version:     1.0.1
 * Author:      Kelvin Xu
 * Text Domain: ubc-h5p-addon-default-metadata-modification
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

namespace UBC\H5P\DefaultMetadata;

define( 'H5P_DEFAULT_METADATA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'H5P_DEFAULT_METADATA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Plugin initialization
 *
 * @return void
 */
function init() {
	require_once 'includes/class-defaultmetadata.php';
}

add_action( 'admin_init', __NAMESPACE__ . '\\init' );
