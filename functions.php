<?php
// LOAD BONES CORE (if you remove this, the theme will break)
require_once( 'library/bones.php' );

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
require_once( 'library/admin.php' );


function bones_ahoy() {

  add_editor_style( get_stylesheet_directory_uri() . '/library/css/editor-style.css' );
  load_theme_textdomain( 'bonestheme', get_template_directory() . '/library/translation' );

  require_once( 'library/custom-post-type.php' );

  // launching operation cleanup
  add_action( 'init', 'bones_head_cleanup' );
  // A better title
  add_filter( 'wp_title', 'rw_title', 10, 3 );
  // remove WP version from RSS
  add_filter( 'the_generator', 'bones_rss_version' );
  // remove pesky injected css for recent comments widget
  add_filter( 'wp_head', 'bones_remove_wp_widget_recent_comments_style', 1 );
  // clean up comment styles in the head
  add_action( 'wp_head', 'bones_remove_recent_comments_style', 1 );
  // clean up gallery output in wp
  add_filter( 'gallery_style', 'bones_gallery_style' );

  // enqueue base scripts and styles
  add_action( 'wp_enqueue_scripts', 'bones_scripts_and_styles', 999 );
  // ie conditional wrapper

  // launching this stuff after theme setup
  bones_theme_support();

  // adding sidebars to Wordpress (these are created in functions.php)
  add_action( 'widgets_init', 'bones_register_sidebars' );

  // cleaning up random code around images
  add_filter( 'the_content', 'bones_filter_ptags_on_images' );
  // cleaning up excerpt
  add_filter( 'excerpt_more', 'bones_excerpt_more' );

} /* end bones ahoy */

// let's get this party started
add_action( 'after_setup_theme', 'bones_ahoy' );


/************* OEMBED SIZE OPTIONS *************/

if ( ! isset( $content_width ) ) {
	$content_width = 680;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-150', 150, 150, true );
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-330', 300, 300, true );
add_image_size( 'bones-thumb-200', 200, 200, true );
add_image_size( 'bones-thumb-660', 600, 600, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
add_image_size( 'bones-thumb-full', 1080, 600, true );
add_image_size( 'bones-thumb-card', 320, 420, true );

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'bones-thumb-150' => __('150px by 150px'),
        'bones-thumb-600' => __('600px by 150px'),
        'bones-thumb-200' => __('200px by 200px'),
        'bones-thumb-330' => __('300px by 300px'),
        'bones-thumb-660' => __('600px by 600px'),
        'bones-thumb-300' => __('300px by 100px'),
        'bones-thumb-full' => __('1080px by 600px'),
        'bones-thumb-card' => __('320px by 420px'),
    ) );
}



function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {
$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
return $html;
}
add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );



/************* LOCK DOWN SITE ADMIN *********************/

function bones_theme_customizer($wp_customize) {
  //$wp_customize->remove_section('title_tagline');
   $wp_customize->remove_section('colors');
   $wp_customize->remove_section('background_image');
  // $wp_customize->remove_section('static_front_page');
   $wp_customize->remove_section('nav');
   //$wp_customize->remove_control('blogdescription');
   $wp_customize->get_section('colors')->title = __( 'Theme Colors' );
   $wp_customize->get_section('background_image')->title = __( 'Images' );
}

add_action( 'customize_register', 'bones_theme_customizer' );
function remove_menus(){
remove_menu_page( 'edit.php?post_type=custom_type' );    //Custom Types
remove_menu_page( 'edit-comments.php' );          //Comments  
}
add_action( 'admin_menu', 'remove_menus' );


function example_remove_dashboard_widgets()
{
    // Globalize the metaboxes array, this holds all the widgets for wp-admin
    global $wp_meta_boxes;
     
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
}
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );








function custom_admin_logo()
{
    echo '<style type="text/css">#header-logo { background-image: url(' . get_bloginfo('template_directory') . '/images/favicon.png) !important; }</style>';
}
add_action('admin_head', 'custom_admin_logo');

 
/************* CUSTOM FORMAT OPTIONS *********************/


function wpb_mce_buttons_2($buttons) {
  array_unshift($buttons, 'styleselect');
  return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {  
  $style_formats = array(  
    array(  
      'title' => 'Blue Button',  
      'block' => 'span',  
      'classes' => 'blue-button',
      'wrapper' => true,
      
    ),  );  
  $init_array['style_formats'] = json_encode( $style_formats );   
  return $init_array;   
} 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 





/************* ACTIVE SIDEBARS ********************/


// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
  register_sidebar(array(
    'id' => 'sidebar1',
    'name' => __( 'Sidebar 1', 'bonestheme' ),
    'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
} // don't remove this bracket!


/************* ACTIVE NAVIGATION ********************/

function register_my_menus() {
  register_nav_menus(
    array(
      'csu-menu' => __( 'CSU Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/************* GALLERY SETTINGS ********************/


function my_category_module() {
 add_action ( 'edit_category_form_fields', 'add_image_cat');
 add_action ( 'edited_category', 'save_image');
 }
add_action('init', 'my_category_module');
add_filter( 'gallery_style', 'my_gallery_style', 99 );
function my_gallery_style() {
    return "
";
}
add_filter( 'use_default_gallery_style', '__return_false' );

add_filter( 'the_content', 'attachment_image_link_remove_filter' ); function attachment_image_link_remove_filter( $content ) { $content = preg_replace( array('{<a(.*?)(wp-att|wp-content\/uploads)[^>]*><img}', '{ wp-image-[0-9]*" /></a>}'), array('<img','" />'), $content ); return $content; }


/************* TABBED TEMP CODE ********************/

add_shortcode( 'tab_content', 'themeprefix_tabbed_content' ); 
function themeprefix_tabbed_content() {
ob_start();
echo '<div class="tabs d-all t-all m-all bottomMargin">
    <ul class="horizontal d-2of7 t-1of4 m-1of3">';
      if( have_rows('tabs') ):
        $i = 1;
        while ( have_rows('tabs' ) ) : the_row();
    echo '<li class="hvr-bubble-right"><a class="tabsA" href="#tab-' . $i . '">' . get_sub_field( "tab_link" ) . '</a></li>';
    $i++;
    endwhile;
    echo '</ul>';
    $i = 1;
    while ( have_rows('tabs') ) : the_row();
    echo '<div class="tab_content d-5of7 t-3of4 m-2of3" id="tab-' . $i . '">' . get_sub_field( "tab_content" ) . '</div>';
    $i++;
    endwhile;
      echo '</div>';
      else :
      endif;
      return ob_get_clean();
}
add_action( 'wp_enqueue_scripts', 'themeprefix_tab_scripts' );
function themeprefix_tab_scripts() {
 wp_enqueue_script( 'tabs' , get_template_directory_uri()  . '/library/js/jquery.tabslet.min.js', array( 'jquery' ), '1', true );
 wp_enqueue_script( 'tabs-init' , get_template_directory_uri()  . '/library/js/tabs-init.js', array( 'tabs' ), '1', true );

}




/************* EXCERPT SETTINGS ********************/

function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 20);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
$excerpt = $excerpt.'... <a href="'.$permalink.'">more</a>';
return $excerpt;
}

function custom_excerpt_length( $length ) {
return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function excerpt_more_link_all_the_time() {
  function more_link() {
    return '';
  }
  add_filter('excerpt_more', 'more_link');
  function get_read_more_link() {
    $excerpt = get_the_excerpt();
    return '<p>' . $excerpt . '&nbsp;<a class="excerpt-read-more" href="' . get_permalink() . '">Read&nbsp;More</a></p>';
  }
  add_filter( 'the_excerpt', 'get_read_more_link' );
  
}
add_action( 'after_setup_theme', 'excerpt_more_link_all_the_time' );

/************* IMAGE DEFAULT SPACE SETTINGS ********************/

add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field', 20);
  function add_default_value_to_image_field($field) {
    acf_render_field_setting( $field, array(
      'label'      => __('Default Image ID','acf'),
      'instructions'  => __('Appears when creating a new post','acf'),
      'type'      => 'image',
      'name'      => 'default_value',
    ));
  }

/************* FORCE ALT IMG SETTINGS ********************/

function add_alt_tags($content)
{
    global $post;
    preg_match_all('/<img (.*?)\/>/', $content, $images);
    if(!is_null($images))
    {
      foreach($images[1] as $index => $value)
      {
        if(!preg_match('/alt=/', $value))
        {
          $new_img = str_replace('<img', '<img alt="'.$post->post_title.'"', $images[0][$index]);
          $content = str_replace($images[0][$index], $new_img, $content);
        }
      }
    }
    return $content;
}
add_filter('the_content', 'add_alt_tags', 99999);
 


/* DON'T DELETE THIS CLOSING TAG */ ?>