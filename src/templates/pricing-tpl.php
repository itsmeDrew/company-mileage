<?php
/**
 * Template Name: Pricing
 *
 * @package Company Mileage
 * @subpackage company-mileage
 * @since Company Mileage 1.0.1
 */
get_header();
?>

<?php include(TEMPLATEPATH . '/subhead.php'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="jumbotron--secondary" style="background-image: url('<?php the_field('hero_image'); ?>')">
  <div class="container">
    <h1 class="jumbotron__heading"><?php the_field('hero_text'); ?></h1>
  </div>
</div>
<div class="contact container">
  <div class="contact-content">
      <?php the_content(); ?>

<?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>

<?php get_footer(); ?>
