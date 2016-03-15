<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '-', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"> -->


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header class="site-header">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a href="<?php echo get_permalink(10); ?>"><img class="navbar__logo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo" /></a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="navbar-right">
            <div class="navbar-top">
              <span class="site-login__phone">Call (877) 677 0377</span>
              <a class="btn-primary site-login__btn" href="#">request demo</a>
              <a class="btn-secondary site-login__btn" href="#">request demo</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="page_item navbar-nav__cart">
                <ul class="nav navbar-nav">
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
              </li>
            </ul>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  </header>
<div class="site-content">
