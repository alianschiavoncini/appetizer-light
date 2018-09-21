<?php
/**
 * Appetizer Light functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

if ( ! function_exists( 'appetizer_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function appetizer_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'appetizer-light' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => esc_html__( 'Main Menu', 'appetizer-light' )
	) );

	/**
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 
		'comment-form', 
		'comment-list', 
		'gallery', 
		'caption', 
	) );

	/**
	 * Add support for Boostrap Nav Menu Walker
	 * https://github.com/dupkey/bs4navwalker
	 */
	require_once( get_template_directory() . '/inc/bs4navwalker.php' );

	/**
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', appetizer_fonts_url() ) );

}
endif; // appetizer_setup
add_action( 'after_setup_theme', 'appetizer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) $content_width = 1140;

/**
 * Register custom fonts.
 */
function appetizer_fonts_url() {
	
	$fonts_url 			= '';
	$font_families    	= array();
	
	/*
	 * Translators: If there are characters in your language that are not
	 * supported by this font, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Work Sans: on or off', 'appetizer-light' ) ) {
		$font_families[] = 'Work Sans:300,400,700';
	}

	if ( $font_families ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $font_families ) ),
		), '//fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 */
function appetizer_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'appetizer-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => '//fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'appetizer_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function appetizer_widgets_init() {
	
    // sidebar standard
	register_sidebar( array(
        'name' 			=> esc_html__( 'Main Sidebar', 'appetizer-light' ),
        'id' 			=> 'sidebar',
        'description' 	=> esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'appetizer-light' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="titlewidget">',
		'after_title'   => '</h3>',
		) );

	// footer col-1
	register_sidebar( array(
        'name' 			=> esc_html__( 'Footer: Column 1', 'appetizer-light' ),
        'id' 			=> 'footer-column-1',
        'description' 	=> esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'appetizer-light' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="titlewidget">',
		'after_title'   => '</h3>',
		) );

	// footer col-2
	register_sidebar( array(
        'name' 			=> esc_html__( 'Footer: Column 2', 'appetizer-light' ),
        'id' 			=> 'footer-column-2',
        'description' 	=> esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'appetizer-light' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="titlewidget">',
		'after_title'   => '</h3>',
		) );

	// footer col-3
	register_sidebar( array(
        'name' 			=> esc_html__( 'Footer: Column 3', 'appetizer-light' ),
        'id' 			=> 'footer-column-3',
        'description' 	=> esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'appetizer-light' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="titlewidget">',
		'after_title'   => '</h3>',
		) );


}
add_action( 'widgets_init', 'appetizer_widgets_init' );

/**
 * Bootstrap responsive table
 */
function appetizer_bootstrap_responsive_table( $content ) {
	$content = str_replace( 
		[ '<table>', '</table>' ], 
		[ '<table class="table table-hover table-striped table-responsive">', '</table>' ],
		$content
	);

	return $content;
}
add_filter( 'the_content', 'appetizer_bootstrap_responsive_table' );

/**
 * Bootstrap navbar
 */
function appetizer_navbar() {

	$nav_id 			= 'primarynav';
	$nav_class 			= 'navbar navbar-expand-lg navbar-light fixed-top';
	$menu 				= 'primary';
	$menu_id 			= false;
	$theme_location 	= 'primary';
	$container 			= false;
	$container_id 		= 'bs4navbar';
	$container_class 	= 'collapse navbar-collapse';
	$theme_location 	= 'primary';
	$menu_class 		= 'navbar-nav ml-auto';
	
?>
    <!-- navigation -->
    <nav id="<?php echo $nav_id; ?>" class="<?php echo $nav_class; ?>">
	    <div class="container">

            <div class="navbar-brand">
                <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
            </div>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'appetizer-light' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div id="bs4navbar" class="navbar-collapse collapse">
            <?php
            wp_nav_menu( array(
                         'menu'            => $menu,
                         'menu_id'         => $menu_id,
                         'menu_class'      => $menu_class,
                         'container'       => $container,
                         'container_id'    => $container_id,
                         'container_class' => $container_class,
                         'depth'           => 2,
                         'theme_location'  => $theme_location,
                         'fallback_cb'     => 'bs4navwalker::fallback',
                         'walker'          => new bs4navwalker()
                       )
                     );
            ?>
            </div>

        </div>
    </nav> <!-- /navigation -->
<?php
}

/**
 * Handles JavaScript detection.
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 */
function appetizer_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'appetizer_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 */
function appetizer_scripts() {
	
	$my_theme = wp_get_theme();

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'appetizer-fonts', appetizer_fonts_url(), array(), null );

	// Font-Awesome.
	wp_enqueue_style( 'font-awesome-css', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', null, '4.7.0' );

	// Boostrap.
	wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', null, '4.0.0' );

	wp_enqueue_script( 
		'popper-min-js', 
		'//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', 
		array( 'jquery' ),
		'1.12.9', 
		true
	);
		
	wp_enqueue_script( 
		'bootstrap-min-js', 
		'//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', 
		array( 'jquery' ),
		'4.0.0', 
		true
	);

	// Comment reply.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	// Theme stylesheet.
	wp_enqueue_style( 'appetizer-css', get_stylesheet_uri(), null, $my_theme->get( 'Version' ) );

	// Theme JS
	wp_enqueue_script( 
		'scripts-js', 
		get_theme_file_uri( '/js/scripts.js' ), 
		array( 'jquery' ),
		false, 
		true
	);

}
add_action( 'wp_enqueue_scripts', 'appetizer_scripts' );
