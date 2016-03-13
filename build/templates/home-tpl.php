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
    <div class="jumbotron__display">
      <img src="<?php bloginfo('template_url'); ?>/img/map.jpg" alt="map" />
    </div>
  </div>
</div>
<div class="about">
  <div class="container">
    <header class="about-header">
      <h2 class="about__heading">Trusted nationwide by the distributted workforce:</h2>
      <ul class="about-cases__list">
        <li class="about-cases__list-item col-sm-3">
          <img class="about-cases__img" src="<?php bloginfo('template_url'); ?>/img/case-cleveland-clinic.png" alt="cleveland clinic" />
        </li>
        <li class="about-cases__list-item col-sm-3">
          <img class="about-cases__img" src="<?php bloginfo('template_url'); ?>/img/case-girl-scouts.png" alt="girl scouts" />
        </li>
        <li class="about-cases__list-item col-sm-3">
          <img class="about-cases__img" src="<?php bloginfo('template_url'); ?>/img/case-cleveland-clinic.png" alt="cleveland clinic" />
        </li>
        <li class="about-cases__list-item col-sm-3">
          <img class="about-cases__img" src="<?php bloginfo('template_url'); ?>/img/case-cleveland-clinic.png" alt="cleveland clinic" />
        </li>
      </ul>
      <div class="about-info col-md-6">
        <h2 class="about-info__heading">An Employer System for Mileage Reimbursement that Saves Time & Money</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="about-demo col-md-6">
        <div class="demo">
          <h2 class="demo__heading">View a Demo</h2>
          <p class="demo__p">
            In just 2 minutes, you can see how easily CompanyMileage can automate your mileage reimbursement processes.
          </p>
          <div class="demo-form">
            <input class="demo-form__input" type="text" name="email" placeholder="Your Email Address">
            <a class="demo-form__btn btn-primary" href="#">watch demo</a>
          </div>
        </div>
      </div>
    </header>
  </div>
</div>

<?php get_footer(); ?>
