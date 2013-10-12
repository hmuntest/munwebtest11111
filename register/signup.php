<?php
    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        $success = true;

        if (empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["confirm"])) {
            $success = false;
        }

        // check for invalid email
        else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $success = false;
            $invalid_email = true;
        }

        // check for password mismatch
        else if ($_POST["password"] != $_POST["confirm"]) {
            $success = false;
            $match = false;
        }

        if ($success) {
            // query database for user
            $rows = query("SELECT * FROM users WHERE email = ?", $_POST["email"]);
            
            // if we found user, don't allow registration
            if (count($rows) > 0) {   
                $existing_user = true;
                $success = false;
            }

            else {
                $result = query("INSERT INTO users(email, password) VALUES (?, ?)", $_POST["email"], crypt($_POST["password"]));
            }
        }

        if ($success) {
            $_SESSION["id"] = $_POST["email"];
            header("Location: info.php");
        }
        else {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirm = $_POST["confirm"];
            $signup_mode = true;
            $_SESSION["id"] = $email;
            require("index.php");
        }
    }
   /* else
    {
        // else render form
        //render("login_form.php", ["title" => "Log In"]);
    }*/

?>