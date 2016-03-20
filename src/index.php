<?php get_header(); ?>
<div class="blog-posting container">
  <div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="col-sm-4">
      <?php get_sidebar('blog-posts'); ?>
    </div>
    <div class="col-sm-8">
      <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array(1200, 350) ); ?>
      <?php if ($thumbnail[0]) : ?>

      <h2><?php the_title(); ?></h2>
      <img class="blog-posting__featured-img" src="<?php echo $thumbnail[0]; ?>" alt="blog-post-img" />
      <?php endif; ?>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
