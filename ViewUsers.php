<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "abohlken", "abohlken", "abohlken");

	/* check connection */
	if ($mysqli->connect_errno) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	}
	
        #attempt to put the post into the database
        $query = 'INSERT INTO posts (Author_ID, Content) VALUES("' . $uName . '","' . $content . '");';

        if($result = $mysqli->query($query))
                echo "<center>Post successfully created!</center>";
        else
                echo "<center>Username invalid! Please choose an existing username!</center>";

	/* close connection */
	$mysqli->close();
?>