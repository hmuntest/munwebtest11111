<?php
    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        $success = true;

        if (empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["access_user"])) {
            $success = false;
        }

        if ($success) {
            // query database for user
            $rows = query("SELECT * FROM admin WHERE email = ?", $_POST["email"]);
            // if we found user, check password
            if (count($rows) == 1)
            {
                // first (and only) row
                $row = $rows[0];

                // compare hash of user's input against hash that's in database
                if (crypt($_POST["password"], $row["password"]) === $row["password"])
                {
                    $_SESSION["id"] = $_POST["access_user"];
                    header("Location: info.php");
                }

                else {
                    $wrong_password = true;
                    $password = $_POST["password"];
                    $login_mode = true;
                    require("index.php");
                }
            }

            else {
                $inexistent_user = true;
                $email = $_POST["email"];
                $password = $_POST["password"];
                $login_mode = true;
                require("index.php");
            }
        }

        else {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $login_mode = true;
            require("index.php");
        }
    }
    else
    {
        header("Location: index.php");
    }

?>