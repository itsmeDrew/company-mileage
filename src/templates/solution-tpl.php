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
<div class="solution-features">
  <div class="container">
    <div class="feature-slider">
      <div class="feature-slider__slides js-feature-slider__slides col-md-6">
        <div>
          <h3>one</h3>
        </div>
        <div>
          <h3>two</h3>
        </div>
      </div>
      <div class="feature-slider__controls js-feature-slider__nav col-md-6">
        <div>
          <h3>one</h3>
        </div>
        <div>
          <h3>two</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
