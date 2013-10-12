<?php
    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        $success = true;
        if (!empty($_POST["interest"])) {
            if ($_POST["interest"] == 1) {
                $email = mysql_real_escape_string($_SESSION["id"]);
                $empty = "";

                if ($_SESSION["update"] == 1) {
                  $result = query("DELETE FROM sa WHERE email = ?", $email);
                }
                $_POST["interest"] = 0;
                header("Location: general.php"); 
            }
        }

        if (empty($_POST["sa_1"]) || empty($_POST["sa_2"]) || empty($_POST["sa_3"])) {
            $success = false;
        }

        $sa_1 = mysql_real_escape_string($_POST["sa_1"]);
        $sa_2 = mysql_real_escape_string($_POST["sa_2"]);
        $sa_3 = mysql_real_escape_string($_POST["sa_3"]);
        $sa_4 = mysql_real_escape_string($_POST["sa_4"]);
        $sa_5 = mysql_real_escape_string($_POST["sa_5"]);
        $sa_6 = mysql_real_escape_string($_POST["sa_6"]);
        $sa_7 = mysql_real_escape_string($_POST["sa_7"]);
        $sa_8 = mysql_real_escape_string($_POST["sa_8"]);
        $sa_9 = mysql_real_escape_string($_POST["sa_9"]);
        $committee_1 = mysql_real_escape_string($_POST["committee_1"]);
        $committee_2 = mysql_real_escape_string($_POST["committee_2"]);
        $committee_3 = mysql_real_escape_string($_POST["committee_3"]);
        $committee_4 = mysql_real_escape_string($_POST["committee_4"]);
        $committee_5 = mysql_real_escape_string($_POST["committee_5"]);
        $email = mysql_real_escape_string($_SESSION["id"]);

        if ($success) {
            if ($_SESSION["update"] == 1) {
              $result = query("UPDATE sa SET committee_1 = ?, committee_2 = ?, committee_3 = ?, committee_4 = ?, committee_5 = ?, sa_1 = ?, sa_2 = ?, sa_3 = ?, sa_4 = ?, sa_5 = ?, sa_6 = ?, sa_7 = ?, sa_8 = ?, sa_9 = ? WHERE email = ?", $committee_1, $committee_2, $committee_3, $committee_4, $committee_5, $sa_1, $sa_2, $sa_3, $sa_4, $sa_5, $sa_6, $sa_7, $sa_8, $sa_9, $email);
            }
            else {
              $result = query("INSERT INTO sa(email, committee_1, committee_2, committee_3, committee_4, committee_5, sa_1, sa_2, sa_3, sa_4, sa_5, sa_6, sa_7, sa_8, sa_9) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $email, $committee_1, $committee_2, $committee_3, $committee_4, $committee_5, $sa_1, $sa_2, $sa_3, $sa_4, $sa_5, $sa_6, $sa_7, $sa_8, $sa_9);
            }
        }

        if (!$success) {
            require("sa.php");
            exit;
        }

        else {
            header("Location: general.php");
            exit;
        }
    }
   /* else
    {
        // else render form
        //render("login_form.php", ["title" => "Log In"]);
    }*/

?>