<div class="sidebar-blog-posts">
  <div class="post-data">
    <?php echo get_avatar( get_the_author_email(), '200' ); ?>
    <p class="post-data__author">By <?php the_author(); ?></p>
    <p class="post-data__date"><?php the_time('F j, Y'); ?></p>
  </div>
  <div class="sidebar-subscribe">
    <h2 class="sidebar-heading">Get the T&E expense advice that CFOs rely on.</h2>
    <p>Subscribe to our blog:</p>

    <div class="sidebar-form">
      <?php echo do_shortcode('[contact-form-7 id="102" title="Sidebar Blog"]'); ?>
    </div>
  </div>
</div>
