<?php
/**
 * Default Metadata Modification class.
 *
 * @since 1.0.0
 * @package ubc-h5p-default-metadata-modification
 */

namespace UBC\H5P\DefaultMetadata;

/**
 * Class to initiate default metadata modification functionalities
 */
class DefaultMetadata {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		add_action( 'load-h5p-content_page_h5p_new', array( $this, 'enqueue_add_new_content_script' ), 10 );
	}

	/**
	 * Load assets for h5p new content page.
	 *
	 * @return void
	 */
	public function enqueue_add_new_content_script() {
		if ( ! ( isset( $_GET['page'] ) && 'h5p_new' === $_GET['page'] ) ) {
			return;
		}

		wp_enqueue_script(
			'ubc-h5p-default-metadata-js',
			H5P_DEFAULT_METADATA_PLUGIN_URL . 'assets/dist/js/h5p-new.js',
			array(),
			filemtime( H5P_DEFAULT_METADATA_PLUGIN_DIR . 'assets/dist/js/h5p-new.js' ),
			true
		);
	}//end enqueue_add_new_content_script()
}

new DefaultMetadata();
