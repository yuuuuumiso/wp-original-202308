<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/img/logo.png')); ?>" type="image/png">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <?php wp_head(); ?>
</head>
<body>
  <header class="head">
    <div class="head__inner">
      <?php if ( is_home() ) { ?>
        <h1 class="head__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a></h1>
      <?php } else { ?>
       <div class="head__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a></div>
     <?php } ?>
     <div id="menubar" class="dn">
      <nav>
        <?php
        $defaults = array(
          'menu_id'         => 'main-nav-top',
          'menu_class'      => 'navbar',
          'container'       => false,
          'theme_location'  => 'gloval-navigation',
        );
        wp_nav_menu( $defaults );
        ?>
      </nav>
    </div>
  </div>
</header>






