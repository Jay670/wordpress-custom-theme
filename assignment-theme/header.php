<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Adding title of site -->
   


  <!-- Adding styles -->
  <?php wp_head() ?>

</head>

<body>

  <!-- php 
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary'
            )
          );
        ?>
  -->   

  <!-- look into wordpress walker class for extensive dynamic menu -->   



  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url("/home")?>"><?php echo get_bloginfo("name")?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("/home") ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("/blog") ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("/about") ?>">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h4><?php $page_slug = trim( $_SERVER["REQUEST_URI"] , '/' ); echo $page_slug; ?></h4>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            
