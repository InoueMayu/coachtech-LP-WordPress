<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>

</head>

<style>

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

@media screen and (max-width: 480px) {
  .page-title__h1 {
    font-size: 28px;
  }
}

</style>

<body <?php body_class(); ?>>

  <?php get_template_part('includes/header'); ?>

  <div class="single-eyecatch page-eyecatch">
    <img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" alt="no-img" />
    <div class="page-title">
      <h1 class="page-title__h1">お問い合わせ</h1>
      <p class="page-title__p"></p>
    </div>
  </div>

<div class="contact">
  <form class="form" method="post">
  <?php echo do_shortcode( '[mwform_formkey key="58"]' ); ?>
  </form>
</div>

<?php get_template_part('includes/footer'); ?>
  

  <?php get_footer(); ?>
</body>
</html>
