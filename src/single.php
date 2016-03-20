<?php
/**
 * Displays single posts
 *
 * @package Company Mileage
 * @subpackage company-mileage
 * @since Company Mileage 1.0.1
 */
get_header();
?>

<?php include(TEMPLATEPATH . '/subhead.php'); ?>

<div class="blog-posting container">
  <div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="col-sm-4">
      <?php get_sidebar('blog-posts'); ?>
    </div>
    <div class="col-sm-8">
      <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array(1200, 350) ); ?>
      <?php if ($thumbnail[0]) : ?>

      <div class="post-header">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <img class="blog-posting__featured-img" src="<?php echo $thumbnail[0]; ?>" alt="blog-post-img" />
      </div>
      <div class="post-content">
        <?php the_content(); ?>
      </div>
      <div class="post-demo">
        <div class="demo-request row">
          <div class="demo-header col-sm-6">
            <h2 class="demo__heading">Watch a 2 Minute Demo of CompanyMilage</h2>
            <p class="demo__p">
              Find out more about SureMileage and other CompanyMileage products by watching a two-minute demo.
            </p>
          </div>
          <div class="demo-form col-sm-6">
            <input class="demo-form__input" type="text" name="email" placeholder="Your Email Address">
            <a class="demo-form__btn btn-primary" href="#">watch demo</a>
          </div>
        </div>
      </div>

      <?php endif; ?>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
