<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>
  
  <?php get_template_part('includes/header'); ?>

  <main>
    <div class="firstview">
      <div class="firstview__eyecatch">
        <img src="<?php echo get_template_directory_uri(); ?>/img/firstview.jpg" alt="">
      </div>
      <div class="firstview__content">
        <h1 class="firstview__content-eyecatch">
          Commit to the <span class="change__clr">growth</span><br>for everyone
        </h1>
        <p class="firstview__content-sub-copy">全ての人の<span class="change__clr">成長</span>にコミットする</p>
        <p class="firstview__content-txt">Educational Technology Company<br>estra inc since 2019</p>
      </div>
    </div>

    <div id="news" class="small-container">
      <p class="common__sub-ttl">News</p>
      <h2 class="common__ttl">新着情報</h2>
      <ul class="news__list">

      <?php
      $news_query = new WP_Query(
        array(
          'post_type' => 'news',
          'posts_per_page' => 5
        )
      );
      ?>
      <?php if ( $news_query->have_posts() ) : ?>
	    <?php while ( $news_query->have_posts() ) : ?>
		  <?php $news_query->the_post(); ?>
        <li>
          <a href="" class="news__list-link text-decoration-none">
            <span class="news__list-data"><?php echo get_the_date('Y/m/d'); ?></span>
            <span class="news__list-cat">ニュース</span>
            <span class="news__list-detail"><?php the_title(); ?></span>
          </a>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>

    <div id="about">
      <div class="container">
        <p class="common__sub-ttl">About</p>
        <h2 class="common__ttl">Technology × Coaching</h2>
        <div class="about__item about_flex__item">
          <p class="about__item-txt mt-5"><span>株式会社estraはデジタル化が遅れている教育業界に最新のテクノロジーを導入することによって教育のDXを実現します。</span>独自のオペレーションとコーチングを融合した新しい教育の仕組みにより、一人ひとりに合わせた最適な教育を提供します。</p>
          <div class="about__item-img mt-5"><img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt=""></div>
        </div>
      </div>
    </div>
    </div>

    <div id="service" class="container">
      <p class="common__sub-ttl">Service</p>
      <h2 class="common__ttl">サービス内容</h2>
      <div class="service-wrap">

        <div class="service-wrap__item--first">
          <img src="<?php echo get_template_directory_uri(); ?>/img/service__first.svg" alt="">
          <h3 class="service-wrap__item-content-ttl">教育事業</h3>
          <p class="service-wrap__item-content-ttl-p">サンプルテキストがここには入ります。サンプルテキストがここには入ります。サンプルテキストがここには入ります。</p>
        </div>


        <div class="service-wrap__item service-wrap__item--second">
          <img src="<?php echo get_template_directory_uri(); ?>/img/service__first.svg" alt="">
          <div class="service-wrap__item-content">
            <h3 class="service-wrap__item-content-ttl">教育事業</h3>
            <p class="service-wrap__item-content-ttl-p">サンプルテキストがここには入ります。サンプルテキストがここには入ります。サンプルテキストがここには入ります。</p>
          </div>
        </div>
        <div class="service-wrap__item service-wrap__item--third">
          <img src="<?php echo get_template_directory_uri(); ?>/img/service__first.svg" alt="">
          <div class="service-wrap__item-content">
            <h3 class="service-wrap__item-content-ttl">教育事業</h3>
            <p class="service-wrap__item-content-ttl-p">サンプルテキストがここには入ります。サンプルテキストがここには入ります。サンプルテキストがここには入ります。</p>
          </div>
        </div>

      </div>
    </div>

    <div id="blog">
      <div class="container">
        <p class="common__sub-ttl">Blog</p>
        <h2 class="common__ttl">ブログ</h2>

        <div class="flex__item blog-wrap container">
          <div class="row">

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
        <a href="<?php echo home_url('/bloglist'); ?>" class="blog__link text-decoration-none">一覧ページへ</a>
      </div>
    </div>

    <div id="company" class="small-container container mt-5">
      <p class="common__sub-ttl txt__ctr">Company</p>
      <h2 class="common__ttl txt__ctr">会社概要</h2>
      <table class="company-table">
        <tr>
          <th class="company-table__th">会社名</th>
          <td class="company-table__td">株式会社estra</td>
        </tr>
        <tr>
          <th class="company-table__th">代表者名</th>
          <td class="company-table__td">福場凜太郎</td>
        </tr>
        <tr>
          <th class="company-table__th">本社所在地</th>
          <td class="company-table__td">東京都渋谷区1-1-1</td>
        </tr>
        <tr>
          <th class="company-table__th">従業員数</th>
          <td class="company-table__td">100名</td>
        </tr>
        <tr>
          <th class="company-table__th">電話番号</th>
          <td class="company-table__td">0120-00-0000</td>
        </tr>
        <tr>
          <th class="company-table__th">資本金</th>
          <td class="company-table__td">¥10,000,000</td>
        </tr>
      </table>
    </div>

    <div id="recruit">
      <div class="recruit_flex__item">
        <a href="<?php echo home_url('/recruit'); ?>" class="recruit__item recruit__item--first">
          <h2 class="recruit__item-ttl">採用情報</h2>
        </a>
        <a href="<?php echo home_url('/interview'); ?>" class="recruit__item recruit__item--second">
          <h2 class="recruit__item-ttl">社員インタビュー</h2>
        </a>
      </div>
    </div>

    <div id="contact">
      <h2 class="contact__ttl">株式会社estraへのお問い合わせはこちらから</h2>
      <a href="<?php echo home_url('/contact'); ?>" class="contact__btn text-decoration-none">お問い合わせ</a>
    </div>
  </main>

  <?php get_template_part('includes/footer'); ?>
  

  <?php get_footer(); ?>
</body>

</html>