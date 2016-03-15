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
<div class="about">
  <div class="container">
    <header class="about-header">
      <h2 class="about-header__heading">Trusted nationwide by the distributted workforce:</h2>
      <ul class="about-cases__list row">
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
    </header>
    <div class="about-info col-md-6">
      <h2 class="about-info__heading">An Employer System for Mileage Reimbursement that Saves Time & Money</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="about-demo col-md-6">
      <div class="demo-request">
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
  </div>
</div>
<div class="solutions">
  <div class="container">
    <header class="solutions-header">
      <h2 class="solutions-header__heading">A Suite of Solutions Improving the Reimbursement Process</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </header>
    <ul class="solutions__list row">
      <li class="solutions__list-item col-md-4">
        <img src="<?php bloginfo('template_url'); ?>/img/ico-solutions-key.png" alt="key" />
        <h2>SureMileage</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
        </p>
        <a class="solutions__btn btn-secondary" href="#">learn more</a>
      </li>
      <li class="solutions__list-item col-md-4">
        <img src="<?php bloginfo('template_url'); ?>/img/ico-solutions-key.png" alt="key" />
        <h2>SureExpense</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
        </p>
        <a class="solutions__btn btn-secondary" href="#">learn more</a>
      </li>
      <li class="solutions__list-item col-md-4">
        <img src="<?php bloginfo('template_url'); ?>/img/ico-solutions-key.png" alt="key" />
        <h2>SureMobile</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
        </p>
        <a class="solutions__btn btn-secondary" href="#">learn more</a>
      </li>
    </ul>
  </div>
</div>
<div class="industries row-fluid">
  <div class="container">
    <div class="col-md-6">
      <h2>Serving the Mobile Workforce Nationwide</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <div class="industry-list">
        <div class="industry-list__listing">
          <img class="industry-icon" src="<?php bloginfo('template_url'); ?>/img/ico-healthcare.png" alt="ico-healthcare" />
          <div class="industry-list__content">
            <h2>Healthcare & Family Services</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
            </p>
          </div>
        </div>
        <div class="industry-list__listing">
          <img class="industry-icon" src="<?php bloginfo('template_url'); ?>/img/ico-healthcare.png" alt="ico-healthcare" />
          <div class="industry-list__content">
            <h2>Sales Representatives</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
            </p>
          </div>
        </div>
        <div class="industry-list__listing">
          <img class="industry-icon" src="<?php bloginfo('template_url'); ?>/img/ico-healthcare.png" alt="ico-healthcare" />
          <div class="industry-list__content">
            <h2>Mobile Employees</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="contact">
  <div class="container">
    <div class="contact-header">
      <h1 class="contact-header__heading">What You Should Know About CompanyMileage</h1>
      <p class="contact-header__desc">
        At CompanyMileage, we're passionate about designing the best mileage reimbursement software. Take a look at our blog to see our frequent updates, our product pages for more information or our Company page to get to know us a little better. If you’re looking for a quote, fill out the form below and a representative will contact you shortly.
      </p>
    </div>
    <div class="quote-request row-fluid">
      <h4 class="quote-request__heading">get a quote</h4>
      <div class="quote-form">
        <div class="quote-form__input--wrapper col-md-6">
          <input class="quote-form__input" type="text" name="name" placeholder="Company Name">
        </div>
        <div class="quote-form__input--wrapper col-md-6">
          <input class="quote-form__input" type="text" name="name" placeholder="Company Name">
        </div>
        <div class="quote-form__input--wrapper col-md-6">
          <input class="quote-form__input" type="text" name="name" placeholder="Company Name">
        </div>
        <div class="quote-form__input--wrapper col-md-6">
          <input class="quote-form__input" type="text" name="name" placeholder="Company Name">
        </div>
      </div>
      <a class="btn-primary" href="#">submit</a>
    </div>
  </div>
</div>
<?php get_footer(); ?>
