<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Techne Website">
    <meta name="author" content="Chase Klingel">

    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>

  <body>
    <header>
      <nav>
        <?php
          $attachmentID = 34;
          $img = wp_get_attachment_image_src($attachmentID, 'full');
        ?>

        <img id="logo" src="<?php echo $img[0]; ?>" alt="image">
        <ul id="nav-items">
          <li>
            <a class="nav-item" id="nav-home" href="#logo">home</a>
          </li>
          <li>
            <a class="nav-item" id="nav-work" href="#work-container">work</a>
          </li>
          <li>
            <a class="nav-item" id="nav-services" href="#services-container">services</a>
          </li>
          <li>
            <a class="nav-item" id="nav-questions" href="#testimonials-container">questions</a>
          </li>
          <li>
            <a class="nav-item" id="nav-contact" href="#contact-container">contact</a>
          </li>
        </ul>

        <div id="mobile-menu">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div id="mobile-menu-overlay">
          <ul id="mobile-nav-items">
            <li>
              <a class="mobile-nav-item" id="nav-home-mobile" href="<?php bloginfo( 'wpurl' );?>">home</a>
            </li>
            <li>
              <a class="mobile-nav-item" id="nav-work-mobile" href="#work-container">work</a>
            </li>
            <li>
              <a class="mobile-nav-item" id="nav-services-mobile" href="#services-container">services</a>
            </li>
            <li>
              <a class="mobile-nav-item" id="nav-questions-mobile" href="#testimonials-container">questions</a>
            </li>
            <li>
              <a class="mobile-nav-item" id="nav-contact-mobile" href="#contact-container">contact</a>
            </li>
          </ul>
        </div>
      </nav>

      <a id="nav-helper" href="#logo">
        <span class="helper-outline"></span>
        <span class="helper-outline"></span>
        <span class="helper-outline"></span>
        <span class="helper-outline"></span>
        <span>&#8593;</span>
      </a>
    </header>
