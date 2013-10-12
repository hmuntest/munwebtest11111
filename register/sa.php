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
      require("logged-sa.php");
    ?>
    <div class="navbar navbar-fixed-top center nav-collapse collapse">
    	<div class="navbar-inner">
    		<div class="container">
    		  <ul class="nav">
            <li class="top-bar"><a href="info.php">BASIC INFO</a></li>
            <li class="top-bar"><a href="countries.php">COUNTRIES</a></li>
            <li class="top-bar active"><a class="active" href="sa.php">S.A.</a></li>
            <li><img class="logo" src="../assets/img/logo.png"></li>
            <li class="top-bar"><a href="general.php">GENERAL</a></li>
            <li class="top-bar"><a href="review.php">REVIEW</a></li>
            <li class="top-bar"><a href="index.php">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <body>
	    <div class="container standard-bar"></div>
      <div class="container sa">
        <div>
          <h3 class="logged-in"><i class="icon-ok-sign"></i> Logged in as&nbsp;<?php echo($_SESSION["id"])?></h3>
          <h3 class="title-section"><i class="icon-globe"></i> Harvard WorldMUN 2014</h3>
          <h4 class="subtitle-section">Online Conference Management System</h4>
          <hr class="title-section"/>
          <h3 class="title-section">Specialized Agencies<br/>Character Preferences</h3>
          <p>Delegates in the Specialized Agencies (except for Security Council and Historical Security Council) will be individually representing single characters, news agencies, or NGOs in fast-paced, demanding committees of 15-30 delegates each. Unlike past years, a separate specialized application will not be required beyond this step in the registration process.</p>
          <p>Please rank all SA committees of interest to your delegation, leaving blanks if needed. <span class="special">If your delegation is not interested in any SA committees, you may skip this step in the registration process.</span></p>
          <form action="sa-info.php" method="post">
            <fieldset>
              <div class="control-group">
                <p class="special"><icon class="icon-exclamation-sign"></i> Please check the box below and move to the next page if you are not interested in any SA committees: </p>
                <label class="checkbox">
                  <input id="interest" type="checkbox" onclick="switchDiv()" name="interest" value="1" > I am not interested in any SA committees
                </label>
              </div>
            </fieldset>
            <fieldset>
              <div id="switchDiv">
                <div class="control-group">
                  <span>First Choice Committee:&nbsp;</span>
                  <select name="committee_1">
                    <option value="[Blank]" <?php if(isset($committee_1)) {
                                                  if($committee_1 == "[Blank]") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>[Blank]</option>
                    <option value="Cabinet of Gamal Abdel Nasser" <?php if(isset($committee_1)) {
                                                  if($committee_1 == "Cabinet of Gamal Abdel Nasser") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>Cabinet of Gamal Abdel Nasser</option>
                    <option value="Committee of Public Safety" <?php if(isset($committee_1)) {
                                                  if($committee_1 == "Committee of Public Safety") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> Committee of Public Safety</option>
                    <option value="INTERPOL" <?php if(isset($committee_1)) {
                                                  if($committee_1 == "INTERPOL") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> INTERPOL</option>
                    <option value="Pandemic Response Team" <?php if(isset($committee_1)) {
                                                  if($committee_1 == "Pandemic Response Team") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> Pandemic Response Team</option>
                    <option value="Third Party Actors" <?php if(isset($committee_1)) {
                                                  if($committee_1 == "Third Party Actors") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>Third Party Actors</option>
                  </select>
                </div>
                <div class="control-group">
                  <span>Second Choice Committee:&nbsp;</span>
                  <select name="committee_2">
                    <option value="[Blank]" <?php if(isset($committee_2)) {
                                                  if($committee_2 == "[Blank]") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>[Blank]</option>
                    <option value="Cabinet of Gamal Abdel Nasser" <?php if(isset($committee_2)) {
                                                  if($committee_2 == "Cabinet of Gamal Abdel Nasser") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>Cabinet of Gamal Abdel Nasser</option>
                    <option value="Committee of Public Safety" <?php if(isset($committee_2)) {
                                                  if($committee_2 == "Committee of Public Safety") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> Committee of Public Safety</option>
                    <option value="INTERPOL" <?php if(isset($committee_2)) {
                                                  if($committee_2 == "INTERPOL") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> INTERPOL</option>
                    <option value="Pandemic Response Team" <?php if(isset($committee_2)) {
                                                  if($committee_2 == "Pandemic Response Team") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> Pandemic Response Team</option>
                    <option value="Third Party Actors" <?php if(isset($committee_2)) {
                                                  if($committee_2 == "Third Party Actors") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>Third Party Actors</option>
                  </select>
                </div>
                <div class="control-group">
                  <span>Third Choice Committee:&nbsp;</span>
                  <select name="committee_3">
                    <option value="[Blank]" <?php if(isset($committee_3)) {
                                                  if($committee_3 == "[Blank]") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>[Blank]</option>
                    <option value="Cabinet of Gamal Abdel Nasser" <?php if(isset($committee_3)) {
                                                  if($committee_3 == "Cabinet of Gamal Abdel Nasser") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>Cabinet of Gamal Abdel Nasser</option>
                    <option value="Committee of Public Safety" <?php if(isset($committee_3)) {
                                                  if($committee_3 == "Committee of Public Safety") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> Committee of Public Safety</option>
                    <option value="INTERPOL" <?php if(isset($committee_3)) {
                                                  if($committee_3 == "INTERPOL") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> INTERPOL</option>
                    <option value="Pandemic Response Team" <?php if(isset($committee_3)) {
                                                  if($committee_3 == "Pandemic Response Team") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> Pandemic Response Team</option>
                    <option value="Third Party Actors" <?php if(isset($committee_3)) {
                                                  if($committee_3 == "Third Party Actors") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>Third Party Actors</option>
                  </select>
                </div>
                <div class="control-group">
                  <span>Forth Choice Committee:&nbsp;</span>
                  <select name="committee_4">
                    <option value="[Blank]" <?php if(isset($committee_4)) {
                                                  if($committee_4 == "[Blank]") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>[Blank]</option>
                    <option value="Cabinet of Gamal Abdel Nasser" <?php if(isset($committee_4)) {
                                                  if($committee_4 == "Cabinet of Gamal Abdel Nasser") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>Cabinet of Gamal Abdel Nasser</option>
                    <option value="Committee of Public Safety" <?php if(isset($committee_4)) {
                                                  if($committee_4 == "Committee of Public Safety") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> Committee of Public Safety</option>
                    <option value="INTERPOL" <?php if(isset($committee_4)) {
                                                  if($committee_4 == "INTERPOL") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> INTERPOL</option>
                    <option value="Pandemic Response Team" <?php if(isset($committee_4)) {
                                                  if($committee_4 == "Pandemic Response Team") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> Pandemic Response Team</option>
                    <option value="Third Party Actors" <?php if(isset($committee_4)) {
                                                  if($committee_4 == "Third Party Actors") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>Third Party Actors</option>
                  </select>
                </div>
                <div class="control-group">
                  <span>Fifth Choice Committee:&nbsp;</span>
                  <select name="committee_5">
                    <option value="[Blank]" <?php if(isset($committee_5)) {
                                                  if($committee_5 == "[Blank]") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>[Blank]</option>
                    <option value="Cabinet of Gamal Abdel Nasser" <?php if(isset($committee_5)) {
                                                  if($committee_5 == "Cabinet of Gamal Abdel Nasser") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>Cabinet of Gamal Abdel Nasser</option>
                    <option value="Committee of Public Safety" <?php if(isset($committee_5)) {
                                                  if($committee_5 == "Committee of Public Safety") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> Committee of Public Safety</option>
                    <option value="INTERPOL" <?php if(isset($committee_5)) {
                                                  if($committee_5 == "INTERPOL") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> INTERPOL</option>
                    <option value="Pandemic Response Team" <?php if(isset($committee_5)) {
                                                  if($committee_5 == "Pandemic Response Team") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>> Pandemic Response Team</option>
                    <option value="Third Party Actors" <?php if(isset($committee_5)) {
                                                  if($committee_5 == "Third Party Actors") {
                                                    echo('selected="selected"');
                                                  }
                                                }
                                          ?>>Third Party Actors</option>
                  </select>
                </div>
                <div class="control-group">
                  <p>1. What attracts your delegation to the Specialized Agencies? <i class="icon-asterisk"></i></p>
                  <?php
                    if(isset($sa_1)) {
                      if(empty($sa_1)) {
                        echo('<textarea name="sa_1" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                      }
                      else {
                        echo('<textarea name="sa_1" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($sa_1).'</textarea>');
                      }
                    }
                    else {
                      echo('<textarea name="sa_1" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                  ?>
                </div><div class="control-group">
                  <p>2. What experience or interest does your delegation have in small or crisis-based committees? <i class="icon-asterisk"></i></p>
                  <?php
                    if(isset($sa_2)) {
                      if(empty($sa_2)) {
                        echo('<textarea name="sa_2" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                      }
                      else {
                        echo('<textarea name="sa_2" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($sa_2).'</textarea>');
                      }
                    }
                    else {
                      echo('<textarea name="sa_2" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                  ?>
                </div>
                <div class="control-group">
                  <p>3. Does your delegation have any special knowledge or expertise in any of the top three committees ranked? <i class="icon-asterisk"></i></p>
                  <?php
                    if(isset($sa_3)) {
                      if(empty($sa_3)) {
                        echo('<textarea name="sa_3" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                      }
                      else {
                        echo('<textarea name="sa_3" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($sa_3).'</textarea>');
                      }
                    }
                    else {
                      echo('<textarea name="sa_3" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                  ?>
                </div>
                <div class="control-group">
                  <p>4. <span class="special">TPA only:</span> What experience or interest does your delegation have in representing organizations such as press and NGOs at Model UN conferences?</p>
                  <?php
                    if(isset($sa_4)) {
                      if(empty($sa_4)) {
                        echo('<textarea name="sa_4" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                      }
                      else {
                        echo('<textarea name="sa_4" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($sa_4).'</textarea>');
                      }
                    }
                    else {
                      echo('<textarea name="sa_4" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                  ?>
                </div>
                <p>Please consult the character list <a href="../assets/pdfs/SA Character List.pdf" target="_blank" class="bold-link">here</a> and list your preferences below.</p>
                <div class="control-group">
                  <p>5. If the Cabinet of Gamal Abdel Nasser is selected above, please rank at least five and no more than eight characters below:</p>
                  <?php
                    if(isset($sa_5)) {
                      if(empty($sa_5)) {
                        echo('<textarea name="sa_5" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                      }
                      else {
                        echo('<textarea name="sa_5" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($sa_5).'</textarea>');
                      }
                    }
                    else {
                      echo('<textarea name="sa_5" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                  ?>
                </div>
                <div class="control-group">
                  <p>6. If the Committee of Public Safety is selected above, please rank at least five and no more than eight characters below:</p>
                  <?php
                    if(isset($sa_6)) {
                      if(empty($sa_6)) {
                        echo('<textarea name="sa_6" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                      }
                      else {
                        echo('<textarea name="sa_6" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($sa_6).'</textarea>');
                      }
                    }
                    else {
                      echo('<textarea name="sa_6" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                  ?>
                </div>
                <div class="control-group">
                  <p>7. If INTERPOL is selected above, please rank at least five and no more than eight characters below:</p>
                  <?php
                    if(isset($sa_7)) {
                      if(empty($sa_7)) {
                        echo('<textarea name="sa_7" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                      }
                      else {
                        echo('<textarea name="sa_7" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($sa_7).'</textarea>');
                      }
                    }
                    else {
                      echo('<textarea name="sa_7" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                  ?>
                </div>
                <div class="control-group">
                  <p>8. If Pandemic Response Team is selected above, please rank at least five and no more than eight characters below:</p>
                  <?php
                    if(isset($sa_8)) {
                      if(empty($sa_8)) {
                        echo('<textarea name="sa_8" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                      }
                      else {
                        echo('<textarea name="sa_8" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($sa_8).'</textarea>');
                      }
                    }
                    else {
                      echo('<textarea name="sa_8" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                  ?>
                </div>
                <div class="control-group">
                  <p>9. If Third Party Actors is selected above, please indicate press, NGO, or no preference and rank 3-5 assignments.</p> 
                  <?php
                    if(isset($sa_9)) {
                      if(empty($sa_9)) {
                        echo('<textarea name="sa_9" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                      }
                      else {
                        echo('<textarea name="sa_9" placeholder="Answer here" type="text" autocomplete="off">'.htmlspecialchars($sa_9).'</textarea>');
                      }
                    }
                    else {
                      echo('<textarea name="sa_9" placeholder="Answer here" type="text" autocomplete="off"></textarea>');
                    }
                  ?>
                </div>
              </div>
              <div class="control-group">
                  <button type="submit" class="btn btn-custom">Save and continue</button>
              </div>
            </fieldset>
          </form>
          </div>
      </div> <!-- Body ends -->
  <?php require("footer.php") ?>