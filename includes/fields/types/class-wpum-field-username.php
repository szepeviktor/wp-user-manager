<?php
/**
 * Registers a username field for the forms.
 *
 * @package     wp-user-manager
 * @copyright   Copyright (c) 2018, Alessandro Tesoro
 * @license     https://opensource.org/licenses/GPL-3.0 GNU Public License
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register a text field type.
 */
class WPUM_Field_Username extends WPUM_Field_Text {

	/**
	 * Hook into the main class and register a new field.
	 *
	 * @return void
	 */
	public function init() {

		// Define field type information.
		$this->group = 'default';
		$this->name  = esc_html__( 'Username' );
		$this->type  = 'username';
		$this->icon  = 'dashicons-editor-textcolor';
		$this->order = 3;

	}

}

new WPUM_Field_Username();
