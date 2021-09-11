<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>

  <?php get_template_part('includes/header'); ?>

<img src="<?php echo get_template_directory_uri(); ?>/img/interview.png" alt="">
<div class="container">
  <h4 class="mt-5">準備中です。</h4>
</div>

<?php get_template_part('includes/footer'); ?>
  

  <?php get_footer(); ?>
</body>
</html>