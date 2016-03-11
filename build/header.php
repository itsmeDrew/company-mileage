<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '-', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="site-header__content">
      <div class="site-branding">
        <img class="site-branding__logo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="" />
      </div>
      <div class="site-nav--wrapper">
        <div class="site-login">
          <a class="btn-primary site-login__btn" href="#">request demo</a>
          <a class="btn-secondary site-login__btn" href="#">login</a>
        </div>

        <!-- START NAV -->
        <nav class="site-nav">
          <div class="site-nav__mobile">
            <i class="fa fa-user"></i>
          </div>
          <ul class="site-nav__list">
            <?php
              $sitePages = array(
                'depth'        => 2,
                'exclude'      => '',
                'post_status'  => 'publish',
                'sort_column'  => 'menu_order',
                'title_li'     => ''
              );
            ?>
            <?php wp_list_pages($sitePages); ?>
          </ul>
        </nav>
        <!-- END NAV -->
      </div>
    </div>

  </header>
<div id="wrap-main" class="wrap-main">
