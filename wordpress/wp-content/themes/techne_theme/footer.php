<footer id="contact-container">
  <div id="ceo-bio">
    <h3>Abhay Schweitzer</h3>
    <h4 class="red-highlight">CEO + Founder of Techne</h4>
    <p>
      <?php echo get_post_meta( get_the_ID(), 'About Abhay', true ); ?>
    </p>

    <p id="copyright">&copy;	2017 all rights reserved Techne - Designed by Oui Will</p>
  </div>

  <div id="footer-contact">
    <a id="footer-email" href="mailto:abhay@techne-us.com">
      <?php echo get_post_meta( get_the_ID(), 'Abhay Email', true ); ?>
    </a>
    <a class="red-highlight" id="footer-phone" href="tel:619-940-5814">
      <?php echo get_post_meta( get_the_ID(), 'Abhay Phone', true ); ?>
    </a>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
