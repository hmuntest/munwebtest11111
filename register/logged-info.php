<?php
	// tries to retrieve information from logged-in email
	$rows = query("SELECT * FROM delegations WHERE email = ?", $_SESSION["id"]);
	if (count($rows) > 0)
    {
        $row = $rows[0];
        $_SESSION["update"] = 1;
        $info_ready = true;

        // delegation info
        $title = $row["title"];
        $head = $row["head"];
        $single = $row["single"];
        $faculty = $row["faculty"];
        $delegation_name = $row["delegation_name"];
        $first_name = $row["first_name"];
        $middle_name = $row["middle_name"];
        $last_name = $row["last_name"];
        $address1 = $row["address1"];
        $address2 = $row["address2"];
        $city = $row["city"];
        $state = $row["state"];
        $zip = $row["zip"];
        $country = $row["country"];
        $phone1 = $row["phone1"];
        $phone2 = $row["phone2"];
        $email1 = $row["email1"];
        $email2 = $row["email2"];
        $num_delegates = $row["num_delegates"];
        $num_faculty = $row["num_faculty"];
        $num_observers = $row["num_observers"];
    }

    else {
        $_SESSION["update"] = 0;
    }
?>