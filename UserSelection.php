<?php
    function buildOptions()
    {
    echo "<option>Inside BuildOptions</option>"
        $mysqli = new mysqli("mysql.eecs.ku.edu", "abohlken", "abohlken", "abohlken");

        /* check connection */
        if ($mysqli->connect_errno) {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }
        
        #attempt to obtain all user IDs
        $query = 'SELECT User_ID FROM users';

        if($result = $mysqli->query($query))
        {
                /* fetch associative array */
                while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["User_ID"] . "'>" . $row["User_ID"] . "</option>";
                }

                /* free result set */
                $result->free();
        }
        else
        echo "Bad Query";

        /* close connection */
        $mysqli->close();
    }
?>