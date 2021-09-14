<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>

<style>
  .blog-wrap__item-content {
    background: #f5f5f5;
  }

  .single-eyecatch > img {
  height: 500px;
  object-fit: cover;
}

.single-container {
  background: #fff;
  position: relative;
  top: -90px;
  padding: 50px;
  box-sizing: border-box;
  margin: 0 40px;
}


.page-eyecatch {
  position: relative;
}

.page-title {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  color: #fff;
}

.page-title__h1 {
  font-size: 50px;
  color: #fff;
  text-align: center;
}

.page-title__h1.page-title404 {
  font-size: 80px;
}

.page-title__p {
  color: #fff;
  font-size: 18px;
  text-align: center;
}



</style>

<body <?php body_class(); ?>>
  
  <?php get_template_part('includes/header'); ?>
   
  <div class="single-eyecatch page-eyecatch">
    <img src="<?php echo get_template_directory_uri(); ?>/img/blog.jpg" alt="no-img" />
    <div class="page-title">
      <h1 class="page-title__h1">BLOG</h1>
      <p class="page-title__p">ブログ記事一覧</p>
    </div>
  </div>
  <div class="flex__item blog-wrap container">
          <div class="row">
            <img src="" alt="">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blog-wrap__item text-decoration-none col-lg-4 mt-3">

                <?php 
                $img = get_eyecatch_with_default(); 

                $category = get_the_category();
                $cat_name = $category[0]->cat_name;

                $tag = get_the_tags();
                $tag_name = $tag[0]->name;
                ?>
                
                  <img src="<?php echo $img[0]; ?>" alt="" class="blog-wrap__item-eyecatch">
                  <span class="blog-wrap__item-cat"><?php echo $cat_name; ?></span>
                  <div class="blog-wrap__item-content">
                    <h3 class="blog-wrap__item-content-ttl">
                      <?php the_title(); ?>
                    </h3>
                    <ul class="blog_flex__item">
                      <li class="blog-wrap__item-content-tag"><?php the_time('Y/m/d'); ?></li>
                      <li class="blog-wrap__item-content-tag tag">#<?php echo $tag_name; ?></li>
                    </ul>
                  </div>
                </a>
              <?php endwhile; ?>
            <?php else : ?>
              <p>記事が見つかりませんでした</p>
            <?php endif; ?>
          </div>
            </div>

            <?php get_template_part('includes/footer'); ?>
  
        <?php get_footer(); ?>
     </body>
</html>