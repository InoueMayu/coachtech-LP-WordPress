<?php
add_action('init', function(){
  add_theme_support('post-thumbnails');
});

add_action('init', function(){
  register_post_type('news', [
    'label' => 'ニュース',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail', 'editor', 'title']
  ]);
  register_taxonomy_for_object_type('category', 'news');
  register_taxonomy_for_object_type('post_tag', 'news');
});


/* アイキャッチ画像がなければ、標準画像を取得する*/
function get_eyecatch_with_default() {
    if(has_post_thumbnail()):
      $id = get_post_thumbnail_id();
      $img = wp_get_attachment_image_src($id, 'large');
    else:
      $img = array(get_template_directory_uri() . '/img/blog__first.jpg');
    
    endif;

    return $img;
}