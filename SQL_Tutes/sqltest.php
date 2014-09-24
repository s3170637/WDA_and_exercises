<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 29/08/14
 * Time: 10:05 AM
 */

//connect to database
//require_once 'login.php';
require_once ('connect.php');
/*
$db_server = mysqli_connect($db_hostname, $db_username, $db_password);
    if (!$db_server) die ("Unable to connect to MySQL: " . mysql_error());
*/
//set a query
$query = "SELECT * FROM classics";
$result = mysql_query($query);

if (!$result)
    die ("Database access failed: " . mysql_error());
else
{
    //extract rows from $result and display
    $rows = mysql_num_rows($result);

//display results in a table
    echo "<table border=1>";
    for ($j = 0; $j < $rows; ++$j)
    {
        echo '<tr>';
        echo '<td>ISBN: '    . mysql_result($result, $j, 'isbn') . '</td>';
        echo '<td>Author: '  . mysql_result($result, $j, 'author') . '</td>';
        echo '<td>Title: '   . mysql_result($result, $j, 'title') . '</td>';
        echo '<td>Category: '. mysql_result($result, $j, 'category') . '</td>';
        echo '<td>Year: '    . mysql_result($result, $j, 'year') . '</td>';
        echo '</tr>';
    }
    echo "</table>";
}

//close the connection once the query has been executed
mysql_close($db_server);

/*note that all connections are automatically closed when PHP
  exits, but if you have to go in and out of the database multiple
  times, then it's a good idea to close the connection each time
  you finish using the database, and re-open it when required.*/
?>