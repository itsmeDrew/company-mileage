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
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/KwyOfqbP8JU" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="col-md-4">
        <h2 class="jumbotron__heading">Watch More Demos</h2>
        <a class="btn-primary--light-grey" href="mailto:support@companymileage.com">email support</a>
        <a class="btn-primary--sky" href="mailto:management@companymileage.com">email management</a>
        <a class="btn-primary--orange" href="mailto:sales@companymileage.com">email sales</a>
        <a class="btn-primary--grey" href="#">join webex meeting</a>
      </div>
    </div>
    <strong class="jumbotron__heading--secondary">Call (877) 677-0377 or fill out the contact form below.</strong>
    <div class="quote-request row-fluid">
      <h4 class="quote-request__heading">get a quote</h4>
      <?php echo do_shortcode( '[contact-form-7 id="68" title="Home Quote"]' ); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
