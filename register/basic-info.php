<?php
    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        $success = true;

        if (empty($_POST["delegation_name"]) || empty($_POST["first_name"]) || empty($_POST["last_name"]) || empty($_POST["address1"]) || empty($_POST["city"]) || empty($_POST["country"]) || empty($_POST["phone1"]) || empty($_POST["address1"]) || empty($_POST["email1"]) || empty($_POST["num_delegates"])) {
            $success = false;
        }

        if (!empty($_POST["num_delegates"])) {
            if (!is_numeric($_POST["num_delegates"])) {
                $delegates_numeric = false;
                $success = false;
            }

            else if($_POST["num_delegates"] > 21) {
                $delegates_max = true;
                $success = false; 
            }
        }

        $email = mysql_real_escape_string($_SESSION["id"]);
        $delegation_name = mysql_real_escape_string($_POST["delegation_name"]);
        $title = mysql_real_escape_string($_POST["title"]);
        $first_name = mysql_real_escape_string($_POST["first_name"]);
        $middle_name = mysql_real_escape_string($_POST["middle_name"]);
        $last_name = mysql_real_escape_string($_POST["last_name"]);
        $address1 = mysql_real_escape_string($_POST["address1"]);
        $address2 = mysql_real_escape_string($_POST["address2"]);
        $city = mysql_real_escape_string($_POST["city"]);
        $state = mysql_real_escape_string($_POST["state"]);
        $zip = mysql_real_escape_string($_POST["zip"]);
        $country = mysql_real_escape_string($_POST["country"]);
        $phone1 = mysql_real_escape_string($_POST["phone1"]);
        $phone2 = mysql_real_escape_string($_POST["phone2"]);
        $email1 = mysql_real_escape_string($_POST["email1"]);
        $email2 = mysql_real_escape_string($_POST["email2"]);
        $num_delegates = mysql_real_escape_string($_POST["num_delegates"]);
        $num_faculty = mysql_real_escape_string($_POST["num_faculty"]);
        $num_observers = mysql_real_escape_string($_POST["num_observers"]);

        if (!empty($_POST["num_faculty"])) {
            if (!is_numeric($_POST["num_faculty"])) {
                $faculty_numeric = false;
                $success = false;
            }
        }

        else {
            $num_faculty = 0;
        }

        if (!empty($_POST["num_observers"])) {
            if (!is_numeric($_POST["num_observers"])) {
                $observers_numeric = false;
                $success = false;
            }
        }

        else {
             $num_observers = 0;
        }

        if(isset($_POST["head"])) {
            $head = 1;
        }

        else {
            $head = 0;
        }

        if(isset($_POST["single"])) {
            $single = 1;
        }

        else {
            $single = 0;
        }

        if(isset($_POST["faculty"])) {
            $faculty = 1;
        }

        else {
            $faculty = 0;
        }

        if ($success) {
            // query database for delegation
            $rows = query("SELECT * FROM delegations WHERE delegation_name = ?", $delegation_name);
            
            // if we found delegation, don't allow registration
            if (count($rows) > 0) {
                if ($rows[0]["email"] != $email) {   
                    $existing_delegation = true;
                    $success = false;
                }

                else {
                    if ($_SESSION["update"] == 1) {
                        $result = query("UPDATE delegations SET delegation_name = ?, title = ?, first_name = ?, middle_name = ?, last_name = ?, single = ?, head = ?, faculty = ?, address1 = ?, address2 = ?, city = ?, state = ?, zip = ?, country = ?, phone1 = ?, phone2 = ?, email1 = ?, email2 = ?, num_delegates = ?, num_faculty = ?, num_observers = ? WHERE email = ?", $delegation_name, $title, $first_name, $middle_name, $last_name, $single, $head, $faculty, $address1, $address2, $city, $state, $zip, $country, $phone1, $phone2, $email1, $email2, $num_delegates, $num_faculty, $num_observers, $email);
                    }
                    else {
                        $result = query("INSERT INTO delegations(email, delegation_name, title, first_name, middle_name, last_name, single, head, faculty, address1, address2, city, state, zip, country, phone1, phone2, email1, email2, num_delegates, num_faculty, num_observers) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $email, $delegation_name, $title, $first_name, $middle_name, $last_name, $single, $head, $faculty, $address1, $address2, $city, $state, $zip, $country, $phone1, $phone2, $email1, $email2, $num_delegates, $num_faculty, $num_observers);
                    }
                }
            }

            else {
                if ($_SESSION["update"] == 1) {
                    $result = query("UPDATE delegations SET delegation_name = ?, title = ?, first_name = ?, middle_name = ?, last_name = ?, single = ?, head = ?, faculty = ?, address1 = ?, address2 = ?, city = ?, state = ?, zip = ?, country = ?, phone1 = ?, phone2 = ?, email1 = ?, email2 = ?, num_delegates = ?, num_faculty = ?, num_observers = ? WHERE email = ?", $delegation_name, $title, $first_name, $middle_name, $last_name, $single, $head, $faculty, $address1, $address2, $city, $state, $zip, $country, $phone1, $phone2, $email1, $email2, $num_delegates, $num_faculty, $num_observers, $email);
                }
                else {
                    $result = query("INSERT INTO delegations(email, delegation_name, title, first_name, middle_name, last_name, single, head, faculty, address1, address2, city, state, zip, country, phone1, phone2, email1, email2, num_delegates, num_faculty, num_observers) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $email, $delegation_name, $title, $first_name, $middle_name, $last_name, $single, $head, $faculty, $address1, $address2, $city, $state, $zip, $country, $phone1, $phone2, $email1, $email2, $num_delegates, $num_faculty, $num_observers);
                }
            }
        }

        if (!$success) {
            require("info.php");
            exit;
        }

        else {
            header("Location: countries.php");
            exit;
        }
    }
   /* else
    {
        // else render form
        //render("login_form.php", ["title" => "Log In"]);
    }*/

?>