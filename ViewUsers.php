<?php
        echo "<html><body>";
	$mysqli = new mysqli("mysql.eecs.ku.edu", "abohlken", "abohlken", "abohlken");

	/* check connection */
	if ($mysqli->connect_errno) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	}
	
	echo "<ul>";
	
        #attempt to put the post into the database
        $query = 'SELECT FROM users';

        if($result = $mysqli->query($query))
        {
            /* fetch associative array */
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row["User_ID"] . "</li>";
            }

            /* free result set */
            $result->free();
        }

	/* close connection */
	$mysqli->close();
	
	echo "</ul></body></html>";
?>