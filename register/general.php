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
      require("logged-general.php");
    ?>
    <div class="navbar navbar-fixed-top center nav-collapse collapse">
    	<div class="navbar-inner">
    		<div class="container">
    		  <ul class="nav">
            <li class="top-bar"><a href="info.php">BASIC INFO</a></li>
            <li class="top-bar"><a href="countries.php">COUNTRIES</a></li>
            <li class="top-bar"><a href="sa.php">S.A.</a></li>
            <li><img class="logo" src="../assets/img/logo.png"></li>
            <li class="top-bar active"><a class="active" href="general.php">GENERAL</a></li>
            <li class="top-bar"><a href="review.php">REVIEW</a></li>
            <li class="top-bar"><a href="index.php">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <body>
	    <div class="container standard-bar"></div>
      <div class="container general">
        <div>
          <h3 class="logged-in"><i class="icon-ok-sign"></i> Logged in as&nbsp;<?php echo($_SESSION["id"])?></h3>
          <h3 class="title-section"><i class="icon-globe"></i> Harvard WorldMUN 2014</h3>
          <h4 class="subtitle-section">Online Conference Management System</h4>
          <hr class="title-section"/>
          <h3 class="title-section">General Questions</h3>
          <form action="general-info.php" method="post">
            <fieldset>
              <div class="control-group">
                <p>1. Explain your country preferences. What is most important for you in the choice of a country (e.g. maximizing number of delegates, representation on Specialized Agencies, etc.)? <i class="icon-asterisk"></i><p> 
                <?php
                  if(isset($question_1)) {
                    if(empty($question_1)) {
                      echo('<textarea name="question_1" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                    else {
                      echo('<textarea name="question_1" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($question_1).'</textarea>');
                    }
                  }
                  else {
                    echo('<textarea name="question_1" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                  }
                ?>
              </div><div class="control-group">
                <p>2. Paragraph Text: Is there an issue or a country or region of the world in which you are particularly interested? Why? <i class="icon-asterisk"></i><p> 
                <?php
                  if(isset($question_2)) {
                    if(empty($question_2)) {
                      echo('<textarea name="question_2" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                    else {
                      echo('<textarea name="question_2" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($question_2).'</textarea>');
                    }
                  }
                  else {
                    echo('<textarea name="question_2" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                  }
                ?>
              </div>
              <div class="control-group">
                <p>3. Please describe the Model UN program at your university (relevant courses, number of hours per week, age of program, etc.). <i class="icon-asterisk"></i><p> 
                <?php
                  if(isset($question_3)) {
                    if(empty($question_3)) {
                      echo('<textarea name="question_3" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                    else {
                      echo('<textarea name="question_3" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($question_3).'</textarea>');
                    }
                  }
                  else {
                    echo('<textarea name="question_3" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                  }
                ?>
              </div>
              <div class="control-group">
                <p>4. Please describe your previous experience with WorldMUN and other Model UN conferences (countries represented, awards won, etc.). If this is your delegation’s first Model UN experience, please describe the group that will be attending WorldMUN and any relevant outside experience. <i class="icon-asterisk"></i><p> 
                <?php
                  if(isset($question_4)) {
                    if(empty($question_4)) {
                      echo('<textarea name="question_4" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                    else {
                      echo('<textarea name="question_4" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($question_4).'</textarea>');
                    }
                  }
                  else {
                    echo('<textarea name="question_4" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                  }
                ?>
              </div>
              <div class="control-group">
                  <button type="submit" class="btn btn-custom">Save and continue</button>
              </div>
            </fieldset>
          </form>
          </div>
      </div> <!-- Body ends -->
  <?php require("footer.php") ?>