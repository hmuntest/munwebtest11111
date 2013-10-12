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
      require("header.php");
      require("logged-info.php");
    ?>
    <div class="navbar navbar-fixed-top center nav-collapse collapse">
    	<div class="navbar-inner">
    		<div class="container">
    		  <ul class="nav">
            <li class="top-bar active"><a class="active" href="info.php">BASIC INFO</a></li>
            <li class="top-bar"><a href="countries.php">COUNTRIES</a></li>
            <li class="top-bar"><a href="sa.php">S.A.</a></li>
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
      <div class="container info">
        <div>
          <h3 class="logged-in"><i class="icon-ok-sign"></i> Logged in as&nbsp;<?php echo($_SESSION["id"])?></h3>
          <h3 class="title-section"><i class="icon-globe"></i> Harvard WorldMUN 2014</h3>
          <h4 class="subtitle-section">Online Conference Management System</h4>
          <hr class="title-section"/>
          <h3 class="title-section">Basic Information</h3> 
          <p>Note: A <i class="icon-asterisk"></i> on the right of a field indicates that such field is required, and you will not be able to advance to the next section until all the required fields are filled out correctly.</p>
          <form action="basic-info.php" method="post">
            <fieldset>
              <div class="control-group">
                  <?php
                    if(isset($delegation_name)) {
                      if(empty($delegation_name)) {
                        echo('<input name="delegation_name" placeholder="Delegation Name" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="delegation_name" placeholder="Delegation Name" type="text" value="'.htmlspecialchars($delegation_name).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="delegation_name" placeholder="Delegation Name" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                    if(isset($existing_delegation)) {
                      if($existing_delegation) {
                        echo(' This delegation name is already registered.');
                      }
                    }
                  ?>
              </div>
              <div class="control-group">
                <select name="title" class="title">
                  <option value="Mr." <?php if(isset($title)) {
                                                if($title == "Mr.") {
                                                  echo('selected="selected"');
                                                }
                                              }
                                        ?>>Mr.</option>
                  <option value="Mrs." <?php if(isset($title)) {
                                                if($title == "Mrs.") {
                                                  echo('selected="selected"');
                                                }
                                              }
                                        ?>>Mrs</option>
                  <option value="Miss" <?php if(isset($title)) {
                                                if($title == "Miss") {
                                                  echo('selected="selected"');
                                                }
                                              }
                                        ?>>Miss</option>
                </select>
                <?php
                  if(isset($first_name)) {
                    if(empty($first_name)) {
                      echo('<input name="first_name" placeholder="First Name" type="text" autocomplete="off"/>');
                    }
                    else {
                      echo('<input name="first_name" placeholder="First Name" type="text" value="'.htmlspecialchars($first_name).'" autocomplete="off"/>');
                    }
                  }
                  else {
                    echo('<input name="first_name" placeholder="First Name" type="text" autocomplete="off"/>');
                  }
                ?>
                <i class="icon-asterisk"></i>
                <?php
                  if(isset($middle_name)) {
                    if(empty($middle_name)) {
                      echo('<input class="short" name="middle_name" placeholder="M.I." type="text" autocomplete="off"/>');
                    }
                    else {
                      echo('<input class="short" name="middle_name" placeholder="M.I." type="text" value="'.htmlspecialchars($middle_name).'" autocomplete="off"/>');
                    }
                  }
                  else {
                    echo('<input class="short" name="middle_name" placeholder="M.I." type="text" autocomplete="off"/>');
                  }
                ?>

                <?php
                  if(isset($last_name)) {
                    if(empty($last_name)) {
                      echo('<input name="last_name" placeholder="Last Name" type="text" autocomplete="off"/>');
                    }
                    else {
                      echo('<input name="last_name" placeholder="Last Name" type="text" value="'.htmlspecialchars($last_name).'" autocomplete="off"/>');
                    }
                  }
                  else {
                    echo('<input name="last_name" placeholder="Last Name" type="text" autocomplete="off"/>');
                  }
                  echo(' <i class="icon-asterisk"></i>');
                ?>
              </div>
              <div class="control-group">
                <p>I am registering as (check all that apply): <i class="icon-asterisk"></i></p>
                <label class="checkbox">
                  <input type="checkbox" <?php if(isset($single)) {
                                                if($single == "1") {
                                                  echo('checked');
                                                }
                                              }
                                        ?> name="single" value="1" > Single Delegate
                </label>
                <label class="checkbox">
                  <input type="checkbox" <?php if(isset($head)) {
                                                if($head == "1") {
                                                  echo('checked');
                                                }
                                              }
                                        ?> name="head" value="1"> Head Delegate
                </label>
                <label class="checkbox">
                  <input type="checkbox" <?php if(isset($faculty)) {
                                                if($faculty == "1") {
                                                  echo('checked');
                                                }
                                              }
                                        ?> name="faculty" value="1"> Faculty Advisor
                </label>
              </div>
              <div class="control-group">
                <?php
                  if(isset($address1)) {
                    if(empty($address1)) {
                      echo('<input name="address1" placeholder="Address Line 1" type="text" autocomplete="off"/>');
                    }
                    else {
                      echo('<input name="address1" placeholder="Address Line 1" type="text" value="'.htmlspecialchars($address1).'" autocomplete="off"/>');
                    }
                  }
                  else {
                    echo('<input name="address1" placeholder="Address Line 1" type="text" autocomplete="off"/>');
                  }
                  echo(' <i class="icon-asterisk"></i>');
                ?>
              </div>
              <div class="control-group">
                <?php
                  if(isset($address2)) {
                    if(empty($address2)) {
                      echo('<input name="address2" placeholder="Address Line 2" type="text" autocomplete="off"/>');
                    }
                    else {
                      echo('<input name="address2" placeholder="Address Line 2" type="text" value="'.htmlspecialchars($address2).'" autocomplete="off"/>');
                    }
                  }
                  else {
                    echo('<input name="address2" placeholder="Address Line 2" type="text" autocomplete="off"/>');
                  }
                ?>
              </div>
              <div class="control-group">
                  <?php
                    if(isset($city)) {
                      if(empty($city)) {
                        echo('<input name="city" placeholder="City" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="city" placeholder="City" type="text" value="'.htmlspecialchars($city).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="city" placeholder="City" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                  <?php
                    if(isset($state)) {
                      if(empty($state)) {
                        echo('<input class="short" name="state" placeholder="State" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input class="short" name="state" placeholder="State" type="text" value="'.htmlspecialchars($state).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input class="short" name="state" placeholder="State" type="text" autocomplete="off"/>');
                    }
                  ?>
                  <?php
                    if(isset($zip)) {
                      if(empty($zip)) {
                        echo('<input class="medium" name="zip" placeholder="Zip Code" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input class="medium" name="zip" placeholder="Zip Code" type="text" value="'.htmlspecialchars($zip).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input class="medium" name="zip" placeholder="Zip Code" type="text" autocomplete="off"/>');
                    }
                  ?>
                  <?php
                    if(isset($country)) {
                      if(empty($country)) {
                        echo('<input name="country" placeholder="Country" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="country" placeholder="Country" type="text" value="'.htmlspecialchars($country).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="country" placeholder="Country" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
              </div>
              <div class="control-group">
                  <?php
                    if(isset($phone1)) {
                      if(empty($phone1)) {
                        echo('<input name="phone1" placeholder="Telephone Number" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="phone1" placeholder="Telephone Number" type="text" value="'.htmlspecialchars($phone1).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="phone1" placeholder="Telephone Number" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                  <?php
                    if(isset($phone2)) {
                      if(empty($phone2)) {
                        echo('<input name="phone2" placeholder="Alternate Phone Number" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="phone2" placeholder="Alternate Phone Number" type="text" value="'.htmlspecialchars($phone2).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="phone2" placeholder="Alternate Phone Number" type="text" autocomplete="off"/>');
                    }
                  ?>
              </div>
              <div class="control-group">
                  <?php
                    if(isset($email2)) {
                      if(empty($email1)) {
                        echo('<input name="email1" placeholder="Email" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="email1" placeholder="Email" type="text" value="'.htmlspecialchars($email1).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="email1" placeholder="Email" type="text" autocomplete="off"/>');
                    }
                    echo(' <i class="icon-asterisk"></i>');
                  ?>
                  <?php
                    if(isset($email2)) {
                      if(empty($email2)) {
                        echo('<input name="email2" placeholder="Alteranate Email" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="email2" placeholder="Alteranate Email" type="text" value="'.htmlspecialchars($email2).'" autocomplete="off"/>');
                      }
                    }
                    else {
                      echo('<input name="email2" placeholder="Alteranate Email" type="text" autocomplete="off"/>');
                    }
                  ?>
              </div>
              <div class="control-group">
                  <?php
                    if(isset($num_delegates)) {
                      if(empty($num_delegates)) {
                        echo('<input name="num_delegates" placeholder="Number of Delegates" type="text" autocomplete="off"/>');
                        echo('<i class="icon-asterisk"></i> maximum delegate size: 21');
                      }
                      else {
                        echo('<input name="num_delegates" placeholder="Number of Delegates" type="text" value="'.htmlspecialchars($num_delegates).'" autocomplete="off"/>');
                        if (isset($delegates_numeric)) {
                          if (!is_numeric($delegates_numeric)) {
                            echo('<i class="icon-asterisk"></i> maximum delegate size: 21, this value must be numeric');
                          }
                          else {
                            echo('<i class="icon-asterisk"></i> maximum delegate size: 21');
                          }
                        }
                        else {
                          echo('<i class="icon-asterisk"></i> maximum delegate size: 21');
                        }
                      }
                    }
                    else {
                      echo('<input name="num_delegates" placeholder="Number of Delegates" type="text" autocomplete="off"/>');
                      echo('<i class="icon-asterisk"></i> maximum delegate size: 21');
                    }
                  ?>
              </div>
              <div class="control-group">
                <?php
                    if(isset($num_observers)) {
                      if(empty($num_observers)) {
                        echo('<input name="num_observers" placeholder="Number of Observers" type="text" autocomplete="off"/>');
                      }
                      else {
                        echo('<input name="num_observers" placeholder="Number of Observers" type="text" value="'.htmlspecialchars($num_observers).'" autocomplete="off"/>');
                        if (isset($observers_numeric)) {
                          if (!is_numeric($observers_numeric)) {
                            echo('This value must be numeric.');
                          }
                        }
                      }
                    }
                    else {
                      echo('<input name="num_observers" placeholder="Number of Observers" type="text" autocomplete="off"/>');
                    }
                  ?>
                </div>
              <div class="control-group">
                <?php
                    if(isset($num_faculty)) {
                      if(empty($num_faculty)) {
                        echo('<input name="num_faculty" placeholder="Number of Faculty Advisors" type="text" autocomplete="off"/>');
                        echo(' Faculty Advisors are not required to accompany delegations. Delegations that do not have Faculty Advisors must designate one or more Head Delegate(s).');
                      }
                      else {
                        echo('<input name="num_faculty" placeholder="Number of Faculty Advisors" type="text" value="'.htmlspecialchars($num_faculty).'" autocomplete="off"/>');
                        if (isset($faculty_numeric)) {
                          if (!is_numeric($faculty_numeric)) {
                            echo(' Faculty Advisors are not required to accompany delegations. Delegations that do not have Faculty Advisors must designate one or more Head Delegate(s). This value must be numeric.');
                          }
                        }
                        else {
                          echo(' Faculty Advisors are not required to accompany delegations. Delegations that do not have Faculty Advisors must designate one or more Head Delegate(s).');
                        }
                      }
                    }
                    else {
                      echo('<input name="num_faculty" placeholder="Number of Faculty Advisors" type="text" autocomplete="off"/>');
                      echo(' Faculty Advisors are not required to accompany delegations. Delegations that do not have Faculty Advisors must designate one or more Head Delegate(s).');
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