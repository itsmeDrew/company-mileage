<?php
/**
 * Template Name: Solution
 *
 * @package Company Mileage
 * @subpackage company-mileage
 * @since Company Mileage 1.0.1
 */
get_header();
?>

<div class="jumbotron">
  <div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1 class="jumbotron__heading"><?php the_title(); ?></h1>
    <p class="jumbotron__desc">
      <?php the_content(); ?>
    </p>
    <div class="jumbotron-display">
      <img class="jumbotron-display__img" src="<?php bloginfo('template_url'); ?>/img/map.jpg" alt="map" />
    </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>
<div class="solution-about">
  <div class="container">
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
  </div>
</div>
<div class="benefits">
  <div class="container">
    <header class="benefits-header">
      <h2 class="benefits-header__heading">A Suite of Solutions Improving the Reimbursement Process</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
      </p>
    </header>
    <ul class="benefits-list row-fluid">
      <li class="benefits-list__list-item col-sm-4">
        <i class="benefits-list__icon fa fa-lock"></i>
        <h3 class="benefits-list__heading">benefit 1</h3>
        <p class="benefits-list__p">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
      </li>
      <li class="benefits-list__list-item col-sm-4">
        <i class="benefits-list__icon fa fa-clock-o"></i>
        <h3 class="benefits-list__heading">benefit 2</h3>
        <p class="benefits-list__p">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
      </li>
      <li class="benefits-list__list-item col-sm-4">
        <i class="benefits-list__icon fa fa-line-chart"></i>
        <h3 class="benefits-list__heading">benefit 3</h3>
        <p class="benefits-list__p">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
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
          <img class="industry-icon" src="<?php bloginfo('template_url'); ?>/img/ico-wallet.png" alt="ico-wallet" />
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
