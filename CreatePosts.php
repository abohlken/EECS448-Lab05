<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "abohlken", "abohlken", "abohlken");
	$uName = $_POST["uname"];
	$content = $_POST["textPostContent"];

	/* check connection */
	if ($mysqli->connect_errno) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	}

	#if uName is empty string or content is empty string, display error message
	if($uName == ""||$content == "")
	{
		echo "<center>Username and Post fields may not be blank.</center>";
	}
	#else attempt to enter it into the database
	else
	{
		#attempt to put the post into the database
                $query = 'INSERT INTO posts (Author_ID, Content) VALUES("' . $uName . '","' . $content . '");';

                if($result = $mysqli->query($query))
                        echo "<center>Post successfully created!</center>";
                else
                        echo "<center>Username invalid! Please choose an existing username!</center>";
	}

	/* close connection */
	$mysqli->close();
?>
