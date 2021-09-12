<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>

  <?php get_template_part('includes/header'); ?>

<div class="contact container">
<img src="<?php echo get_template_directory_uri(); ?>/img/firstview.jpg" alt="">
<form class="" action="">
    <?php echo do_shortcode( '[contact-form-7 id="27" title="お問い合わせ"]' ); ?> 
    <p class="name"></p>
</form>

</div>

<?php get_template_part('includes/footer'); ?>
  

  <?php get_footer(); ?>
</body>
</html>
