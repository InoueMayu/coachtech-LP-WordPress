<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<style>
.news-list {
  margin-bottom: 20px;
  list-style: none;
  border-bottom: 0.5px solid #999;
  padding: 16px 0;
}

.news-contain {
  margin: 0 auto;
  padding: 30px 0;
  max-width: 700px;
}
.news-date{
  display: inline-block;
  font-size: 12px;
}

.news-title {
  display: inline-block;
  font-size: 16px;
  text-decoration: none;
  color: #222;
  margin: 15px;
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

  <main>
  <div class="single-eyecatch page-eyecatch">
    <img src="<?php echo get_template_directory_uri(); ?>/img/news.jpg" alt="no-img" />
    <div class="page-title">
      <h1 class="page-title__h1">NEWS</h1>
      <p class="page-title__p">ニュース記事一覧</p>
    </div>
  </div>
  <div id="news" class="wrap container">
    <div class="news-contain">
      <ul>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <li class="news-list">
              <p class="news-date"><?php echo get_the_date('Y-m-d'); ?></p>
              <span class="news__list-cat"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>
              <a href="<?php the_permalink(); ?>" class="news-title">
                <?php the_title(); ?>
              </a>
            </li>
        <?php endwhile;
        endif; ?>
      </ul>
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
  </main>

  <hr>

<?php get_template_part('includes/footer'); ?>

  
<?php get_footer(); ?>
</body>

</html>