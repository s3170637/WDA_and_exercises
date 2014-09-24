<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 2/09/14
 * Time: 9:58 PM
 */
   require_once('connect.php');

   //define a query and save retrieved content into an object $result
   $query = "SELECT * FROM classics";
   $result = $connection->query($query);

   if(!$result) die($connection->error);

   //extract and display the content:
   $rows = $result->num_rows;

   echo "Results using separate 'data_seek' calls and fetch_assoc() method: <br/>";
   echo "<table border=1>";
   for ($j = 0; $j < $rows; ++$j)
   {
      echo "<tr>";
      $result->data_seek($j);
      echo '<td>ISBN: ' . $result->fetch_assoc()['isbn'] . '</td>';
      $result->data_seek($j);
      echo '<td>Author: ' . $result->fetch_assoc()['author'] . '</td>';
      $result->data_seek($j);
      echo '<td>Title: ' . $result->fetch_assoc()['title'] . '</td>';
      $result->data_seek($j);
      echo '<td>Category: ' . $result->fetch_assoc()['category'] . '</td>';
      $result->data_seek($j);
      echo '<td>Year: ' . $result->fetch_assoc()['year'] . '</td>';
      echo "</tr>";
   }
   echo "</table>";
   echo "<br/>";
   //alternate display version with fewer calls
   echo "Results using single 'data_seek' calls and MYSQLI_ASSOC array: </br/>";
   echo "<table border=1>";
   echo "<tr>";
   echo "<td>ISBN:</td><td>Author:</td><td>Title:</td><td>Category:</td><td>Year:</td>";
   echo "</tr>";
   for ($j = 0; $j < $rows; ++$j)
   {
      $result->data_seek($j);
      $row = $result->fetch_array(MYSQLI_ASSOC);

      echo "<tr>";
      echo '<td>'. $row['isbn'] ."</td>";
      echo '<td>'. $row['author'] . "</td>";
      echo '<td>'. $row['title'] . "</td>";
      echo '<td>'. $row['category'] . "</td>";
      echo '<td>'. $row['year'] . "</td>";
      echo "</tr>";
   }
   echo "</table>";
   echo "<select>";
   /*
   for ($j = 0; $j < $rows; ++$j)
   {
      $result->data_seek($j);
      $row = $result->fetch_array(MYSQLI_ASSOC);
      echo '<option value="$row[$j]"></option>';
   }
   echo "</select>";
   */

   //close resources
   $result->close();
   $connection->close();
?>