<?php
echo <<<_END
<html>
<head>
   <title>Winestore Database Search Page</title>
   <!--charset info-->
   <meta http-equiv="CONTENT-TYPE" content="text/html; charset=utf-8"/>
   <!--stylesheet:-->
   <link rel="stylesheet" type="text/css" href="stylesheets/default_stylesheet.css" />
   <!--script file:-->
   <!--<script type="text/javascript" src="client_scripts/search_form_validation.js"/>-->
</head>
_END;
//search fields are included here

/**
 * Web Database Applications: Assignment 1
 * Student Number: s3170637
 * User: Alexei
 * Date: 3/09/14
 * Time: 9:02 AM
 */

require_once('connect.php');

if (isset($_POST['wine_name']))
{
   $wine_name = 'wine_name';

   $query = "SELECT wine_id, wine_name FROM wine";
   $result = $connection->query($query);

   if(!$result) die($connection->error);

   echo "<table border=1>";
   echo "<tr>";
   echo "<td>Wine ID:</td><td>Wine Name:</td>";
   echo "</tr>";
   for ($j = 0; $j < $rows; ++$j)
   {
      $result->data_seek($j);
      $row = $result->fetch_array(MYSQLI_ASSOC);

      echo "<tr>";
      echo '<td>'. $row['wine_id'] ."</td>";
      echo '<td>'. $row['wine_name'] . "</td>";

      echo "</tr>";
   }
   echo "</table>";
}

//start <body> tag
echo <<<_END
<body>
   <!--introduction:-->
   <h1>Welcome to the Winestore Database Search Page.</h1>
   <h2>Please enter search terms below:</h2>

   <!--search form:-->
   <form action="display_result.php" method="post">
   <pre>
   <label>
   Search by wine name:              <input type="text" name="wine_name"/>
   Search by winery name:            <input type="text" name="winery_name"/>
   Search by region:                 <select>
_END;


      //query the database for region names
      $query = "SELECT region_name FROM region";
      $result = $connection->query($query);

      if(!$result) die($connection->error);


      $rows = $result->num_rows;
      //print_r($rows);
      //loop through results:
      for ($i = 0; $i < $rows; ++$i)
      {
         $result->data_seek($i);
         $row = $result->fetch_array(MYSQLI_ASSOC);
         $name = $row['region_name'];
         echo '<option value="' .$name. '">' .$name. '</option>';
      }


echo <<<_END
                                    </select>
   Search by grape variety:          <select>
_END;

      //query the database for grape varieties
      $query = "SELECT variety FROM grape_variety";
      $result = $connection->query($query);

      if(!$result) die($connection->error);

      $rows = $result->num_rows;
      //print_r($rows);
      //loop through results:
      for ($i = 0; $i < $rows; ++$i)
      {
         $result->data_seek($i);
         $row = $result->fetch_array(MYSQLI_ASSOC);
         $name = $row['variety'];
         echo '<option value="' .$name. '">' .$name. '</option>';
      }
echo <<<_END
   </select>
   Search by year:              From:<!--drop down list-->&nbsp;
                                To:<!--drop-down list-->
   Search by minimum required stock: <input type="text" name="on_hand" maxlengh="10"/>
   Search by minimum ordered  stock: <input type="text" name=""/>
                                               <input type="submit" value="SEARCH!">
   </label>
   </pre>
   </form>
_END;

//begin <footer> block:
echo <<<_END
<footer>
  <a id="registration" href='javascript:alert("dead link");'>Login</a> | <a href='javascript:alert("dead link");'>Register</a>
_END;

//visitor date information
$visit = "You have visited us on ";
$endBreak = ". <br />";
echo $visit.longdate(time()).$endBreak;

function longdate($timestamp)
{
   return date("l, F jS, Y", $timestamp);
}

//end-of-document tags
echo <<<_END
</footer>
</body>
</html>
_END;

//user-defined functions:
function get_post($var)
{
   return mysql_real_escape_string($_POST[$var]);
}

/**test:===================================================================
//query the database for region names
$query = "SELECT DISTINCT region_name FROM region";

$result = $connection->query($query);
if(!$result) die($connection->error);
//else print_r($result);               //test

$rows = $result->num_rows;
//alternate display version with fewer calls
echo "Results using single 'data_seek' calls and MYSQLI_ASSOC array: </br/>";
echo "<table border=1>";
   for ($j = 0; $j < $rows; ++$j)
   {
   $result->data_seek($j);
   $row = $result->fetch_array(MYSQLI_ASSOC);

   echo "<tr>";
      echo '<td>Region:: '    . $row['region_name'] ."</td>";
      echo "</tr>";
   }
   echo "</select>";
   echo "</table>";
echo "<select>";
   for ($i =0; $i < $rows; ++$i)
   {
   $result->data_seek($j);
   $row = $result->fetch_array(MYSQLI_ASSOC);

   echo '<option value="'.$row['region_name'].'"></option>';

   }
   /**end test==============================================================*/
?>