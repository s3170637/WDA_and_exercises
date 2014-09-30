<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 28/09/2014
 * Time: 6:45 AM
 */

   session_start();

   require_once('functions.php');

   echo "<!DOCTYPE html>\n<html><head>";

   //log-in status
   $userstr = ' (Guest)';  //initial state when not logged in
   $user = null;

   if (isset($_SESSION['user']))
   {
      $user = $_SESSION['user'];
      $loggedin = TRUE;
      $userstr = " ($user)";
   }
   else $loggedin=false;

   echo "<title>$appname$userstr</title><link rel='stylesheet' type='text/css' " .
        "href='stylesheets/styles.css'/>"                                        .
        "</head><body><center><canvas id='logo' width='624' height='96'>$appname".
        "</canvas></center>"                                                     .
        "<div class='appname'>$appname$userstr</div>"                            .
        "<script src='client_scripts/javascript.js'></script>"                   ;

   if($loggedin)
      echo "<br/><ul class='menu'>" .
      "<li><a href='members.php?view=$user'>Home</a></li>" .
      "<li><a href='members.php'>Members</a></li>"         .
      "<li><a href='friends.php'>Friends</a></li>"         .
      "<li><a href='messages.php'>Messages</a></li>"       .
      "<li><a href='profile.php'>Edit Profile</a></li>"    .
      "<li><a href='logout.php'>Log Out</a></li></ul><br/>";
   else
      echo ("<br/><ul class='menu'>" .
            "<li><a href='index.php'>Home</a></li>" .
            "<li><a href='signup.php'>Sign up</a></li>" .
            "<li><a href='login.php'>Log in</a></li></ul><br/>".
            "<span class='info'>&#8658; You must be logged in to ".
            "view this page.</span><br/><br/>");

//no closing html/body tags, because they'll be closed in other files.

?>