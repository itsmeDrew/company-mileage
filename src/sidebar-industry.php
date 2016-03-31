<div class="sidebar-demo">
    <?php if( is_page(array( 145, 'concur-integration')) ) {?>
      <h2 class="sidebar-heading">Watch our Concur Demo</h2>
    <?php } else {?>
      <h2 class="sidebar-heading">Watch a Demo</h2>
    <?php }?>
    <div class="sidebar-form">
      <?php echo do_shortcode('[contact-form-7 id="86" title="Industry Sidebar Demo"]'); ?>
    </div>
    <?php if( is_page(array( 145, 'concur-integration')) ) {?>
    <div class="sidebar-demo__contact">
      <p>Learn more by contacting us today at:</p>
      <p>Phone (877) 677-0377</p>
      <p>Email: concur@companymileage.com</p>
    </div>
    <?php }?>
</div>
