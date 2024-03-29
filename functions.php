<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

// Get Bones Core Up & Running!
require_once('library/bones.php'); // don't touch this


// Shortcodes
require_once('library/shortcodes.php'); // or this


// TGM Plugin Activation
require_once('library/tgm-plugin-activation.php'); // this one too


// Set content width
if ( ! isset( $content_width ) ) $content_width = 580;


// Thumbnail sizes
add_image_size( 'jwdmc-featured', 780, 400, true );


// Sidebars & Widgetizes Areas
function jwdmc_register_sidebars() {
	register_sidebar(array(
		'id'            => 'sidebar1',
		'name'          => 'Main Sidebar',
		'description'   => 'The default sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
		));
	register_sidebar(array(
		'id'            => 'Homepage Sidebar',
		'description'   => 'Used only on the homepage.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
		));
	register_sidebar(array(
		'id'            => 'footer1',
		'name'          => 'Footer 1',
		'before_widget' => '<div id="%1$s" class="widget col-sm-4 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
		));
	register_sidebar(array(
		'id'            => 'footer2',
		'name'          => 'Footer 2',
		'before_widget' => '<div id="%1$s" class="widget col-sm-4 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
		));
	register_sidebar(array(
		'id'            => 'footer3',
		'name'          => 'Footer 3',
		'before_widget' => '<div id="%1$s" class="widget col-sm-4 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
		));
} // don't touch this bracket!


// Register the required plugins for this theme.
function my_theme_register_required_plugins() {

	$plugins = array(
		array(
			'name'     => 'Advanced Custom Fields',
			'slug'     => 'advanced-custom-fields',
			'required' => false,
			),
		array(
			'name'     => 'Regenerate Thumbnails',
			'slug'     => 'regenerate-thumbnails',
			'required' => false,
			),
		array(
			'name'     => 'WooCommerce - excelling eCommerce',
			'slug'     => 'woocommerce',
			'required' => false,
			),
		array(
			'name'     => 'Wordfence Security',
			'slug'     => 'wordfence',
			'required' => false,
			),
		array(
			'name'     => 'WordPress SEO by Yoast',
			'slug'     => 'wordpress-seo',
			'required' => false,
			),
		array(
			'name'     => 'Simple 301 Redirects',
			'slug'     => 'simple-301-redirects',
			'required' => false,
			),
	);

	$config = array(
		'default_path' => '',                      // Default absolute path to pre-packaged plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
			'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
			'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
			'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
			'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
			'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
			'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
			'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
			'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
			'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
			'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
			'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
			'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
			'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
			'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
			'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		)
	);

	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );


// Comment Layout
function jwdmc_comments( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<div class="comment-author vcard clearfix">
				<div class="avatar col-sm-3">
					<?php echo get_avatar( $comment, $size='85' ); ?>
				</div>
				<div class="col-sm-9 comment-text">
					<?php printf('<h4>%s</h4>', get_comment_author_link()) ?>

					<?php edit_comment_link(__('Edit','jwdmc'),'<span class="edit-comment btn btn-sm btn-default"><i class="fa fa-pencil"></i>','</span>') ?>

					<?php if ( $comment->comment_approved == '0' ) : ?>
						<div class="alert-message success">
							<p><?php _e('Your comment is awaiting moderation.','jwdmc') ?></p>
						</div>
					<?php endif; ?>

					<?php comment_text() ?>

					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</div>
			</div>
		</article>
	<!-- </li> is added by wordpress automatically -->
	<?php
} // don't remove this bracket!


// Display trackbacks/pings callback function
function list_pings( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	?>
	<li id="comment-<?php comment_ID(); ?>"><i class="icon icon-share-alt"></i>&nbsp;<?php comment_author_link(); ?>
	<?php
}


// password protected post form
function custom_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$o = '<div class="clearfix"><form class="protected-post-form" action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post">
	' . '<p>' . __( "This post is password protected. To view it please enter your password below:" ,'jwdmc') . '</p>' . '
	<label for="' . $label . '">' . __( "Password:" ,'jwdmc') . ' </label><div class="input-append"><input name="post_password" id="' . $label . '" type="password" size="20" /><input type="submit" name="Submit" class="btn btn-primary" value="' . esc_attr__( "Submit",'jwdmc' ) . '" /></div>
	</form></div>
	';
	return $o;
}
add_filter( 'the_password_form', 'custom_password_form' );


// update standard wp tag cloud widget so it looks better
function my_widget_tag_cloud_args( $args ) {
	$args['number'] = 20; // show less tags
	$args['largest'] = 9.75; // make largest and smallest the same - i don't like the varying font-size look
	$args['smallest'] = 9.75;
	$args['unit'] = 'px';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'my_widget_tag_cloud_args' );


// filter tag clould output so that it can be styled by CSS
function add_tag_class( $taglinks ) {
	$tags = explode('</a>', $taglinks);
	$regex = "#(.*tag-link[-])(.*)(' title.*)#e";

	foreach( $tags as $tag ) {
		$tagn[] = preg_replace($regex, "('$1$2 label tag-'.get_tag($2)->slug.'$3')", $tag );
	}

	$taglinks = implode('</a>', $tagn);

	return $taglinks;
}
add_action( 'wp_tag_cloud', 'add_tag_class' );

function wp_tag_cloud_filter( $return, $args ) {
	return '<div id="tag-cloud">' . $return . '</div>';
}
add_filter( 'wp_tag_cloud','wp_tag_cloud_filter', 10, 2) ;


// Enable shortcodes in widgets
add_filter( 'widget_text', 'do_shortcode' );


// Disable jump in 'read more' link
function remove_more_jump_link( $link ) {
	$offset = strpos( $link, '#more-' );
	if ( $offset ) {
		$end = strpos( $link, '"',$offset );
	}
	if ( $end ) {
		$link = substr_replace( $link, '', $offset, $end-$offset );
	}
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_jump_link' );


// Remove height/width attributes on images so they can be responsive
function remove_thumbnail_dimensions( $html ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );


// Add thumbnail class to thumbnail links
function add_class_attachment_link( $html ) {
	$postid = get_the_ID();
	$html = str_replace( '<a','<a class="thumbnail"',$html );
	return $html;
}
add_filter( 'wp_get_attachment_link', 'add_class_attachment_link', 10, 1 );


// Menu output mods
class Bootstrap_walker extends Walker_Nav_Menu {

	function start_el(&$output, $object, $depth = 0, $args = Array(), $current_object_id = 0) {

		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		// If the item has children, add the dropdown class for bootstrap
		if ( $args->has_children ) {
			$class_names = "dropdown ";
		}

		$classes = empty( $object->classes ) ? array() : (array) $object->classes;

		$class_names .= join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $object ) );
		$class_names = ' class="'. esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $object->ID . '"' . $value . $class_names .'>';

		$attributes  = ! empty( $object->attr_title ) ? ' title="'  . esc_attr( $object->attr_title ) .'"' : '';
		$attributes .= ! empty( $object->target )     ? ' target="' . esc_attr( $object->target     ) .'"' : '';
		$attributes .= ! empty( $object->xfn )        ? ' rel="'    . esc_attr( $object->xfn        ) .'"' : '';
		$attributes .= ! empty( $object->url )        ? ' href="'   . esc_attr( $object->url        ) .'"' : '';

		// if the item has children add these two attributes to the anchor tag
		if ( $args->has_children ) {
			$attributes .= ' class="dropdown-toggle" data-toggle="dropdown"';
		}

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before .apply_filters( 'the_title', $object->title, $object->ID );
		$item_output .= $args->link_after;

		// if the item has children add the caret just before closing the anchor tag
		if ( $args->has_children ) {
			$item_output .= '<b class="caret"></b></a>';
		}
		else {
			$item_output .= '</a>';
		}

		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $object, $depth, $args );
	} // end start_el function

	function start_lvl( &$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"dropdown-menu\">\n";
	}

	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
		$id_field = $this->db_fields['id'];
		if ( is_object( $args[0] ) ) {
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
		}
		return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}
}


// Load editor stylesheet
add_editor_style('editor-style.css');


// Add Twitter Bootstrap's standard 'active' class name to the active nav link item
function add_active_class( $classes, $item ) {
	if( $item->menu_item_parent == 0 && in_array('current-menu-item', $classes) ) {
		$classes[] = "active";
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_active_class', 10, 2 );


// enqueue styles
if( !function_exists("theme_styles") ) {
	function theme_styles() {
		// Bootstrap CSS
		wp_register_style( 'bootstrap',
			'//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css',
			array(),
			'3.3.5',
			'all' );
		wp_enqueue_style( 'bootstrap' );

		if ( is_front_page() ) {
			// Slick CSS
			wp_register_style( 'slick',
				'//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css',
				array(),
				'1.5.7',
				'all' );
			wp_enqueue_style( 'slick' );
		}

		if ( is_singular('post') ) {
			// Comments CSS
			wp_register_style( 'comments-style',
				get_stylesheet_directory_uri() . '/library/css/comments.css',
				array(),
				null,
				'all' );
			wp_enqueue_style( 'comments-style' );
		}

		// Theme CSS
		wp_register_style( 'jwdmc-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			'1.7.1',
			'all' );
		wp_enqueue_style( 'jwdmc-style' );

		// FontAwesome
		wp_register_style( 'fontawesome',
			'//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
			array(),
			'4.3.0',
			'all' );
		wp_enqueue_style( 'fontawesome' );

		// Google Fonts
		// wp_register_style( 'googlefonts',
		// 	'...',
		// 	array(),
		// 	null,
		// 	'all' );
		// wp_enqueue_style( 'googlefonts' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


// enqueue javascript
if( !function_exists( "theme_js" ) ) {
	function theme_js(){
		wp_register_script( 'bootstrap',
			'//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
			array('jquery'),
			'3.3.5',
			true );
		wp_enqueue_script('bootstrap');

		if ( is_front_page() ) {
			wp_register_script( 'slick',
				'//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js',
				array('jquery'),
				'1.5.7',
				true );
			wp_enqueue_script('slick');
		}

		wp_register_script(  'modernizr',
			get_template_directory_uri() . '/library/js/modernizr.full.min.js',
			array('jquery'),
			'2.8.3',
			true );
		wp_enqueue_script('modernizr');

		wp_register_script( 'jwdmc-scripts',
			get_template_directory_uri() . '/library/js/scripts.js',
			array('jquery'),
			'1.7.1',
			true );
		wp_enqueue_script('jwdmc-scripts');
	}
}
add_action( 'wp_enqueue_scripts', 'theme_js' );


/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function framework_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}

	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'framework_wp_title', 10, 2 );


// Custom Backend Footer
function jwdmc_custom_admin_footer() {
	echo '<span id="footer-thankyou">Developed by <a href="http://www.jenniferwebdesignlasvegas.com" target="_blank">Jennifer Web Design</a></span>.';
}
add_filter('admin_footer_text', 'jwdmc_custom_admin_footer');


// Custom WordPress login screen
function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return 'Created by Jennifer Web Design';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function my_login_stylesheet() { ?>
	<link rel="stylesheet" id="custom_wp_admin_css"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/style-login.css'; ?>" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


// Keep Yoast meta box at bottom of screen
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');


// Change out the default Gravity Forms submit, next, and previous buttons
function form_submit_button( $button, $form ) {
	$button = str_replace( 'input', 'button', $button );
	$button = str_replace( '/', '', $button );
	$button = str_replace( 'gform_button button', 'btn btn-primary', $button );
	$button .= "{$form['button']['text']}</button>";
	return $button;
}
add_filter( 'gform_submit_button', 'form_submit_button', 10, 5 );

function form_next_button( $button, $form ) {
	$button = str_replace( 'input', 'button', $button );
	$button = str_replace( '/', '', $button );
	$button = str_replace( 'gform_next_button button', 'btn btn-default', $button );
	$button .= 'Next</button>';
	return $button;
}
add_filter( 'gform_next_button', 'form_next_button', 10, 5 );

function form_previous_button( $button, $form ) {
	$button = str_replace( 'input', 'button', $button );
	$button = str_replace( '/', '', $button );
	$button = str_replace( 'gform_previous_button button', 'btn btn-default', $button );
	$button .= 'Previous</button>';
	return $button;
}
add_filter( 'gform_previous_button', 'form_previous_button', 10, 5 );


?>
