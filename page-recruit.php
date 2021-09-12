<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>

  <?php get_template_part('includes/header'); ?>
<div class="recruit__item2">
  <img src="<?php echo get_template_directory_uri(); ?>/img/recruit.png" alt="">
  <h2 class="recruit__item-ttl">採用情報</h2>
</div>

<div class="container">
  <h4 class="mt-5">現在、採用情報はありません。</h4>
</div>

<?php get_template_part('includes/footer'); ?>
  

  <?php get_footer(); ?>
</body>
</html>