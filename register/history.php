<?php
    // if form was submitted
   	$rows = query("SELECT * FROM confirmation WHERE email = ?", $_SESSION["id"]);
    if(count($rows) > 0) {
        foreach($rows as $row) {
        	if($row["confirmed"] == 0) {
        		echo('<p><span class="not-confirmed"><i class="icon-check"></i> '.$row["confirm"].':</span> not confirmed</p>');
        	}
        	else {
        		echo('<p><span class="confirmed"><i class="icon-check"></i> '.$row["confirm"].':</span> confirmed</p>');
        	}
        }
    }

    else {
    	echo('<p>No confirmation codes yet.</p>');
    }

?>