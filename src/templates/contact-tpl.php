<?php
/**
 * Template Name: Contact
 *
 * @package Company Mileage
 * @subpackage company-mileage
 * @since Company Mileage 1.0.1
 */
get_header();
?>

<?php include(TEMPLATEPATH . '/subhead.php'); ?>

<div class="contact container">
  <div class="row">
    <div class="col-md-8">
      <?php the_content(); ?>
    </div>
    <div class="col-md-4">

    </div>
  </div>
</div>

<?php get_footer(); ?>
