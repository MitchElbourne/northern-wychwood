<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>

    <title>Northern Wychwood Limited</title>
  </head>
  <body <?php body_class(); ?>>

    <header id="header">
      <nav class="navbar navbar-expand-md primary">
        <div class="container">

          <a class="navbar-brand" href="<?php echo esc_url(site_url('/')); ?>">
            <img src="<?php echo get_theme_file_uri('assets/svg/logo-northern-wychwood.svg'); ?>" alt="Northern Wychwood Logo">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="menu-text">Menu</span>
          </button>

          <div class="collapse navbar-collapse" id="navbar-primary">
            <ul class="navbar-nav">
              <li><a class="nav-item nav-link" href="#who-we-are">who we are</a></li>
              <li><a class="nav-item nav-link" href="#our-values">Values &amp; Purpose</a></li>
              <li><a class="nav-item nav-link" href="#what-we-do">What We Offer</a></li>
              <li><a class="nav-item nav-link" href="#our-team">Our Team</a></li>
            </ul><!--navbar-nav-->
          </div><!-- navbar-collapse -->
          <a class="contact-cta" href="<?php echo esc_url(site_url('/#contact-us')) ?>">Contact us</a>

        </div><!--container-->
      </nav>
    </header>


    <aside id="rebrand-modal" class="rebrand">
      <p>We are rebranding and a new website will be available shortly.</p>
      <a href="javascript:;" id="rebrand-button" class="cta cta-primary">Got it</a>
    </aside>
