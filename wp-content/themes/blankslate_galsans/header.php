<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="D:\xampp\htdocs\wp\wp-content\themes\blankslate_galsans\css\bootstrap.min.css"> -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.min.css">

  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
  <nav class="navbar navbar-expand-md bg-dark position-fixed w-100" data-bs-theme="dark">
    <div class="container-fluid top">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"
        rel="home">
        <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
        aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-light"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
        </ul>
        <!-- <form class="d-flex">
        <input class="" type="search" placeholder="Search">
        <button class="" type="submit">Search</button>        
      </form> -->
        <form role="search" method="get" class="d-flex search-form" action="http://localhost/wp/">
          <input type="search" class="search-field form-control me-sm-2" placeholder="Search &hellip;" value=""
            name="s" />
          <button type="submit" class="search-submit btn btn-secondary my-2 my-sm-0" value="Search">Search</button>
        </form>
      </div>
    </div>
  </nav>