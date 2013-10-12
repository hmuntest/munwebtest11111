    <?php
      if (!$_SESSION) {
        // configuration
        require("../includes/config.php");
      }

      if(!isset($_SESSION["id"])) {
        require("index.php");
        exit;
      }

      $title = "Online Conference Management System";
      require("header.php");
      require("logged-countries.php");
    ?>
    <div class="navbar navbar-fixed-top center nav-collapse collapse">
      <div class="navbar-inner">
        <div class="container">
          <ul class="nav">
            <li class="top-bar active"><a class="active" href="delegation-list.php">DELEGATIONS</a></li>
            <li><img class="logo" src="../assets/img/logo.png"></li>
            <li class="top-bar"><a href="admin.php">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <body>
      <div class="container standard-bar"></div>
      <div class="container countries">
        <div>
          <h3 class="logged-in"><i class="icon-ok-sign"></i> Logged in as&nbsp;<?php echo($_SESSION["id"])?></h3>
          <h3 class="title-section"><i class="icon-globe"></i> Harvard WorldMUN 2014</h3>
          <h4 class="subtitle-section">Delegations List</h4>
          <hr class="title-section"/>
          <h3 class="title-section">Country Preferences</h3>
          <p>Please consult the <a class="bold-link" href="../assets/pdfs/WMUN 2014 Country Committee Matrix.pdf" target="_blank">Country/Committee Matrix</a> and rank ten countries that are equal to or less than your delegation size that you would like to represent. Often, delegations are assigned two or more countries in order to reach the listed delegation size. You may not rank more than two countries from the following list: China, France, Russia, United Kingdom, and United States. WorldMUN cannot guarantee a particular country assignment for any reason. Please make sure not to choose the same country more than once or invalid countries.</p><br/>

          </div>
      </div> <!-- Body ends -->
  <?php require("footer.php") ?>