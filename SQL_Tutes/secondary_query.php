<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 2/09/14
 * Time: 5:46 PM
 */
   require_once('connect.php');

   //set up the first query:
   $query = "SELECT * FROM customers";
   //store the results of the query in a variable
   $result = mysql_query($query);
   //handle access failure
   if (!$result) die ("Database access failed: " . mysql_error());

   //extract the contents of the result array into a variable
   $rows = mysql_num_rows($result);

   for ($j = 0; $j < $rows; ++$j)
   {
      //display customer purchase info
      $row = mysql_fetch_row($result);
      echo "$row[0] purchased ISBN $row[1]: <br/>";
      //display author and book info
      $subquery = "SELECT * FROM classics WHERE isbn='$row[1]'";
      $subresult = mysql_query($subquery);

      if (!$subquery) die ("Database access failed: " . mysql_error());

      $subrow = mysql_fetch_row($subresult);
      echo "'$subrow[2]' by '$subrow[1]'<br/>";
   }