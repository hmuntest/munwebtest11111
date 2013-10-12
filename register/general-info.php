<?php
    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        $success = true;

        if (empty($_POST["question_1"]) || empty($_POST["question_2"]) || empty($_POST["question_3"]) || empty($_POST["question_4"])) {
            $success = false;
        }
        $question_1 = mysql_real_escape_string($_POST["question_1"]);
        $question_2 = mysql_real_escape_string($_POST["question_2"]);
        $question_3 = mysql_real_escape_string($_POST["question_3"]);
        $question_4 = mysql_real_escape_string($_POST["question_4"]);
        $email = mysql_real_escape_string($_SESSION["id"]);

        if ($success) {
            if ($_SESSION["update"] == 1) {
              $result = query("UPDATE general SET question_1 = ?, question_2 = ?, question_3 = ?, question_4 = ? WHERE email = ?", $question_1, $question_2, $question_3, $question_4, $email);
            }
            else {
              $result = query("INSERT INTO general(email, question_1, question_2, question_3, question_4) VALUES (?, ?, ?, ?, ?)", $email, $question_1, $question_2, $question_3, $question_4);
            }
        }

        if (!$success) {
            require("general.php");
            exit;
        }

        else {
            header("Location: review.php");
            exit;
        }
    }
   /* else
    {
        // else render form
        //render("login_form.php", ["title" => "Log In"]);
    }*/

?>