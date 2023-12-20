<?php


register_block_pattern_category(
	'mirror-magazine',
	array( 'label' => __( 'Mirror Magazine', 'mirror-magazine' ) )
);

add_action('init', function() {
	remove_theme_support('core-block-patterns');
});

add_theme_support( 'wp-block-styles' );

function mirror_magazine_pattern_styles()
{
	wp_enqueue_style('mirror-magazine-patterns', get_stylesheet_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('mirror-magazine-editor', get_stylesheet_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'mirror_magazine_pattern_styles');