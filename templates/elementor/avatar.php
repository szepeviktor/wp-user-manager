<?php
/**
 * The Template for displaying the user avatar.
 *
 * This template can be overridden by copying it to yourtheme/wpum/profiles/avatar.php
 *
 * HOWEVER, on occasion WPUM will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @version 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

?>

<div id="wpum-single-profile-avatar">
	<a href="<?php echo esc_url( wpum_get_profile_url( $data->user ) ); ?>">
		<?php echo get_avatar( $data->user->ID, $data->size ); ?>
	</a>
</div>
