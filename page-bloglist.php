<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bloglist_style.css">
  <?php get_header(); ?>

</head>

<body>
  <?php
  global $post;
  $args = array('posts_per_page' => 10);
  $myposts = get_posts($args);
  foreach ($myposts as $post) {
    setup_postdata($post);

    $img = get_eyecatch_with_default();

    $category = get_the_category();
    $cat_name = $category[0]->cat_name;

    $tag = get_the_tags();
    $tag_name = $tag[0]->name;
  ?>
    <div class="flex__item blog-wrap container">
      <div class="row">
        <a href="<?php the_permalink(); ?>" class="blog-wrap__item text-decoration-none col-lg-4 mt-3">
          <span class="blog-wrap__item-cat"><?php echo $cat_name; ?></span>
          <img class="blog-wrap__item-eyecatch" src="<?php echo $img[0]; ?>">
          <div class="blog-wrap__item-content">
            <h3 class="blog-wrap__item-content-ttl">
              <?php the_title(); ?>
            </h3>
            <ul class="flex__item">
              <li class="blog-wrap__item-content-tag"><?php the_time('Y/m/d'); ?></li>
              <li class="blog-wrap__item-content-tag">#<?php echo $tag_name; ?></li>
            </ul>
          </div>
        </a>
      </div>
    </div>
  <?php
  }
  wp_reset_postdata();
  ?>
   <?php get_template_part('includes/footer'); ?>
  

  <?php get_footer(); ?>
</body>

</html>
