<div class="sidebar-blog">
    <h2 class="sidebar-heading">Learn the skills CFOs need to manage their T&E expense more wisely.</h2>
    <div class="sidebar-form">
      <input class="sidebar-form__input" type="email" name="text" placeholder="Your Name">
      <input class="sidebar-form__input" type="email" name="email" placeholder="Your Email">
      <a class="sidebar-form__btn btn-primary" href="#">subscribe</a>
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
