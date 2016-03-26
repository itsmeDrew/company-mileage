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

<div class="jumbotron" style="background-color:<?php the_field('solution-hero-color'); ?>">
  <div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="jumbotron-header">
      <h1 class="jumbotron-header__heading"><?php the_title(); ?></h1>
      <p class="jumbotron-header__desc">
        <?php the_content(); ?>
      </p>
    </div>
    <div class="jumbotron-display">
      <img class="jumbotron-display__img" src="<?php the_field('solution-graphic');?>" alt="map" />
    </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>
<div class="solution-about">
  <div class="container">
    <h2 class="about-header__heading">Trusted nationwide by the distributted workforce:</h2>
    <ul class="about-cases__list row">
    <?php if( have_rows('solution-cases') ): while( have_rows('solution-cases') ): the_row(); ?>
      <li class="about-cases__list-item col-sm-3">
        <img class="about-cases__img" src="<?php the_sub_field('case-img'); ?>" alt="case-img" />
      </li>
    <?php endwhile; endif; ?>
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
      <?php if( have_rows('solution-benefits') ): while( have_rows('solution-benefits') ): the_row(); ?>
      <li class="benefits-list__list-item col-sm-4">
        <i class="benefits-list__icon fa <?php the_sub_field('solution-benefits-ico'); ?>"></i>
        <h3 class="benefits-list__heading"><?php the_sub_field('solution-benefits-title'); ?></h3>
        <p class="benefits-list__p">
          <?php the_sub_field('solution-benefits-text'); ?>
        </p>
      </li>
      <?php endwhile; endif; ?>
    </ul>
  </div>
</div>
<div class="solution-features">
  <div class="container">
    <div class="feature-slider">
      <div class="feature-slider__slides js-feature-slider__slides col-sm-6">
        <?php if( have_rows('solution-slider') ): while( have_rows('solution-slider') ): the_row(); ?>
        <div class="feature-slider__slide">
          <img class="feature-slider__slide-img" src="<?php the_sub_field('solution-slider-img'); ?>" alt="slide-img" />
        </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="feature-slider__controls js-feature-slider__nav col-sm-6">
        <?php if( have_rows('solution-slider') ): while( have_rows('solution-slider') ): the_row(); ?>
        <div class="feature-slider__control">
          <h2 class="feature-slider__heading"><?php the_sub_field('solution-slider-heading'); ?></h2>
          <p>
            <?php the_sub_field('solution-slider-text'); ?>
          </p>
        </div>
        <?php endwhile; endif; ?>
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
    <div class="onboarding-process row-fluid">
      <div class="col-md-6">
        <div class="onboarding-process__step">
          <img class="onboarding-process__icon hidden--md" src="<?php bloginfo('template_url'); ?>/img/ico-onboarding-user.png" alt="ico" />
          <div class="onboarding-process__step-content">
            <h2 class="onboarding-process__heading">1. setup employees</h2>
            <p>
              Simply export an employee file from your payroll or accounting system and we do the rest. Our staff will import the employees into our system.
            </p>
          </div>
        </div>
        <div class="onboarding-process__step">
          <img class="onboarding-process__icon hidden--md" src="<?php bloginfo('template_url'); ?>/img/ico-onboarding-book.png" alt="ico" />
          <div class="onboarding-process__step-content">
            <h2 class="onboarding-process__heading">2. address books</h2>
            <p>
              Export the master client list for each location. We will import them into our software for access by the appropriate employee in each division.
            </p>
          </div>
        </div>
        <div class="onboarding-process__step">
          <img class="onboarding-process__icon hidden--md" src="<?php bloginfo('template_url'); ?>/img/ico-onboarding-search.png" alt="ico" />
          <div class="onboarding-process__step-content">
            <h2 class="onboarding-process__heading">3. Testing</h2>
            <p>
              Once the initial setup in complete, we will validate the addresses to ensure accurate mapping.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="onboarding-process__step">
          <img class="onboarding-process__icon hidden--md" src="<?php bloginfo('template_url'); ?>/img/ico-onboarding-chat.png" alt="ico" />
          <div class="onboarding-process__step-content">
            <h2 class="onboarding-process__heading">4. Training</h2>
            <p>
              After setup and testing we will train your Administrators & Supervisors.
            </p>
          </div>
        </div>
        <div class="onboarding-process__step">
          <img class="onboarding-process__icon hidden--md" src="<?php bloginfo('template_url'); ?>/img/ico-onboarding-plug.png" alt="ico" />
          <div class="onboarding-process__step-content">
            <h2 class="onboarding-process__heading">5. Accounting Integration</h2>
            <p>
              Working with your Accounting and Payroll Teams we will build the custom integration to your accounting and payment solutions.
            </p>
          </div>
        </div>
        <div class="onboarding-process__step">
          <img class="onboarding-process__icon hidden--md" src="<?php bloginfo('template_url'); ?>/img/ico-onboarding-fireworks.png" alt="ico" />
          <div class="onboarding-process__step-content">
            <h2 class="onboarding-process__heading">6. That's It!</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi interdum metus felis, nec tincidunt est euismod ultricies.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="quote">
  <div class="container">
    <div class="quote-header">
      <h1 class="quote-header__heading">see how it works</h1>
      <p class="quote-header__desc">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. at nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="quote-request row-fluid">
      <h4 class="quote-request__heading">See CompanyMileage in Action</h4>
      <div class="quote-form">
        <?php echo do_shortcode('[contact-form-7 id="87" title="Solution Demo"]'); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
