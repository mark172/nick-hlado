<!-- Kineoworks Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <ul class="footer-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Resume</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="demoreel.php">Demo Reel</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul> <!--/.footer-nav -->
          <ul class="social-nav">
            <li><a href="#"><img src="img/twitter-icon.jpg" alt="twitter"></a></li>
            <li><a href="#"><img src="img/facebook-icon.jpg" alt="facebook"></a></li>
            <li><a href="#"><img src="img/instagram-icon.jpg" alt="instagram"></a></li>
            <li><a href="#"><img src="img/linkedin-icon.jpg" alt="linkedin"></a></li>
          </ul> <!--/.social-nav -->
          <hr>
          <p>©2016 Nick Hlado Portfolio. All Rights Reserved</p>  
        </div> <!--/.row -->  
      </div> <!--/.container -->
    </div> <!--/.footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <!-- Retina JS -->
    <script src="js/retina-1.1.0.min.js"></script>

    <!-- Responsive Slides JS -->
    <script src="js/responsiveslides.min.js"></script>

    <!-- Kineoworks Laptop Slider JS -->
    <script>
      $(function() {
        $(".kineoworks-homepage-slides").responsiveSlides({
          auto: true,             // Boolean: Animate automatically, true or false
          speed: 500,             // Integer: Speed of the transition, in milliseconds
          timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
          pager: false,           // Boolean: Show pager, true or false
          nav: true,              // Boolean: Show navigation, true or false
          random: false,          // Boolean: Randomize the order of the slides, true or false
          pause: false,           // Boolean: Pause on hover, true or false
          pauseControls: true,    // Boolean: Pause when hovering controls, true or false
          prevText: "",           // String: Text for the "previous" button
          nextText: "",           // String: Text for the "next" button
          maxwidth: 518,      // Integer: Max-width of the slideshow, in pixels
          navContainer: ".kineoworks-homepage-slides",       // Selector: Where controls should be appended to, default is after the 'ul'
          manualControls: "",     // Selector: Declare custom pager navigation
          namespace: "kineo",   // String: Change the default namespace used
          before: function(){},   // Function: Before callback
          after: function(){}     // Function: After callback
        });
      });
    </script>

    <!-- Kineoworks Testimonial JS -->
    <script>
      $(function() {
        $(".kineoworks-testimonial-slides").responsiveSlides({
          auto: true,             // Boolean: Animate automatically, true or false
          speed: 500,             // Integer: Speed of the transition, in milliseconds
          timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
          pager: false,           // Boolean: Show pager, true or false
          nav: true,              // Boolean: Show navigation, true or false
          random: false,          // Boolean: Randomize the order of the slides, true or false
          pause: false,           // Boolean: Pause on hover, true or false
          pauseControls: true,    // Boolean: Pause when hovering controls, true or false
          prevText: "",           // String: Text for the "previous" button
          nextText: "",           // String: Text for the "next" button
          maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
          navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
          manualControls: "",     // Selector: Declare custom pager navigation
          namespace: "rslides",   // String: Change the default namespace used
          before: function(){},   // Function: Before callback
          after: function(){}     // Function: After callback
        });
      });
    </script>
    
    <!-- Nivo Lightbox JS -->
    <script src="nivolightbox/nivo-lightbox.min.js"></script>

    <!--Shuffle JS -->
    <script src="js/jquery.shuffle.min.js"></script>

    <!--Imagesloaded JS -->
    <script src="js/imagesloaded.pkgd.min.js"></script>


    <!-- Nivo Lightbox JS -->
    <script>
      $(document).ready(function(){
        $('.portfolio-item a').nivoLightbox({
          effect: 'fadeScale'
        });
      });
    </script>

    <!-- Shuffle JS -->
    <script>
    $(document).ready(function() {

      /* initialize shuffle plugin */
      var $grid = $('#grid');

      $grid.shuffle({
        itemSelector: '.portfolio-item', // the selector for the items in the grid
        speed: 500 // Transition/animation speed (milliseconds)
      });

      /* reshuffle when user clicks a filter item */
      $('.filter-nav li').click(function (e) {
        e.preventDefault();

        // set active class
        $('.filter-nav li').removeClass('active');
        $(this).addClass('active');

        // get group name from clicked item
        var groupName = $(this).attr('data-group');

        // reshuffle grid
        $grid.shuffle('shuffle', groupName );
      });

    });
  </script>

  </body>
</html>  