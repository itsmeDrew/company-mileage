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
      <div class="pricing row">
        <div class="pricing__block col-sm-4">
          <div class="pricing__header">
            <span class="pricing__heading">SureMileage</span>
          </div>
          <ul class="pricing__list">
            <li class="pricing__item">Point-to-Point Mileage Calculation</li>
            <li class="pricing__item">Payroll Integration*</li>
            <li class="pricing__item">Accounting Integration*</li>
            <li class="pricing__item">SureMobile Access</li>
            <li class="pricing__item">Month-to-Month Contract</li>
            <li class="pricing__item">Full LIbrary of Reports</li>
          </ul>
          <a class="pricing__footer pricing__link" href="<?php echo get_permalink(182); ?>" href="#">request demo</a>
        </div>
        <div class="pricing__block col-sm-4">
          <div class="pricing__header">
            <span class="pricing__heading">SureExpense</span>
          </div>
          <ul class="pricing__list">
            <li class="pricing__item">Online Expense Submission</li>
            <li class="pricing__item">Online Receipt Submission</li>
            <li class="pricing__item">Payroll Integration*</li>
            <li class="pricing__item">Accounting Integration*</li>
            <li class="pricing__item">SureMobile Access</li>
            <li class="pricing__item">Month-to-Month Contract</li>
            <li class="pricing__item">Full Library of Reports</li>
          </ul>
          <a class="pricing__footer pricing__link" href="<?php echo get_permalink(182); ?>" href="#">request demo</a>
        </div>
        <div class="pricing__block col-sm-4">
          <div class="pricing__header">
            <span class="pricing__heading">Full Suite</span>
          </div>
          <ul class="pricing__list">
            <li class="pricing__item">Point-to-Point Mileage Calculation</li>
            <li class="pricing__item">Online Expense Submission</li>
            <li class="pricing__item">Online Receipt Submission</li>
            <li class="pricing__item">Payroll Integration*</li>
            <li class="pricing__item">Accounting Integration*</li>
            <li class="pricing__item">SureMobile Access</li>
            <li class="pricing__item">Month-to-Month Contract</li>
            <li class="pricing__item">Full Library of Reports</li>
          </ul>
          <a class="pricing__footer pricing__link" href="<?php echo get_permalink(182); ?>" href="#">request demo</a>
        </div>
      </div>
<?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>

<?php get_footer(); ?>
