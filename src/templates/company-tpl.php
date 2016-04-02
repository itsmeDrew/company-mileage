<?php
/**
 * Template Name: Company
 *
 * @package Company Mileage
 * @subpackage company-mileage
 * @since Company Mileage 1.0.1
 */
get_header();
?>

<div class="jumbotron">
  <div class="jumbotron__container container">
    <h1 class="jumbotron__heading">We’re building better expense management software in Dallas, Texas</h1>
    <p class="jumbotron__desc">
      When combining mileage reimbursement levels near 60 cents per mile with inaccuracies in tracking actual miles driven by mobile employees, companies are spending billions each year in excess payments. At CompanyMileage, we help companies effectively manage one of their largest costs; reimbursing employee mileage.
    </p>
  </div>
</div>
<div class="technology">
  <div class="container">
    <div class="col-sm-6">
      <img class="technology__ico" src="<?php bloginfo('template_url'); ?>/img/ico-gauge.png" alt="ico" />
    </div>
    <div class="col-sm-6">
      <p>
        CompanyMileage uses a proprietary, automated web-based technology that accurately verifies employee mileage and manages the entire reimbursement process. Our system provides companies with significant savings on their mileage reimbursement in an accurate, measurable way that is painless to implement.
      </p>
    </div>
  </div>
</div>
<div class="team">
  <div class="container">
    <div class="team-header">
      <h2 class="team-header__heading">our executive team</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
      </p>
    </div>
    <div class="team-member row">
      <div class="col-sm-6">
        <div class="team-member__img--wrapper">
          <img class="team-member__img" src="http://lorempixel.com/200/200" alt="team member" />
        </div>
      </div>
      <div class="col-sm-6">
        <div class="team-member__header">
          <h2>Kevin Winters</h2>
          <h2>Founder</h2>
        </div>
        <p>
          Kevin's background as a CPA, Payroll Service Founder, and Technology Services leader made the creation of CompanyMileage a natural evolution of his experience in technology-based accounting, payroll, and time and attendance systems. Kevin oversees the building of the Sure Mileage™ System as well as ensuring client service is of top priority.
        </p>
        <p>
          Kevin earned his CPA while working in financial accounting in the early 90's. In 1993 he co-founded Payroll Associates, Inc. and grew an incredible team that became the largest independent payroll-processing provider in the DFW/Metroplex. Payroll Associates provided services to over 1,100 business and 60,000 employees. In 2005, Payroll Associates was sold to Paychoice and became the Western Region Headquarters. Kevin continued as a member of the senior management team until spring 2006.
        </p>
        <p>
          Kevin has been a member of Entrepreneurs Organization (EO) since 2001 and served on the Dallas Board from 2003-2006.
        </p>
      </div>
    </div>
    <div class="team-member row">
      <div class="col-sm-6">
        <div class="team-member__img--wrapper">
          <img class="team-member__img" src="http://lorempixel.com/200/200" alt="team member" />
        </div>
      </div>
      <div class="col-sm-6">
      <div class="team-member__header">
        <h2>Denny Alvarez</h2>
        <h2>Partner & Head of Operations</h2>
      </div>
      <p>
        Denny joined CompanyMileage in the spring of 2010. Denny's past experience as the Western Region Vice President of Paychoice as well as his 5 years as the Vice President of Operations for Payroll Associates make him the perfect fit to help CompanyMileage continue its growth.
      </p>
      <p>
        Denny oversees all development and new client implementation ensuring the same perfection as you would expect from your payroll provider.
      </p>
      <p>
        Denny resides in Plano with his wife and children.
      </p>
      </div>
    </div>
  </div>
</div>
<div class="quote">
  <div class="container">
    <div class="quote-request">
      <div class="quote-form">
        <h4 class="quote-request__heading">Watch a 2 Minute Demo of CompanyMileage</h4>
          <?php echo do_shortcode('[gravityform id="10" title="false" description="false"]'); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
