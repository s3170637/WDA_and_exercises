<?php
//output search results for basic search
require_once('basic_search.php');
echo "<br/><a href='basic_search.php'>return to basic search</a>";
echo "<table border=1>";
echo "<tr>";
echo "<td>Artist:</td><td>Genre:</td><td>Album Cat #:</td><td>Album Title:</td>";
echo "</tr>";
for ($j = 0; $j < $rows; ++$j)
{
   $result->data_seek($j);
   $row = $result->fetch_array(MYSQLI_ASSOC);   //return a tuple

   echo "<tr>";
   echo "<td>". $row['artist_name']   . "</td>";
   echo "<td>". $row['genre_name']    . "</td>";
   echo "<td>". $row['cat_number']    . "</td>";
   echo "<td>". $row['album_name']    . "</td>";
   echo "</tr>";
}
echo "</table>";