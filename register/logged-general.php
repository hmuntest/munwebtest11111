<?php
	$email = $_SESSION["id"];
	
	// tries to retrieve information from logged-in email
	$rows = query("SELECT * FROM general WHERE email = ?", $email);
	if (count($rows) > 0)
    {
        $row = $rows[0];
        $_SESSION["update"] = 1;
        $general_ready = true;

        // countries info
        $question_1 = $row["question_1"];
        $question_2 = $row["question_2"];
        $question_3 = $row["question_3"];
        $question_4 = $row["question_4"];
    }

    else {
        $_SESSION["update"] = 0;
    }
?>