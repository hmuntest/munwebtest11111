    <?php
      if (!$_SESSION) {
        // configuration
        require("../includes/config.php");
      }

      if(!isset($_SESSION["id"])) {
        header("Location: index.php");
        exit;
      }

      $title = "Online Conference Management System";
      $info_ready = false;
      $countries_ready = false;
      $sa_ready = false;
      $general_ready = false;
      require("header.php");
      require("logged-info.php");
      require("logged-countries.php");
      require("logged-general.php");
      require("logged-sa.php");
    ?>
    <div class="navbar navbar-fixed-top center nav-collapse collapse">
    	<div class="navbar-inner">
    		<div class="container">
    		  <ul class="nav">
            <li class="top-bar"><a href="info.php">BASIC INFO</a></li>
            <li class="top-bar"><a href="countries.php">COUNTRIES</a></li>
            <li class="top-bar"><a href="sa.php">S.A.</a></li>
            <li><img class="logo" src="../assets/img/logo.png"></li>
            <li class="top-bar"><a href="general.php">GENERAL</a></li>
            <li class="top-bar active"><a class="active" href="review.php">REVIEW</a></li>
            <li class="top-bar"><a href="index.php">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <body>
	    <div class="container standard-bar"></div>
      <div class="container review">
        <div>
          <h3 class="logged-in"><i class="icon-ok-sign"></i> Logged in as&nbsp;<?php echo($_SESSION["id"])?></h3>
          <h3 class="title-section"><i class="icon-globe"></i> Harvard WorldMUN 2014</h3>
          <h4 class="subtitle-section">Online Conference Management System</h4>
          <hr class="title-section"/>
          <h3 class="title-section">Review Registration</h3>
          <p>Please make sure that all required information has been entered and that the following information is correct. Pay close attention to ensure that all your country and SA preferences are noted correctly. We recommend that you make a copy of this page for your records.</p>
          <h4 class="subtitle-review"><i class="icon-chevron-sign-right"></i> Basic Information</h4>
          <?php
            if($info_ready) {
              require("info-review.php");
            }
            else {
              require("incomplete.php");
            }
          ?>
          <h4 class="subtitle-review"><i class="icon-chevron-sign-right"></i> Country Preferences</h4>
          <?php
            if($countries_ready) {
              require("countries-review.php");
            }
            else {
              require("incomplete.php");
            }
          ?>
          <h4 class="subtitle-review"><i class="icon-chevron-sign-right"></i> Specialized Agencies Character Preferences</h4>
          <?php
            if($sa_ready) {
              require("sa-review.php");
            }
            else {
              require("incomplete-sa.php");
            }
          ?>
          <h4 class="subtitle-review"><i class="icon-chevron-sign-right"></i> General</h4>
          <?php
            if($general_ready) {
              require("general-review.php");
            }
            else {
              require("incomplete-sa.php");
            }
          ?>
          <?php $total = 150 * $num_delegates + 60 * $num_faculty + 65 * $num_observers; ?>

          <h3 class="title-section"><i class="icon-money"></i> Payment Status</h3>
          <hr class="title-section"/>
          <h4 class="subtitle-review"><i class="icon-exclamation-sign"></i> Instructions</h4>
          <p>1. Notice that if you have multiple delegates, you need to pay both the delegation and conference fee according to the deadlines specified <a class="bold-link" target="_blank" href="../involve.php">here</a>.</p>
          <p>2. Click "View Cart" to check out with Paypal. Please be sure to verify the number of tickets you want to buy before checking out. WorldMUN will not refund any misplaced orders of tickets or fees.</p>
          <p>3. After paying with Paypal, insert your Paypal confirmation code in the "Confirm Payment" box below. Your payment will be processed within 72 hours. If you do not see a payment confirmation in the "Payment History" section below within 72 hours, please email us at <a class="bold-link" target="_blank" href="mailto:info@worldmun.org">info@worldmun.org</a>.
          <h4 class="subtitle-review"><i class="icon-chevron-sign-right"></i> Checkout</h4>
          <h4 class="checkout"><?php if($num_delegates > 1) { require("delegation-fee.php"); } ?> <?php require("registration-fee.php"); ?></h4>              
          <h4>
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <h4 class="subtitle-review"><i class="icon-chevron-sign-right"></i> Pay Now: </h4>
              <input type="hidden" name="business" value="admin@worldmun.org">
              <input type="hidden" name="cmd" value="_cart">
              <input type="hidden" name="display" value="1">
              <input type="hidden" name="shopping_url" value="http://www.kinskards.com/birthday_cards">
              <input class="viewcart" type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" alt="PayPal - The safer, easier way to pay online">
              <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
            </form>
          </h4>
          <h4 class="subtitle-review"><i class="icon-chevron-sign-right"></i> Confirm Payment</h4>
          <p>Please type your Paypal confirmation code below. Your transaction confirmation code can be found on your confirmation email from Paypal.</p>
          <form action="confirm.php" method="post">
            <fieldset>
              <div class="control-group">
                  <input name="confirm" placeholder="Confirmation Code" type="text" autocomplete="off"/>
                </div>
              <div class="control-group">
                  <button type="submit" class="btn btn-custom payment">Confirm payment</button>
              </div>
            </fieldset>
          </form>
          <h4 class="subtitle-review"><i class="icon-chevron-sign-right"></i> Payment History</h4>
          <?php require("history.php") ?>
          
        </div>
      </div> <!-- Body ends -->
  <?php require("footer.php") ?>