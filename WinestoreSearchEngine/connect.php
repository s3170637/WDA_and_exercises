<?php
//manage connection to the database

/**
 * Web Database Applications: Assignment 1
 * Student Number: s3170637
 * User: Alexei
 * Date: 3/09/14
 * Time: 9:02 AM
 */

require_once('login.php');


//create a connection object
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
//handle connectivity issues
if ($connection->connect_error) die ($connection->connect_error);
else echo "connected";
?>