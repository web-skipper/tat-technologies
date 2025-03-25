<?php

include get_template_directory() . '/lib/search.php';
include get_template_directory() . '/lib/extra-functions.php';

if (function_exists('register_sidebars'))
  register_sidebars(2, array(
    'before_widget' => '<li>',
    'after_widget' => '</li>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));

add_action('init', 'register_my_menus');
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu-one' => __('Primary'),
      'header-menu-two' => __('Header Menu Two'),
      'footer-menu-one' => __('Footer Menu One'),
      'footer-menu-two' => __('Footer Menu Two'),
    )
  );
}

?>
<?php
function widget_mytheme_search() {
  ?>
  <li>
    <h2>Search</h2>
    <form id="searchform" method="get" action="<?php bloginfo('home'); ?>/"> <input type="text" value="type, hit enter"
        onfocus="if (this.value == 'type, hit enter') {this.value = '';}"
        onblur="if (this.value == '') {this.value = 'type, hit enter';}" size="18" maxlength="50" name="s" id="s" />
    </form>
  </li>
  <?php
}
if (function_exists('register_sidebar_widget'))
  register_sidebar_widget(__('Search'), 'widget_mytheme_search');
?>
<?php
function mytheme_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
        <?php echo get_avatar($comment, $size = '32', $default = '<path_to_url>'); ?>

        <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0'): ?>
        <em><?php _e('Your comment is awaiting moderation.') ?></em>
        <br />
      <?php endif; ?>

      <div class="comment-meta commentmetadata"><a
          href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'), '  ', '') ?>
        <?php comment_reply_link(array_merge($args, array('reply_text' => 'Reply', 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
      </div>

      <?php comment_text() ?>

    </div>
    <?php
}

?>
  <?php
  define('HEADER_TEXTCOLOR', '');
  define('HEADER_IMAGE', '%s/images/header.jpg'); // %s is theme dir uri
  define('HEADER_IMAGE_WIDTH', 850);
  define('HEADER_IMAGE_HEIGHT', 200);
  define('NO_HEADER_TEXT', true);

  function starter_admin_header_style() {
    ?>
    <style type="text/css">
      #headimg {
        background: #fff url(<?php header_image() ?>) no-repeat;
      }

      #headimg {
        height:
          <?php echo HEADER_IMAGE_HEIGHT; ?>
          px;
        width:
          <?php echo HEADER_IMAGE_WIDTH; ?>
          px;
      }

      #headimg h1,
      #headimg #desc {
        display: none;
      }
    </style>
    <?php
  }
  function starter_header_style() {
    ?>
    <style type="text/css">
      #headerimg {
        background: #f0f0f0 url(<?php header_image() ?>) no-repeat;
      }
    </style>
    <?php

  }

  /*if ( function_exists('add_custom_image_header') ) {
    add_custom_image_header('starter_header_style', 'starter_admin_header_style');
  }*/
  //============================== SCRIPTS AND STYLE
  function scriptsandstyles() {
    //$lang=get_bloginfo("language"); 
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fonts/fontawesome.css');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), time());
    wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/fonts.css');
    wp_enqueue_style('style-new', get_template_directory_uri() . '/style-new.css');
    wp_enqueue_style('owl-css', get_template_directory_uri() . '/js/owl/owl.carousel.css');

    wp_enqueue_script('jquery-3.6.0.min', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', 'jquery', '', false);
    wp_enqueue_script('owl-js', get_template_directory_uri() . '/js/owl/owl.carousel.js', 'jquery', '', true);

    wp_enqueue_script('all', get_template_directory_uri() . '/js/all.js', array(), time(), true);

    if (is_front_page() || is_home()) {
      // wp_enqueue_style('locomotive', '//cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css', array(), time(), true);
      wp_enqueue_script('locomotive', '//cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js', array(), time(), true);
      wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js', array('jquery', 'locomotive'), time(), true);
    }
  }

  add_action('wp_enqueue_scripts', 'scriptsandstyles');
  //============================== Featured Image
  add_theme_support('post-thumbnails');
  //======================================= Theme Settings Page    
  if (function_exists('acf_add_options_page')) {
    if (function_exists('acf_add_options_page')) {
      acf_add_options_page('Theme Settings');
    }
  }
  function the_content_word($max_char, $more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    //$content = str_replace(']]>', ']]&gt;', $content);
    //$content = strip_tags($content);
    if (strlen($_GET['post']) > 0) {
      echo $content;
    } else if ((strlen($content) > $max_char) && ($espacio = strpos($content, " ", $max_char))) {
      $content = substr($content, 0, $espacio);
      $content = $content;
      echo strip_tags($content);
      echo "";
    } else {
      echo strip_tags($content);
    }
  }
  function CharacterLimit($str, $char_limit, $append_str = '') {
    $str = strip_tags(trim($str));
    $len = strlen($str);
    if ($len <= $char_limit) {
      $final_str = $str;
    } else {
      $final_str = GetLimitSrting($str, $char_limit);
      $final_len = strlen($final_str);
      if (($char_limit - $final_len) >= strlen($append_str))
        $final_str .= $append_str;
    }
    return $final_str;
  }
  function GetLimitSrting($str, $len) {
    $newstr = substr($str, 0, strrpos($str, ' '));
    $strlen = strlen($newstr);
    if ($strlen > $len)
      return $newstr = GetLimitSrting($newstr, $len);
    else
      return $newstr;
  }

  function custom_taxonomies_terms_links() {
    // get post by post id
    $post = get_post($post->ID);
    // get post type by post
    $post_type = $post->post_type;
    // get post type taxonomies
    $taxonomies = get_object_taxonomies($post_type, 'objects');
    $out = array();
    foreach ($taxonomies as $taxonomy_slug => $taxonomy) {
      // get the terms related to post
      $terms = get_the_terms($post->ID, $taxonomy_slug);
      if (!empty($terms)) {
        // $out[] = "<h2>" . $taxonomy->label . "</h2>\n<ul>";
        foreach ($terms as $term) {
          //$out[] = "<a href='".get_term_link( $term->term_id, $taxonomy_slug )."'>".$term->name."</a>";
          $out[] = get_term_link($term->term_id, $taxonomy_slug);
          break;
        }
        break;
        // $out[] = "</ul>\n";
      }
    }
    return implode('', $out);
  }

  function custom_taxonomies_terms_category() {
    // get post by post id
    $post = get_post($post->ID);

    // get post type by post
    $post_type = $post->post_type;

    // get post type taxonomies
    $taxonomies = get_object_taxonomies($post_type, 'objects');
    $out = array();
    foreach ($taxonomies as $taxonomy_slug => $taxonomy) {

      // get the terms related to post
      $terms = get_the_terms($post->ID, $taxonomy_slug);

      if (!empty($terms)) {

        // $out[] = "<h2>" . $taxonomy->label . "</h2>\n<ul>";
        //$out[] = 'קטגוריות: ';
        $total = count($terms);
        $fgc = 1;
        foreach ($terms as $term) {
          $coma = '';
          if ($total != $fgc) {
            $coma = ', ';
          }
          // $out[] = '<a href="'
          // .    get_term_link( $term->slug, $taxonomy_slug ) .'">'
          //.    $term->name
          //  . "</a>".$coma ;
          $out[] = $term->name . $coma;
          // break;
          $fgc++;
        }
        break;
        // $out[] = "</ul>\n";
      }
    }

    return implode('', $out);
  }

  //add_image_size( 'coursetumb', 383, 544, true );
  
  add_filter('acf/load_field/name=mro_services', function ($field) {
    $services = get_field('more_from_our_mro_services', 'option');
    $choices = [];

    $choices = [
      'more_from_our_mro_defense_services' => 'MRO Defence',
      'more_from_our_mro_services' => 'MRO Commercial',
      'more_from_our_oem_defense_services' => 'OEM Defense',
      'more_from_our_oem_services' => 'OEM Commercial',
    ];

    // if ($services) {
    //   foreach ($services as $service) {
    //     $key = strtolower(trim(preg_replace('/[^a-zA-Z0-9]+/', '-', $service['service_title']), '-'));
  
    //     $choices[$service['service_title']] = $service['service_title'];
    //   }
    // }
  
    $field['choices'] = $choices;
    return $field;
  });

  add_filter('acf/load_field/name=oem_services', function ($field) {
    $services = get_field('more_from_our_oem_services', 'option');
    $choices = [];

    // if ($services) {
    //   foreach ($services as $service) {
    //     $key = strtolower(trim(preg_replace('/[^a-zA-Z0-9]+/', '-', $service['service_title']), '-'));
  
    //     $choices[$service['service_title']] = $service['service_title'];
    //   }
    // }
    $choices = [
      'more_from_our_mro_defense_services' => 'MRO Defence',
      'more_from_our_mro_services' => 'MRO Commercial',
      'more_from_our_oem_defense_services' => 'OEM Defense',
      'more_from_our_oem_services' => 'OEM Commercial',
    ];
    $field['choices'] = $choices;
    return $field;
  });

  function custom_add_category_taxonomy() {
    $labels = array(
      'name' => _x('Post Categories', 'taxonomy general name', 'tatnew'),
      'singular_name' => _x('Post Category', 'taxonomy singular name', 'tatnew'),
      'menu_name' => __('Post Category', 'tatnew'),
    );

    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'menu_position' => 5,
      'rewrite' => array('slug' => 'post-content-type'),
    );
    register_taxonomy('post_content_types', array('post'), $args);
  }
  add_action('init', 'custom_add_category_taxonomy', 0);
