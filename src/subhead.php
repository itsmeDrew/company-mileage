<div class="subhead">
  <div class="container">
    <div class="row">
      <div class="subhead-header col-xs-8">
        <?php if ( is_single() ) { ?>
          <?php previous_post_link('%link', '<i class="subhead__ico subhead__ico-arrow--left fa fa-chevron-left"></i>', FALSE) ?>
          <h1 class="subhead__heading">other articles</h1>
          <?php next_post_link('%link', '<i class="subhead__ico subhead__ico-arrow--right subhead__ico--nav fa fa-chevron-right"></i>', FALSE) ?>

        <?php } else if ( is_page_template('templates/blog-tpl.php') ) { ?>
          <i class="subhead__ico fa fa-rss"></i>
          <h1 class="subhead__heading">news & updates</h1>

        <?php } else if ( is_404() ) { ?>
          <h1 class="subhead__heading">404</h1>

        <?php } else { ?>
          <h1 class="subhead__heading"><?php the_title(); ?></h1>

        <?php } ?>
      </div>
      <div class="subhead-social col-xs-4">
        <a href="#"><i class="subhead__ico fa fa-facebook-square"></i></a>
        <a href="#"><i class="subhead__ico fa fa-twitter-square"></i></a>
        <a href="#"><i class="subhead__ico fa fa-linkedin-square"></i></a>
      </div>
    </div>
  </div>
</div>
