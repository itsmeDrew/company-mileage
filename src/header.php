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

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header class="site-header">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="js-mobile-menu navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo esc_url( home_url('/') ); ?>"><img class="navbar__logo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="navbar-top">
            <span class="site-login__phone">Call (877) 677 0377</span>
            <a class="btn-primary site-login__btn" href="<?php echo get_permalink(69); ?>">request demo</a>
            <a class="btn-secondary site-login__btn" href="#">login</a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <?php $args = array(
              'depth'        => 2,
              'exclude'      => '80',
              'post_status'  => 'publish',
              'sort_column'  => 'menu_order',
              'title_li'     => ''
            ); ?>
            <?php wp_list_pages($args); ?>
          </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

  </header>
<div class="site-content">
