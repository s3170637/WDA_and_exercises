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
   <form action="search_results.php" method="post">
   <pre>
      SEARCH ARTIST:     <input type="text" name="searchTerm"/>
                         <input type="submit" value="Search!">
   </pre>
   </form>
_END;

//get the search term from user input
//$searchTerm = $_POST['searchTerm'];
$searchTerm = "";
if (isset($_POST['searchTerm']))
{
   $cleanSearchTerm = $connection->real_escape_string($_POST['searchTerm']);
   //$searchTerm = get_post($connection, $_POST['searchTerm']);
   //create a query based on search term
   $query = "SELECT * FROM artists WHERE artist_name LIKE '%$cleanSearchTerm%'";
//$query = "SELECT * FROM artists";          //test
   $result = mysqli_query($connection, $query);
   if (!$result) die ("Database access failed: " . mysqli_error($connection));

   $rows = $result->num_rows;

} elseif (!isset($_POST['searchTerm']))
{
   $searchTerm = "";
   $rows = 0;
}

$resultsArray = array();

$_SESSION['rows'] = $rows;
$_SESSION['hi'] = 'hello'; //test sessions

/*
for ($j = 0; $j < $rows; $j++)
{
   $result->data_seek($j);
   $row = $result->fetch_array(MYSQLI_ASSOC);

   $resultsArray['artist_id'] = $row['artist_id'];
   $resultsArray['artist_name'] = $row['artist_name'];
   $resultsArray['country_of_origin'] = $row['country_of_origin'];
}

$_SESSION['resultsArray'] = $resultsArray;
*/
function get_post($connection, $var)
{
   return mysqli_real_escape_string($connection, $var);
}
?>