<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 2/09/14
 * Time: 9:25 PM
 */
   require_once('login.php');
   //create a connection object
   $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

   if ($connection->connect_error) die ($connection->connect_error);
?>