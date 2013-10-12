<?php
	$email = $_SESSION["id"];
	
	// tries to retrieve information from logged-in email
	$rows = query("SELECT * FROM countries WHERE email = ?", $email);
	if (count($rows) > 0)
    {
        $row = $rows[0];
        $_SESSION["update"] = 1;
        $countries_ready = true;

        // countries info
        $country_1 = $row["country_1"];
        $country_2 = $row["country_2"];
        $country_3 = $row["country_3"];
        $country_4 = $row["country_4"];
        $country_5 = $row["country_5"];
        $country_6 = $row["country_6"];
        $country_7 = $row["country_7"];
        $country_8 = $row["country_8"];
        $country_9 = $row["country_9"];
        $country_10 = $row["country_10"];
    }

    else {
        $_SESSION["update"] = 0;
    }
?>