<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 16/09/14
 * Time: 6:34 PM
 */
require_once('db.php');

//create a connection object
$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
//handle connectivity issues
if ($connection->connect_error) die ($connection->connect_error);
//else echo "connected";
?>