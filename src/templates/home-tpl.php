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
        <div class="savings-calculator__input-row">
          <label class="savings-calculator__label">How many mobile employees</label>
          <input type="text" class="savings-calculator__input" id="employee" tabindex="6" value="100">
        </div>
        <div class="savings-calculator__input-row">
          <label class="savings-calculator__label">Average miles driven per week</label>
        	<input type="text" class="savings-calculator__input" id="miles" tabindex="6" value="200">
        </div>
        <div class="savings-calculator__input-row">
          <label class="savings-calculator__label">reimbursement rate</label>
        	<input type="text" class="savings-calculator__input" id="rate" tabindex="6" value=".50">
        </div>
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
          <?php echo do_shortcode('[gravityform id="6" title="false" description="false"]'); ?>
        </div>
      </div>
    </div>
    <div class="jumbotron-display">
      <img class="jumbotron-display__img" src="<?php bloginfo('template_url'); ?>/img/hero-home.png" alt="company mileage" />
    </div>
  </div>
</div>
<div class="about">
  <div class="container">
    <header class="about-header">
      <h2 class="about-header__heading">Trusted nationwide by the distributed workforce:</h2>
      <ul class="about-cases__list row">
        <?php if( have_rows('home-cases') ): while( have_rows('home-cases') ): the_row(); ?>
          <li class="about-cases__list-item col-sm-3">
            <img class="about-cases__img" src="<?php the_sub_field('case-img'); ?>" alt="case-img" />
          </li>
        <?php endwhile; endif; ?>
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
          <?php echo do_shortcode('[gravityform id="10" title="false" description="false"]'); ?>
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
      <?php if( have_rows('home-solutions') ): while( have_rows('home-solutions') ): the_row(); ?>
      <li class="solutions__list-item col-md-4">
        <img src="<?php the_sub_field('solution-ico'); ?>" alt="icon" />
        <h2><?php the_sub_field('solution-title'); ?></h2>
        <p>
          <?php the_sub_field('solution-desc'); ?>
        </p>
        <a class="solutions__btn btn-secondary" href="<?php the_sub_field('solution-link'); ?>">learn more</a>
      </li>
      <?php endwhile; endif; ?>
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
        <a href="<?php echo get_permalink(50); ?>">
          <div class="industry__listing">
            <img class="industry__ico hidden--sm" src="<?php bloginfo('template_url'); ?>/img/ico-healthcare.png" alt="ico-healthcare" />
            <div class="industry__content">
              <span class="industry__link">Healthcare & Family Services</span>
              <p>
                Lorem consectetur ipsum dolor consectetur sit amet, consectetur adipisicing elit,as in another.
              </p>
            </div>
            <img class="industry__ico--arrow" src="<?php bloginfo('template_url'); ?>/img/ico-arrow-right.png" alt="ico" />
          </div>
        </a>
        <a href="<?php echo get_permalink(59); ?>">
          <div class="industry__listing">
            <img class="industry__ico hidden--sm" src="<?php bloginfo('template_url'); ?>/img/ico-wallet.png" alt="ico-wallet" />
            <div class="industry__content">
              <span class="industry__link">Sales Representatives</span>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
              </p>
            </div>
            <img class="industry__ico--arrow" src="<?php bloginfo('template_url'); ?>/img/ico-arrow-right.png" alt="ico" />
          </div>
        </a>
        <a href="<?php echo get_permalink(138); ?>">
          <div class="industry__listing">
            <img class="industry__ico hidden--sm" src="<?php bloginfo('template_url'); ?>/img/ico-wheel.png" alt="ico-healthcare" />
            <div class="industry__content">
              <span class="industry__link">Mobile Employees</span>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
              </p>
            </div>
            <img class="industry__ico--arrow" src="<?php bloginfo('template_url'); ?>/img/ico-arrow-right.png" alt="ico" />
          </div>
        </a>
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
      <div class="quote-form">
        <?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
