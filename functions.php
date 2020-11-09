/* Load Child Theme Language Files */
function nxt_translations() {
	// load custom translation file for the parent theme
	load_child_theme_textdomain( 'Divi', get_stylesheet_directory() . '/lang' );
	load_child_theme_textdomain( 'et_builder', get_stylesheet_directory() . '/lang/builder' );
}
add_action( 'after_setup_theme', 'nxt_translations');
