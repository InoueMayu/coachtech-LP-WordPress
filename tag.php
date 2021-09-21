<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <?php get_header(); ?>
  </head>

  <style>
    .single-category__ttl {
      display: block;
      background:#049fb3;
      text-align: center;
      color: white;
      padding: 50px 0;
      font-family: "Indie Flower", cursive;
      font-size: 70px;
      margin-bottom: 50px;
    }

    li {
      list-style: none;
    }

    .blog-wrap__item-content {
      background: #f5f5f5;
    }
  </style>

  <body>
    <?php get_template_part('includes/header'); ?>
    
    <div class ="single-category__ttl">
      #<?php single_tag_title(); ?>
    </div>
    <div class="flex__item blog-wrap container">
     <div class="row">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
    
        <a href="<?php the_permalink(); ?>" class="blog-wrap__item text-decoration-none col-lg-4 col-md-4 col-sm-12 mt-3">
        <?php
                    $img = get_eyecatch_with_default();

                    $category = get_the_category();
                    $cat_name = $category[0]->cat_name;

                    $tag = get_the_tags();
                    $tag_name = $tag[0]->name;

                    ?>
        <img src="<?php echo $img[0]; ?>" alt="" class="blog-wrap__item-eyecatch">
        <div class="blog-wrap__item-content">
          <span class="blog-wrap__item-cat"><?php echo $cat_name; ?></span>
           <h3 class="blog-wrap__item-content-ttl"><?php the_title(); ?></h3>
            <ul class="blog_flex__item">
                <li class="blog-wrap__item-content-tag"><?php the_time('Y-m-d'); ?></li>
                <li class="blog-wrap__item-content-tag tag"><?php
                          $tags = get_the_tags();
                          foreach( $tags as $tag) { 
                          echo "#".$tag->name."<br>";
                        }
                      ?>
                </li>
            </ul>
        </div>
        </a>

    <?php endwhile;?>
    <?php endif; ?>
    </div>
</div>
<?php the_posts_pagination(
          array(
            'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
            'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
            'prev_text'     => __( '前へ'), // 「前へ」リンクのテキスト
            'next_text'     => __( '次へ'), // 「次へ」リンクのテキスト
            'type'          => 'list', // 戻り値の指定 (plain/list)
          )
        ); ?>
    <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>
</body>
</html>