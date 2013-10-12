<?php
	$email = $_SESSION["id"];
	
	// tries to retrieve information from logged-in email
	$rows = query("SELECT * FROM sa WHERE email = ?", $email);
	if (count($rows) > 0)
    {
        $row = $rows[0];
        $_SESSION["update"] = 1;
        $sa_ready = true;

        // countries info
        $sa_1 = $row["sa_1"];
        $sa_2 = $row["sa_2"];
        $sa_3 = $row["sa_3"];
        $sa_4 = $row["sa_4"];
        $sa_5 = $row["sa_5"];
        $sa_6 = $row["sa_6"];
        $sa_7 = $row["sa_7"];
        $sa_8 = $row["sa_8"];
        $sa_9 = $row["sa_9"];
        $committee_1 = $row["committee_1"];
        $committee_2 = $row["committee_2"];
        $committee_3 = $row["committee_3"];
        $committee_4 = $row["committee_4"];
        $committee_5 = $row["committee_5"];
    }

    else {
        $_SESSION["update"] = 0;
    }
?>