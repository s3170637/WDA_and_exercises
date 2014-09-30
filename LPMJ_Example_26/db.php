<?php
/**
 *
 * User: Alexei
 * Date: 26/09/2014
 * Time: 1:12 AM
 */

//File #0.

//handle database details
   $dbhost = 'localhost';
   $dbname = 'robinsnest';
   $dbuser = 'root';
   $dbpass = '';
   $appname = "Robin's Nest";

   $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
   if ($connection->connect_error) die ($connection->connect_error);

?>
