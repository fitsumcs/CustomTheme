<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link href="<?php bloginfo('template_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet" >

    <title><?php bloginfo('name')?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class()?>>

<div class="heading">

<header class="site-header">
<h1>   <a href="<?php echo home_url()?>"><?php bloginfo('name')?></a>  </h1>
<h4><?php bloginfo('description')?></h4>
</header>

<nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'top-menu',
            'depth'             => 4,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>

</div>

