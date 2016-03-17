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
    <div class="jumbotron-header">
      <h1 class="jumbotron-header__heading"><?php the_title(); ?></h1>
      <p class="jumbotron-header__desc">
        <?php the_content(); ?>
      </p>
    </div>
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
<div class="solution-features">
  <div class="container">
    <div class="feature-slider">
      <div class="feature-slider__slides js-feature-slider__slides col-md-6">
        <div class="feature-slider__slide">
          <img class="feature-slider__slide-img" src="http://lorempixel.com/450/350/" alt="slide-img" />
        </div>
        <div class="feature-slider__slide">
          <img class="feature-slider__slide-img" src="http://lorempixel.com/450/351/" alt="slide-img" />
        </div>
        <div class="feature-slider__slide">
          <img class="feature-slider__slide-img" src="http://lorempixel.com/450/352/" alt="slide-img" />
        </div>
      </div>
      <div class="feature-slider__controls js-feature-slider__nav col-md-6">
        <div class="feature-slider__control">
          <h2 class="feature-slider__heading">Title goes here</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="feature-slider__control">
          <h2 class="feature-slider__heading">Title goes here</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="feature-slider__control">
          <h2 class="feature-slider__heading">Title goes here</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="process">
  <div class="container">
    <div class="process-content col-md-6">
      <h2>The Reimbursement Process: Simplified.</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
      </p>
      <ul class="reimbursement-list">
        <li class="reimbursement-list__list-item row-fluid">
          <div class="reimbursement-list__icon--wrapper col-sm-2">
            <div class="reimbursement-list__icon" style="background-color: #ef7f39">
              1
            </div>
          </div>
          <p class="col-xs-10 col-sm-10">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
          </p>
        </li>
        <li class="reimbursement-list__list-item row-fluid">
          <div class="reimbursement-list__icon--wrapper col-sm-2">
            <div class="reimbursement-list__icon" style="background-color: #5eaad4">
              2
            </div>
          </div>
          <p class="col-xs-10 col-sm-10">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
          </p>
        </li>
        <li class="reimbursement-list__list-item row-fluid">
          <div class="reimbursement-list__icon--wrapper col-sm-2">
            <div class="reimbursement-list__icon" style="background-color: #3483bb">
              3
            </div>
          </div>
          <p class="col-xs-10 col-sm-10">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
          </p>
        </li>
      </ul>
    </div>
    <div class="reimbursement-display col-md-6">
      <img class="reimbursement-display__img" src="<?php bloginfo('template_url'); ?>/img/reimbursement.png" alt="reimbursement" />
    </div>
  </div>
</div>
<div class="onboarding">
  <div class="container">
    <header class="onboarding-header">
      <h2 class="onboarding-header__heading">We Make Onboarding Easy.</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
      </p>
    </header>
  </div>
</div>
<?php get_footer(); ?>
