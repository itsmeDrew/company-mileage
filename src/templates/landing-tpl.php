<?php
/**
 * Template Name: Landing
 *
 * @package Company Mileage
 * @subpackage company-mileage
 * @since Company Mileage 1.0.1
 */
get_header();
?>

<div class="landing">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; wp_reset_postdata(); ?>
        <div class="sidebar-demo">
          <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
