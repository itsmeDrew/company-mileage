<div class="subhead">
  <div class="container">
    <div class="row">
      <div class="subhead-header col-xs-8">
        <?php if ( is_single() ) { ?>
          <?php previous_post_link('%link', '<i class="subhead__ico subhead__ico-arrow--left fa fa-chevron-left"></i>', FALSE) ?>
          <h1 class="subhead__heading">other articles</h1>
          <?php next_post_link('%link', '<i class="subhead__ico subhead__ico-arrow--right subhead__ico--nav fa fa-chevron-right"></i>', FALSE) ?>
        <?php } else { ?>
          <i class="subhead__ico fa fa-rss"></i>
          <h1 class="subhead__heading">news & updates</h1>
        <?php } ?>
      </div>
      <div class="subhead-social col-xs-4">
        <i class="subhead__ico fa fa-facebook-square"></i>
        <i class="subhead__ico fa fa-twitter-square"></i>
        <i class="subhead__ico fa fa-linkedin-square"></i>
      </div>
    </div>
  </div>
</div>
