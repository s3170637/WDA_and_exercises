<?php
   session_start();
/**
 * Big M Reviews: basic search script
 * User: Alexei
 * Date: 16/09/14
 * Time: 6:49 PM
 */
require_once('connect.php');

//(test)search box
echo <<<_END
   <form action="basic_search.php" method="post">
   <pre>
      SEARCH ALBUM:      <input type="text" name="searchTerm"/>
                         <input type="submit" value="Search!">
   </pre>
   </form>
_END;

$searchTerm = "";
if (isset($_POST['searchTerm']))
{
   $cleanSearchTerm = $connection->real_escape_string($_POST['searchTerm']);

   $query = "SELECT artists.artist_name, genres.genre_name, albums.cat_number, albums.album_name
             FROM music.artists, music.albums, music.genres
             WHERE albums.artist_id = artists.artist_id
             AND albums.genre_id = genres.genre_id
             AND music.albums.album_name LIKE '%$cleanSearchTerm%'";

   $result = mysqli_query($connection, $query);
   if (!$result) die ("Database access failed: " . mysqli_error($connection));

   $rows = $result->num_rows;

} elseif (!isset($_POST['searchTerm']))
{
   $searchTerm = "";
   $rows = 0;
}

//show query results:
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
?>