<?php
/**
 *
 * @package David James
 * @subpackage david-james
 * @since David James 1.0.1
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>
