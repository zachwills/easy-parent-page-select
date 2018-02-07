<?php
/**
 * Plugin Name: Easy Parent Page Select
 * Description: Converts the default WordPress dropdown for parent page selection to a searchable field. Useful for sites with dozens or more pages to choose from.
 * Author:      Codivated LLC
 * Author URI:  https://www.codivated.com/
 * Text Domain: easy-parent-select
 * Version:     1.0
 */

function epps_enqueue_scripts() {
	wp_enqueue_script( 'chosen', 'https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.3/chosen.jquery.min.js', [ 'jquery' ] );
	wp_enqueue_style( 'chosen', 'https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.3/chosen.min.css' );
}
add_action( 'admin_enqueue_scripts', 'epps_enqueue_scripts' );

function epps_add_chosen() {
	?>
    <script>
        ;(function ( $ ) {
            $( '#page_template' ).chosen();
            $( '#parent_id' ).chosen();
        })( jQuery );
    </script>
	<?php
}
add_action( 'admin_footer', 'epps_add_chosen' );
