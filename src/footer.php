      </div>
      <footer class="site-footer row-fluid">
        <?php if (
          ! is_single() &&
          ! is_page_template( 'templates/default-tpl.php' ) &&
          ! is_page_template( 'templates/industry-tpl.php' ) &&
          ! is_page_template( 'templates/pricing-tpl.php' ) &&
          ! is_404()
        ) { ?>
        <div class="footer-top">
          <div class="container">
            <div class="company col-sm-5">
              <img class="company__img" src="<?php bloginfo('template_url'); ?>/img/ico-company.png" alt="company" />
              <div class="company__info">
                <span class="company__name">CompanyMileage LLC</span>
                <span class="company__address">
                  15441 Knoll Trail, Ste. 260 <br>
                  Dallas, TX 75248<br>
                  877-677-0377
                </span>
              </div>
            </div>
            <div class="footer-blog col-sm-6 col-sm-push-1">
              <h2 class="footer-blog__heading">recent blogs:</h2>
              <ul class="footer-blog__list">
                <?php $query = new WP_Query(array( 'posts_per_page' => 3)); ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                <li class="footer-blog__list-item">
                  <a class="footer-blog__link" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
                <?php endwhile; endif; wp_reset_postdata(); ?>
              </ul>
            </div>
          </div>
        </div>
        <?php /* END IF */ } ?>

        <div class="footer-bottom">
          <div class="container">
            © 2016 CompanyMileage LLC
          </div>
          <div class="footer-social">
            <a class="footer-social__link" href="#">
              <i class="fa fa-twitter footer-social__icon"></i>
            </a>
            <a class="footer-social__link" href="#">
              <i class="fa fa-facebook footer-social__icon"></i>
            </a>
          </div>
        </div>
      </footer>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <?php wp_footer(); ?>
  </body>
</html>
