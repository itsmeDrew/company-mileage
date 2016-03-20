<?php get_header(); ?>
<div class="blog-posting row">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="col-sm-4">
      <?php get_sidebar('blog-posts'); ?>
    </div>
    <div class="col-sm-8">
      <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array(1200, 350) ); ?>
      <?php if ($thumbnail[0]) : ?>

      <h2><?php the_title(); ?></h2>

      <?php endif; ?>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
