<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "abohlken", "abohlken", "abohlken");
	$uName = $_POST["uname"];
	$duplicateFlag = false;

	/* check connection */
	if ($mysqli->connect_errno) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	}

	#if uName is empty string, display error message
	if($uName == "")
	{
		echo "<center>Username must not be blank.</center>";
	}
	#else attempt to enter it into the database
	else
	{
		#check that uName is distinct from other User_IDs already in database
		$query = "SELECT User_ID FROM users";

		if ($result = $mysqli->query($query)) {

		    /* fetch associative array */
		    while ($row = $result->fetch_assoc()) {
			if($row["User_ID"]==$uName)
			{
				$duplicateFlag = true;
			}
		    }

		    /* free result set */
		    $result->free();
		}
		
		#if there's a match, display error message
		if($duplicateFlag)
		{
			echo "<center>Username already taken. Please try another username.</center>";
		}
		#else create new row in database
		else
		{
			$query = "INSERT INTO users(" . $uName . ");";

			if($mysqli->query($query))
				echo "<center>User successfully created!</center>";
			else
				echo "<center>Something went wrong, user unsuccessfully created!</center>";
		}
	}

	/* close connection */
	$mysqli->close();
?>
