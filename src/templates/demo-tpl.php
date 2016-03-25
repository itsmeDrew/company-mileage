<?php
/**
 * Template Name: Demo
 *
 * @package Company Mileage
 * @subpackage company-mileage
 * @since Company Mileage 1.0.1
 */
get_header();
?>

<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php the_field('demo_video'); ?>" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="col-md-4">
        <h2 class="jumbotron__heading">Watch More Demos</h2>
        <a class="btn-primary--light-grey" href="<?php echo get_permalink('76'); ?>">Solutions for Hospice & Homecare</a>
        <a class="btn-primary--sky" href="<?php echo get_permalink('78'); ?>">Solutions for Traditional Business</a>
        <a class="btn-primary--orange" href="<?php echo get_permalink('69'); ?>">SureExpense Demo</a>
        <a class="btn-primary--grey" href="<?php echo get_permalink('83'); ?>">Concur Integration</a>
      </div>
    </div>
    <strong class="jumbotron__heading--secondary">Call (877) 677-0377 or fill out the contact form below.</strong>
    <div class="quote-request row-fluid">
      <h4 class="quote-request__heading">Contact A Representative</h4>
      <?php echo do_shortcode( '[contact-form-7 id="71" title="Contact a Representative"]' ); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
