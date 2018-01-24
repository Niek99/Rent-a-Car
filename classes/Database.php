<?php
/**
 * Created by PhpStorm.
 * User: niek
 * Date: 24-1-2018
 * Time: 12:52
 */

class Database
{
    function ConnectToDB($username, $password, $database)
    {
        $mysqli = new mysqli("127.0.0.1", $username, $password, "rent-a-car");

        /* check connection */
        if ($mysqli->connect_errno) {
            //printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }

        return $mysqli;
        //if (!$mysqli->query("SET a=1")) {
            //printf("Errormessage: %s\n", $mysqli->error);
        //}

        /* close connection */
       // $mysqli->close();
    }
}