<?php
add_action('init', function(){
  add_theme_support('post-thumbnails');
});

add_action('init', function(){
  register_post_type('news', [
    'label' => 'ニュース',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail', 'editor', 'title'],
    'has_archive' => true
  ]);
  register_taxonomy_for_object_type('category', 'news');
  register_taxonomy_for_object_type('post_tag', 'news');
});


/* アイキャッチ画像がなければ、標準画像を取得する(blog)*/
function get_eyecatch_with_default() {
    if(has_post_thumbnail()):
      $id = get_post_thumbnail_id();
      $img = wp_get_attachment_image_src($id, 'large');
    else:
      $img = array(get_template_directory_uri() . '/img/blog__first.jpg');
    
    endif;

    return $img;
}

/* アイキャッチ画像がなければ、標準画像を取得する(news)*/
function get_eyecatch_with_default2() {
  if(has_post_thumbnail()):
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else:
    $img = array(get_template_directory_uri() . '/img/news2.jpg');
  
  endif;

  return $img;
}

function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'blog'; // ページURL
      $args['label'] = 'blog'; 
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );