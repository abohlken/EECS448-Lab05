<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "abohlken", "abohlken", "abohlken");
	if(!empty($_POST['postsToDelete']))
	{

		/* check connection */
		if ($mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}
		
		#attempt to obtain all user IDs
		$query = 'SELECT Post_ID FROM posts;';

		if($result = $mysqli->query($query))
		{
				/* fetch associative array */
				while ($row = $result->fetch_assoc()) {
						if($_POST[$row["Post_ID"]] 
				}

				/* free result set */
				$result->free();
		}
	}
	else
		echo "Please choose at least 1 post to delete";

	/* close connection */
	$mysqli->close();
?>