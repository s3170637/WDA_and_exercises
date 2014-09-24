<?php
session_start();

echo "Rows: ".$_SESSION['rows'];

echo "Results Array: ".print_r($_SESSION['resultsArray']);
echo $_SESSION['hi'];

/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 18/09/2014
 * Time: 3:05 PM
 */ echo "<table border=1>";
echo "<tr>";
echo "<td>Artist ID:</td><td>Artist:</td><td>Country of Origin:</td>";
echo "</tr>";


for ($j = 0; $j < $_SESSION['rows']; $j++)
{

   echo "<tr>";
   echo '<td>'. $_SESSION['resultsArray']['artist_id']         ."</td>";
   echo '<td>'. $_SESSION['resultsArray']['artist_name']       ."</td>";
   echo '<td>'. $_SESSION['resultsArray']['country_of_origin']         ."</td>";
   echo "</tr>";
}
echo "</table>";
?>