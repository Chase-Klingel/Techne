<?php get_header(); ?>

  <div id="mission-statement-container">
    <p id="mission-statement">
      <?php echo get_post_meta( get_the_ID(), 'Mission Statement', true ); ?>
    </p>

    <h3 id="interior-design" class="sideways-header">interior design.</h3>
    <img id="header-image" class="alignnone size-full wp-image-14" src="http://localhost:8888/wordpress/wp-content/uploads/2017/02/header-img.jpg" alt="Building" width="165" height="229" />
  </div>
  <div id="O1-photo-outter-container">
    <div id="O1-photo-inner-container"><img id="O1-photo" class="alignnone wp-image-19 size-medium" src="http://localhost:8888/wordpress/wp-content/uploads/2017/02/01-photo-300x217.png" alt="Project One" width="466" height="383" />
      <div id="O1-red-box" class="red-box-number"><span>01</span></div>
    </div>
  </div>

  <div id="work-container">
    <div id="work-slogan-container">
      <h2 id="work-slogan">
        <?php echo get_post_meta( get_the_ID(), 'Work Slogan', true ); ?>
      </h2>

      <h3 id="work" class="sideways-header">Work.</h3>
    </div>

    <div id="project-list-container">
      <h4 id="projects-header">Projects</h4>

      <div id="left-side-projects">
        <?php $projects1 = get_post_meta($post->ID, 'Project List 1', false); ?>
        <ul>
          <?php foreach($projects1 as $project) {
              echo '<li>'.$project.'</li>';
          } ?>
        </ul>
      </div>

      <div id="right-side-projects">
        <?php $projects2 = get_post_meta($post->ID, 'Project List 2', false); ?>
        <ul>
          <?php foreach($projects2 as $project) {
              echo '<li>'.$project.'</li>';
          } ?>
        </ul>
      </div>

      <div id="O2-photo-container"><img class="alignnone size-medium wp-image-75" src="http://localhost:8888/wordpress/wp-content/uploads/2017/02/02-photo-300x190.png" alt="Building" width="300" height="190" />
        <div id="O2-red-box" class="red-box-number"><span>02</span></div>
      </div>
    </div>
  </div>

  <div id="project-gallery">
    <button id="previous" class="gallery-navigation" disabled="disabled">←</button>

    <!-- <img class="alignnone size-medium wp-image-19" src="http://localhost:8888/wordpress/wp-content/uploads/2017/02/01-photo-300x217.png" alt="project" width="300" height="217" /> -->
    <!-- <img class="alignnone size-medium wp-image-22" src="http://localhost:8888/wordpress/wp-content/uploads/2017/02/01-services-300x128.png" alt="" width="300" height="128" /> -->

    <button id="next" class="gallery-navigation">→</button>
  </div>

  <div id="services-container">
    <div id="services-outter-container">
      <p id="grey-techne">
        techne
      </p>
      <div id="services-inner-container">
        <div id="O3-red-box" class="red-box-number"><span>03</span></div>
        <h3 id="services-heading">services</h3>
        <p id="services-slogan"><?php echo get_post_meta( get_the_ID(), 'Services Slogan', true ); ?></p>
      </div>
    </div>

    <div id="services-gallery-container">
      <div id="services-left">
        <?php
          $attachmentID = 89;
          $img = wp_get_attachment_image_src($attachmentID, 'full');
        ?>

        <img class="service-img" id="O1-services-img" src="<?php echo $img[0]; ?>" alt="image">

        <?php
          $attachmentID = 91;
          $img = wp_get_attachment_image_src($attachmentID, 'full');
        ?>

        <img class="service-img" id="O3-services-img" src="<?php echo $img[0]; ?>" alt="image">
      </div>

      <div id="services-middle">
        <div id="O5-info">
          <h6>05/</h6>
          <p class="bolded-service-info">Construction Phase <br>
             Services <br>
          </p>
        </div>
        <?php
          $attachmentID = 90;
          $img = wp_get_attachment_image_src($attachmentID, 'full');
        ?>

        <img class="service-img" id="O2-services-img" src="<?php echo $img[0]; ?>" alt="image">
        <div id="O4-info-container">
          <h6>04/</h6>
          <p class="bolded-service-info">Building Permit <br>
             submittal and <br>
             processing
          </p>
        </div>
      </div>

      <div id="services-right">
        <button id="services-contact-button" type="button" name="button">
          <span id="red-swoosh"></span>
          <svg version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 35.414 35.414" style="enable-background:new 0 0 35.414 35.414;" xml:space="preserve" width="15px" height="15px">
            <polygon points="27.051,17 9.905,0 8.417,1.414 24.674,17.707 8.363,34 9.914,35.414 27.051,18.414   " fill="#FFFFFF"/>
          </svg>
          <span id="contact-us">contact us</span>

        </button>
        <?php
          $attachmentID = 92;
          $img = wp_get_attachment_image_src($attachmentID, 'full');
        ?>

        <img class="service-img" id="O6-services-img" src="<?php echo $img[0]; ?>" alt="image">
      </div>
    </div>
  </div>

  <div id="testimonials-container">
    <div id="O4-red-box" class="red-box-number"><span>02</span></div>

    <div id="testimonial-intro-container">
      <h3 id="faq">faq &#38; testimonials</h3>
      <h4 id="faq-slogan">
        <?php echo get_post_meta( get_the_ID(), 'FAQ Slogan', true ); ?>
      </h4>
      <p id="faq-info">
        <?php echo get_post_meta( get_the_ID(), 'FAQ Info', true ); ?>
      </p>
    </div>

    <div id="testimonial-questions-container">
      <div id="testimonial-question-1">
        <h6 class="testimonial-question">
          <span class="red-highlight">1.</span>
          <?php echo get_post_meta( get_the_ID(), 'Testimonial Question 1', true ); ?>
        </h6>
        <p>
          <?php echo get_post_meta( get_the_ID(), 'Testimonial Answer 1', true ); ?>
        </p>
      </div>

      <div id="testimonial-question-2">
        <h6 class="testimonial-question">
          <span class="red-highlight">2.</span>
          <?php echo get_post_meta( get_the_ID(), 'Testimonial Question 2', true ); ?>
        </h6>
        <p id="testimonial-question-2-info">
          <?php echo get_post_meta( get_the_ID(), 'Testimonial Answer 2', true ); ?>
        </p>
      </div>

      <div id="testimonial-container">
        <div id="testimonial-question-3">
          <h6 class="testimonial-question">
            <span class="red-highlight">3.</span>
            <?php echo get_post_meta( get_the_ID(), 'Testimonial Question 3', true ); ?>
          </h6>
          <p id="testimonial-answer-3">
            <?php echo get_post_meta( get_the_ID(), 'Testimonial Answer 3', true ); ?>
          </p>
        </div>

        <div id="testimonial-quote">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512.5 512.5" style="enable-background:new 0 0 512.5 512.5;" xml:space="preserve">
            	<path d="M112.5,208.25c61.856,0,112,50.145,112,112s-50.144,112-112,112s-112-50.145-112-112l-0.5-16   c0-123.712,100.288-224,224-224v64c-42.737,0-82.917,16.643-113.137,46.863c-5.817,5.818-11.126,12.008-15.915,18.51   C100.667,208.723,106.528,208.25,112.5,208.25z M400.5,208.25c61.855,0,112,50.145,112,112s-50.145,112-112,112   s-112-50.145-112-112l-0.5-16c0-123.712,100.287-224,224-224v64c-42.736,0-82.918,16.643-113.137,46.863   c-5.818,5.818-11.127,12.008-15.916,18.51C388.666,208.723,394.527,208.25,400.5,208.25z" fill="#e94134"/>
            </svg>
          </span>
          <p>Techne has provided us with more than 60% growth in comparison
            to our previous facility.
          </p>
          <p id="quote-citation">Samule Ervin, CEO of Gogol</p>
        </div>

      </div>

    </div>
  </div>



<?php get_footer(); ?>
