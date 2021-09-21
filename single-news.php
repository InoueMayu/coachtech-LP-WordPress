<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<style>
.single-eyecatch > img {
  width: 100%;
  height: auto;
}

.single-container {
  background: #fff;
  position: relative;
  top: -50px;
  padding: 50px;
  box-sizing: border-box;
  margin: 0 40px;
}

.tags-date.flex {
  justify-content: space-between;
}

.single-tag__chilg {
  display: inline-block;
  margin-right: 20px;
}

.single-header__contain {
  margin-bottom: 30px;
}

.single-category-tag {
  top: 0;
  left: 0;
}

.style__border {
  border-left: 6px solid #707070;
  padding: 10px;
}

.single-title {
  font-size: 30px;
  margin-bottom: 20px;
  line-height: 1.2;
}

.eyecatch {
  margin: 0 auto;
  padding: 0 20px 40px;
}

@media screen and (max-width: 480px) {
.single-title {
    font-size: 20px;
  }

.single-container {
  background: #fff;
  position: relative;
  top: -50px;
  left: -30px;
  padding: 50px;
  box-sizing: border-box;
  margin: 0 40px;
  
}
.tags-date{
    font-size: 14px;
  } 

  .main-text {
    line-height: 1.7;
  } 
}
</style>


<body <?php body_class(); ?>>

  <?php get_template_part('includes/header'); ?>

  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
 
  <header class="masthead" id="single__header">
  <div class="eyecatch">
    <div class="single-eyecatch page-eyecatch">
    <?php 
      $img = get_eyecatch_with_default2(); 
    ?>   
      <img src="<?php echo $img[0]; ?>" alt="">
      <div class="page-title">
        <p class=></p>
      </div>
    </div>
    <div class="single-container container">
      <div class="single-header__contain">
        <div class="style__border">
          <h1 class="single-title">
          <?php the_title(); ?>
          </h1>
          <div class="flex tags-date">
            <p class="single-date"><?php the_date(); ?></p>
          </div>
        </div>
      </div>
      <div class="main-text">
      <?php the_content(); ?>
      </div>
    </div>
  </div>
  </header>


  <hr>


  <?php endwhile; ?>
  <?php endif; ?>

<?php get_template_part('includes/footer'); ?>

  
<?php get_footer(); ?>
</body>

</html>