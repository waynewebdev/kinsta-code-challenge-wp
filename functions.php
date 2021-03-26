// Activate shortcode function in Post Title
add_filter( 'the_title', 'do_shortcode' );

// Shortcode to display the current language
// shortcode: [kinsta-language]
add_shortcode( 'kinsta-language' , 'kinsta_display_language' );
    function kinsta_display_language() {
		$current_language = get_locale();
		if( $current_language == 'en_US' ){
			$language = 'Kinsta English';
		} elseif( $current_language == 'fr_FR' ) {
			$language = 'Kinsta French';
		} elseif( $current_language == 'es_MX' || $current_language == 'es_ES' ) {
			$language = 'Kinsta Spanish';
		} else {
			$language = 'Kinsta';
		}
    return "$language";
}
