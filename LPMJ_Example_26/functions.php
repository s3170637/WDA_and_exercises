<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 26/09/2014
 * Time: 1:01 AM
 */

//File #1
require_once('db.php');

//create table
function createTable($name, $query)
{
   //queryMysql("DROP TABLE IF EXISTS $name");
   queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
   echo "Table '$name' created or already exists.<br/>";
}

//query mechanism
function queryMysql($query)
{
   global $connection;
   $result = $connection->query($query);
   if (!$result) die ($connection -> connect_error);
   return $result;
}

//destroy session
function destroySession()
{
   $_SESSION = array();

   if(session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-2592000, '/');

   session_destroy();
}

//clean user input
function sanitizeString($var)
{
   global $connection;
   $var = strip_tags($var);
   $var = htmlentities($var);
   $var = stripslashes($var);
   return $connection->real_escape_string($var);
}

//show user profile with a picture on the left (if a picture exists)
function showProfile($user)
{
   if (file_exists("user.jpg"))
      echo "<img src='images/user.jpg' style='float:left;'/>";

   $result = queryMysql("SELECT * FROM users WHERE user='$user'");

   if ($result->num_rows)
   {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      echo stripslashes($row['text']) . "<br style='clear:left;'/><br/>";
   }
}
?>