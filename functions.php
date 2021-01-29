<?php
/**
 * COPY THIS CODE IN "functions.php" FILE, LOCATED IN ROOT DIRECTORY OF THE USED THEME
 * For example : wp-content\themes\Divi-child\functions.php
 */

/**
** display event details in The Event Calendar list widget
**/
add_action( 'tribe_events_list_widget_after_the_meta', function() {echo '<div class="list-detail">'; echo the_content(); echo '</div>'; } );