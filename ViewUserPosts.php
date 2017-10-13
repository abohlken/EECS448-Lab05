<?php
	echo "<html><body><table>";

	$mysqli = new mysqli("mysql.eecs.ku.edu", "abohlken", "abohlken", "abohlken");
	$uName = $_POST["uname"];

	/* check connection */
	if ($mysqli->connect_errno) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	}
	
	echo "<tr><th>Posts by " . $uName . "</th></tr>";
	
	#attempt to obtain all user IDs
	$query = 'SELECT Content FROM posts WHERE Author_ID="' . $uName . '";';

	if($result = $mysqli->query($query))
	{
			/* fetch associative array */
			while ($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["Content"] . "</td></tr>";
			}

			/* free result set */
			$result->free();
	}
	else
		echo "<tr><td>No posts made by this user yet.</td></tr>";

	/* close connection */
	$mysqli->close();
	
	echo "</table></body></html>";
?>