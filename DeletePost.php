<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "abohlken", "abohlken", "abohlken");
	if(!empty($_POST['postsToDelete']))
	{

		/* check connection */
		if ($mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}

		foreach($_POST['postsToDelete'] as $post)
		{
			#attempt to obtain all user IDs
			$query = 'DELETE FROM posts WHERE Post_ID="' . $post . '";';

			if($result = $mysqli->query($query))
			{
				echo "<center>Post with ID " . $post . " successfully deleted!</center>";
					/* free result set */
					$result->free();
			}
			else {
				echo "<center>Post with ID " . $post . " deletion unsuccessful!</center>";
			}
		}
	}
	else
		echo "Please choose at least 1 post to delete";

	/* close connection */
	$mysqli->close();
?>
