<div class="subhead">
  <div class="container">
    <div class="row">
      <div class="subhead-header col-xs-8">
        <?php if ( is_single() ) { ?>
          <?php previous_post_link('%link', '<i class="subhead__ico subhead__ico-arrow--left fa fa-chevron-left"></i>', FALSE) ?>
          <h1 class="subhead__heading">other articles</h1>
          <?php next_post_link('%link', '<i class="subhead__ico subhead__ico-arrow--right subhead__ico--nav fa fa-chevron-right"></i>', FALSE) ?>

        <?php } else if ( is_home() ) { ?>
          <i class="subhead__ico fa fa-rss"></i>
          <h1 class="subhead__heading">news & updates</h1>

        <?php } else if ( is_404() ) { ?>
          <h1 class="subhead__heading">404</h1>

        <?php } else if ( is_archive() ) { ?>
          <?php
            single_cat_title( '<h1 class="subhead__heading">', '</h1>' );
          ?>

        <?php } else { ?>
          <h1 class="subhead__heading"><?php the_title(); ?></h1>

        <?php } ?>
      </div>
      <div class="subhead-social">
        <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
      </div>
    </div>
  </div>
</div>
