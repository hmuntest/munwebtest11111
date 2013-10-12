<?php
    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        $success = true;

        if (empty($_POST["confirm"])) {
            $success = false;
        }

        $confirm = mysql_real_escape_string($_POST["confirm"]);
        $email = $_SESSION["id"];

        if ($success) {
            $confirmed = 0;
            $result = query("INSERT INTO confirmation(email, confirm, confirmed) VALUES (?, ?, ?)", $email, $confirm, $confirmed);
        }

        header("Location: review.php");
    }
   /* else
    {
        // else render form
        //render("login_form.php", ["title" => "Log In"]);
    }*/

?>