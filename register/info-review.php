          <p><span class="special">Delegation Name: </span><?php echo(htmlspecialchars($delegation_name)); ?></p>
            <p><span class="special"><?php echo(htmlspecialchars($title));?> </span><?php echo(htmlspecialchars($first_name));?> <?php echo(htmlspecialchars($middle_name));?> <?php echo(htmlspecialchars($last_name)); ?></p>
            <p><span class="special">I am registering as:</span>
              <?php
                $selected = false;
                if($single == "1") {
                  echo('<br/><i class="icon-angle-right"></i> Single Delegate');
                  $selected = true;
                }
                if($head == "1") {
                  echo('<br/><i class="icon-angle-right"></i> Head Delegate');
                  $selected = true;
                }
                if($faculty == "1") {
                  echo('<br/><i class="icon-angle-right"></i> Faculty Advisor');
                  $selected = true;
                }
                if(!$selected) {
                  echo('None');
                }
              ?>
            </p>
            <p><span class="special">Address Line 1: </span> <?php echo(htmlspecialchars($address1));?></p>
            <p><span class="special">Address Line 2: </span> <?php echo(htmlspecialchars($address2));?></p>
            <p><span class="special">City: </span> <?php echo(htmlspecialchars($city));?> <span class="special">State: </span> <?php echo(htmlspecialchars($state));?></p>
            <p><span class="special">Zip code: </span><?php echo(htmlspecialchars($zip));?> <span class="special">Country: </span> <?php echo(htmlspecialchars($country));?></p>
            <p><span class="special">Phone 1: </span> <?php echo(htmlspecialchars($phone1));?></p>
            <p><span class="special">Phone 2: </span> <?php echo(htmlspecialchars($phone2));?></p>
            <p><span class="special">Email 1: </span> <?php echo(htmlspecialchars($email1));?></p>
            <p><span class="special">Email 2: </span> <?php echo(htmlspecialchars($email2));?></p>
            <p><span class="special">Number of Delegates: </span> <?php echo(htmlspecialchars($num_delegates));?></p>
            <p><span class="special">Number of Faculty Advisors: </span> <?php echo(htmlspecialchars($num_faculty));?></p>
            <p><span class="special">Number of Observers: </span> <?php echo(htmlspecialchars($num_observers));?></p>