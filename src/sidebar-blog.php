<div class="sidebar-blog">
  <div class="sidebar-subscribe">
    <h2 class="sidebar-heading">Learn the skills CFOs need to manage their T&E expense more wisely.</h2>
    <p>
      Subscribe to our blog:
    </p>
    <div class="sidebar-form">
      <?php echo do_shortcode('[gravityform id="4" title="false" description="false"]'); ?>
    </div>
    <div class="sidebar-widget">
      <h2>category</h2>
      <ul class="sidebar-list">
        <?php
            $categories = array(
        	'orderby'            => 'name',
        	'order'              => 'ASC',
        	'style'              => 'list',
        	'exclude'            => '',
        	'include'            => '',
        	'hierarchical'       => 1,
        	'title_li'           => __( '' ),
        	'taxonomy'           => 'category',
            );
            wp_list_categories( $categories );
        ?>
      </ul>
    </div>
  </div>
</div>
