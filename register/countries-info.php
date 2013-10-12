<?php
    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        $success = true;

        if (empty($_POST["country_1"]) || empty($_POST["country_2"]) || empty($_POST["country_3"]) || empty($_POST["country_4"]) || empty($_POST["country_5"]) || empty($_POST["country_6"]) || empty($_POST["country_7"]) || empty($_POST["country_8"]) || empty($_POST["country_9"]) || empty($_POST["country_10"])) {
            $success = false;
        }

        $country_1 = mysql_real_escape_string($_POST["country_1"]);
        $country_2 = mysql_real_escape_string($_POST["country_2"]);
        $country_3 = mysql_real_escape_string($_POST["country_3"]);
        $country_4 = mysql_real_escape_string($_POST["country_4"]);
        $country_5 = mysql_real_escape_string($_POST["country_5"]);
        $country_6 = mysql_real_escape_string($_POST["country_6"]);
        $country_7 = mysql_real_escape_string($_POST["country_7"]);
        $country_8 = mysql_real_escape_string($_POST["country_8"]);
        $country_9 = mysql_real_escape_string($_POST["country_9"]);
        $country_10 = mysql_real_escape_string($_POST["country_10"]);
        $email = $_SESSION["id"];

        if ($success) {
            if ($_SESSION["update"] == 1) {
                $result = query("UPDATE countries SET country_1 = ?, country_2 = ?, country_3 = ?, country_4 = ?, country_5 = ?, country_6 = ?, country_7 = ?, country_8 = ?, country_9 = ?, country_10 = ? WHERE email = ?", $country_1, $country_2, $country_3, $country_4, $country_5, $country_6, $country_7, $country_8, $country_9, $country_10, $email);
            }
            else {
                $result = query("INSERT INTO countries(email, country_1, country_2, country_3, country_4, country_5, country_6, country_7, country_8, country_9, country_10) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?)", $email, $country_1, $country_2, $country_3, $country_4, $country_5, $country_6, $country_7, $country_8, $country_9, $country_10);
            }
        }

        if (!$success) {
            require("countries.php");
            exit;
        }

        else {
            header("Location: sa.php");
            exit;
        }
    }
   /* else
    {
        // else render form
        //render("login_form.php", ["title" => "Log In"]);
    }*/

?>