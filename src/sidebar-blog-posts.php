<div class="sidebar-blog-posts">
  <div class="post-data">
    <img class="post-data__img" src="<?php bloginfo('template_url'); ?>/img/author.png" alt="post-author" />
    <p class="post-data__author">By CompanyMileage Team</p>
    <p class="post-data__date"><?php the_time('F j, Y'); ?></p>
  </div>
  <div class="sidebar-subscribe">
    <h2 class="sidebar-heading">Get the T&E expense advice that CFOs rely on.</h2>
    <p>Subscribe to our blog:</p>

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
</div>
