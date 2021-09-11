<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

  <?php get_template_part('includes/header'); ?>

  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
 

  <header class="masthead" id="single__header">
  <?php 
  $img = get_eyecatch_with_default(); 
  ?>
  <img src="<?php echo $img[0]; ?>">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1 class="mt-3"><?php the_title(); ?></h1>
            
            <span class="meta">
            <?php the_date(); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto mt-5">
       
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </article>

  <hr>


  <?php endwhile; ?>
  <?php endif; ?>

<?php get_template_part('includes/footer'); ?>

  
<?php get_footer(); ?>
</body>

</html>