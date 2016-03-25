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
    <h1 class="jumbotron__heading">Save 20-30% on Mileage COSTS</h1>
    <p class="jumbotron__desc">
      CompanyMileage provides companies with significant savings on mileage reimbursement by accurately verifying employee mileage & automating the reimbursement process. How much could your company save?
    </p>
    <div class="savings-calculator">
      <input class="savings-calculator__input" type="text" name="name" placeholder="number of employees">
      <input class="savings-calculator__input" type="text" name="name" placeholder="miles driven per week">
      <input class="savings-calculator__input" type="text" name="name" placeholder="reimbursment rate">
      <a class="btn-primary" href="#">calculate savings</a>
    </div>
    <div class="jumbotron-display">
      <img class="jumbotron-display__img" src="<?php bloginfo('template_url'); ?>/img/map.jpg" alt="map" />
    </div>
  </div>
</div>

<?php get_footer(); ?>
