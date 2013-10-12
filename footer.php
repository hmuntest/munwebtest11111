<!-- Footer starts -->
      <div class="footer-bar">
        World Model United Nations 2014<br/>
        <i>Handcrafted by Lucas F. and Eva S.</i>
      </div> <!-- Footer ends -->
    </div> <!-- Container ends -->
  </body>

    <!-- JQuery and JavaScript -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="assets/js/jquery-1.7.2.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="assets/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="assets/js/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="assets/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <script>
      $(document).ready(function(){
        $(".fancybox").fancybox({
          maxHeight: 600,
          minWidth: 900,
          maxWidth: 1000,
          arrows: false,
          padding: 5,
          helpers: {
            overlay: {
              locked: false
            }
          }
        });
        $('.carousel').carousel({
          interval: 2000
        });
      });
    </script>
    <script>
      $(window).load(function(){
        $('#dvLoading').fadeOut(2000);
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $(".ga").hide();
        $(".ga-show").show();
        $(".ecosoc").hide();
        $(".ecosoc-show").show();
        $(".sa").hide();
        $(".sa-show").show();
        $(".visa").hide();
        $(".visa-show").show();
        $(".hotel").hide();
        $(".hotel-show").show();
        $(".flight").hide();
        $(".flight-show").show();
        $(".financial").hide();
        $(".financial-show").show();
        $(".guide").hide();
        $(".guide-show").show();
        $(".country").hide();
        $(".country-show").show();
        $(".rules").hide();
        $(".rules-show").show();

        $('.ga-show').click(function(){
          $(".ga").slideToggle();
          return false;
        });
        $('.ecosoc-show').click(function(){
          $(".ecosoc").slideToggle();
          return false;
        });
        $('.sa-show').click(function(){
          $(".sa").slideToggle();
          return false;
        });
        $('.visa-show').click(function(){
          $(".visa").slideToggle();
          return false;
        });
        $('.hotel-show').click(function(){
          $(".hotel").slideToggle();
          return false;
        });
        $('.flight-show').click(function(){
          $(".flight").slideToggle();
          return false;
        });
        $('.financial-show').click(function(){
          $(".financial").slideToggle();
          return false;
        });
        $('.guide-show').click(function(){
          $(".guide").slideToggle();
          return false;
        });
        $('.country-show').click(function(){
          $(".country").slideToggle();
          return false;
        });
        $('.rules-show').click(function(){
          $(".rules").slideToggle();
          return false;
        });
      });
    </script>
</html> 