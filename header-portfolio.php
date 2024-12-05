<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minimal Portfolio</title>
  <?php wp_head(); ?>
</head>
<body>
    <header class="portfolio">
       <h1 class="logo"><a href="">Minimal Portfolio Theme</a></h1>
       <nav>
           <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
       </nav> 
       <hr>             
       <ul class="portfolio_links">
           <li><a href="<?php bloginfo('url'); ?>/category/minimal-portfolio" class="secondary-btn active">All</a></li>
           <li><a href="" class="secondary-btn">Print</a></li>
           <li><a href="" class="secondary-btn">Web</a></li>
           <li><a href="" class="secondary-btn">Mobile</a></li>
       </ul> 
    </header>
    <hr>
    <main class="content">