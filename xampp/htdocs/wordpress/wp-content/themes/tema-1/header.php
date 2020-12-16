<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <?php wp_head(); ?>
  </head>
  <body class="d-flex flex-column"<?php body_class(); ?>>
    <!-- Menú -->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php 
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              ?><img src="<?php echo $image[0]; ?>" alt=""></a>
      
      <div>
      <!-- Menu movil -->
      <button class="navbar-toggler d-lg-none border-secondary collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </div>
      <!-- Menu movil -->
    </button>
    <!-- sidebar menu -->
        <?php get_sidebar(); ?>
    <!-- sidebar menu -->

        <?php
        wp_nav_menu( array(
          'theme_location'    => 'menu-principal',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'navbarSupportedContent',
          'menu_class'        => 'nav navbar-nav ml-auto',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
      </div>
    </nav>
    <!-- menú -->

    <!-- Contenido -->
    <div class="container">