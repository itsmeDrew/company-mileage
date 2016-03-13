<?php
/**
 * Template Name: Home
 *
 * @package Company Mileage
 * @subpackage company-mileage
 * @since Company Mileage 1.0.1
 */
get_header();
?>

<div class="jumbotron" role="hero">
  <div class="container">
    <h2 class="jumbotron__heading">Save 20-30% on Mileage COSTS</h2>
    <p class="jumbotron__desc">
      CompanyMileage provides companies with significant savings on mileage reimbursement by accurately verifying employee mileage & automating the reimbursement process. How much could your company save?
    </p>
    <div class="savings-calculator">
      <input class="savings-calculator__input" type="text" name="name" placeholder="number of employees">
      <input class="savings-calculator__input" type="text" name="name" placeholder="miles driven per week">
      <input class="savings-calculator__input" type="text" name="name" placeholder="reimbursment rate">
      <a class="btn-primary" href="#">calculate savings</a>
    </div>
    <div class="">
    </div>
  </div>
</div>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

  <?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
