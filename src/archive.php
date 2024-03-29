<?php
/**
 * Displays Category, Archive, Tag pages
 *
 * @package Company Mileage
 * @subpackage company-mileage
 * @since Company Mileage 1.0.1
 */
get_header();
?>

<?php if ( have_posts() ) : ?>
<?php include(TEMPLATEPATH . '/subhead.php'); ?>

<div class="site-blog container">
  <div class="row">
    <div class="blog-list col-md-8">

      <?php	while ( have_posts() ) : the_post(); ?>
      <div class="blog-listing">
        <div class="blog-listing__header">
          <h2 class="blog-listing__heading"><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></h2>
          <p class="blog-listing__details">Posted by <?php the_author(); ?> | <?php the_time('F j, Y'); ?></p>
        </div>
        <div class="blog-listing__img-wrapper">
          <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array(1200, 350) ); ?>
          <?php if ($thumbnail[0]) : ?>
          <a href="<?php echo get_permalink(); ?>">
            <img class="blog-list__image" src="<?php echo $thumbnail[0]; ?>" alt="<?php echo the_title(); ?>" />
          </a>
          <?php endif; ?>
        </div>
        <p class="blog-list__excerpt">
          <?php the_excerpt(); ?>
        </p>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
    <div class="archive-sidebar col-md-4">
      <?php get_sidebar('blog'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
