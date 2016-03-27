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

<div class="jumbotron">
  <div class="container">
    <h1 class="jumbotron__heading">Save 20-30% on Mileage COSTS</h1>
    <p class="jumbotron__desc">
      CompanyMileage provides companies with significant savings on mileage reimbursement by accurately verifying employee mileage & automating the reimbursement process. How much could your company save?
    </p>
    <div class="savings-calculator js-roi">
      <div id="calculator" class="calculator">
        <input type="text" class="savings-calculator__input" id="employee" tabindex="6" placeholder="How many employees">
      	<input type="text" class="savings-calculator__input" id="miles" tabindex="6" placeholder="How many miles">
      	<input type="text" class="savings-calculator__input" id="rate" tabindex="6" placeholder="Reimbursement Rate">
        <a href="#" class="roi__btn btn-primary js-btn">calculate savings</a>
      </div>
      <div style="display:none;" class="roi__results">
        <form method="post" id="mail_quote_frm" name="mail_quote_frm">
    			<input type="text" name="Mileage Reimbursement" id="mileage-reimbursement">
          <span>Mileage Reimbursement</span><br>
    			<input type="text" name="Estimated Savings (25%)" id="estimated-savings">
          <span>Estimated Savings (25%)</span>
        </form>
        <div class="roi__quote">
          <?php echo do_shortcode('[contact-form-7 id="122" title="Calculate Savings Quote"]'); ?>
        </div>
      </div>
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
          <?php echo do_shortcode( '[contact-form-7 id="67" title="Demo 1"]' ); ?>
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
        <a class="solutions__btn btn-secondary" href="<?php echo get_permalink(13);?>">learn more</a>
      </li>
      <li class="solutions__list-item col-md-4">
        <img src="<?php bloginfo('template_url'); ?>/img/ico-solutions-key.png" alt="key" />
        <h2>SureExpense</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
        </p>
        <a class="solutions__btn btn-secondary" href="<?php echo get_permalink(104);?>">learn more</a>
      </li>
      <li class="solutions__list-item col-md-4">
        <img src="<?php bloginfo('template_url'); ?>/img/ico-solutions-key.png" alt="key" />
        <h2>SureMobile</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
        </p>
        <a class="solutions__btn btn-secondary" href="<?php echo get_permalink(106);?>">learn more</a>
      </li>
    </ul>
  </div>
</div>
<div class="industries row-fluid">
  <div class="container">
    <div class="col-md-7">
      <h2>Serving the Mobile Workforce Nationwide</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <div class="industry__list">
        <div class="industry__listing">
          <img class="industry__ico hidden--sm" src="<?php bloginfo('template_url'); ?>/img/ico-healthcare.png" alt="ico-healthcare" />
          <div class="industry__content">
            <a href="<?php echo get_permalink(50); ?>" class="industry__link">Healthcare & Family Services</a>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
            </p>
          </div>
          <img class="industry__ico--arrow" src="<?php bloginfo('template_url'); ?>/img/ico-arrow-right.png" alt="ico" />
        </div>
        <div class="industry__listing">
          <img class="industry__ico hidden--sm" src="<?php bloginfo('template_url'); ?>/img/ico-wallet.png" alt="ico-wallet" />
          <div class="industry__content">
            <a href="#" class="industry__link">Sales Representatives</a>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
            </p>
          </div>
          <a href="<?php echo get_permalink(50); ?>"></a>
          <img class="industry__ico--arrow" src="<?php bloginfo('template_url'); ?>/img/ico-arrow-right.png" alt="ico" />
        </div>
        <div class="industry__listing">
          <img class="industry__ico hidden--sm" src="<?php bloginfo('template_url'); ?>/img/ico-wheel.png" alt="ico-healthcare" />
          <div class="industry__content">
            <a href="<?php echo get_permalink(50); ?>" class="industry__link">Mobile Employees</a>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
            </p>
          </div>
          <img class="industry__ico--arrow" src="<?php bloginfo('template_url'); ?>/img/ico-arrow-right.png" alt="ico" />
        </div>
      </div>
    </div>
  </div>
</div>
<div class="quote">
  <div class="container">
    <div class="quote-header">
      <h1 class="quote-header__heading">What You Should Know About CompanyMileage</h1>
      <p class="quote-header__desc">
        At CompanyMileage, we're passionate about designing the best mileage reimbursement software. Take a look at our blog to see our frequent updates, our product pages for more information or our Company page to get to know us a little better. If you’re looking for a quote, fill out the form below and a representative will contact you shortly.
      </p>
    </div>
    <div class="quote-request row-fluid">
      <h4 class="quote-request__heading">get a quote</h4>
      <?php echo do_shortcode( '[contact-form-7 id="68" title="Home Quote"]' ); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
