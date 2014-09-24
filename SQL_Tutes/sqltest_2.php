<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 2/09/14
 * Time: 1:27 PM
 */

   //connect to the database
   require_once('connect.php');


   if (isset($_POST['delete']) && isset($_POST['isbn']))
   {
      $isbn = get_post('isbn');
      $query = "DELETE FROM classics WHERE isbn = '$isbn'";

      if(!mysql_query($query, $db_server))
      {
         echo "DELETE failed: $query<br/>" . mysql_error() . "<br/><br/>";
      }
   }

   //check if there is input
   if (isset($_POST['isbn']) &&
       isset($_POST['author']) &&
       isset($_POST['title']) &&
       isset($_POST['category']) &&
       isset($_POST['year']))
   {
      $isbn    = get_post('isbn');
      $author  = get_post('author');
      $title   = get_post('title');
      $category = get_post('category');
      $year    = get_post('year');

      $query = "INSERT INTO classics VALUES" .
         "('$isbn', '$author', '$title', '$category', '$year')";

      if (!mysql_query($query, $db_server))
         echo "INSERT failed: $query<br/>" . mysql_error() . "<br/><br/>";
      else
         echo "INSERT successful";
   }
   else
      echo "Enter the book details: ";

   echo <<<_END
   <form action="sqltest_2.php" method="post">
   <pre>
      ISBN     <input type="text" name="isbn"/>
      Author   <input type="text" name="author"/>
      Title    <input type="text" name="title"/>
      Category <input type="text" name="category"/>
      Year     <input type="text" name="year" />
               <input type="submit" value="ADD RECORD">
   </pre>
   </form>
_END;

//display the contents of the table after insert/delete operations have been performed, if any
$query = "SELECT * FROM classics";

$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());

$rows = mysql_num_rows($result);

for ($j = 0; $j < $rows; ++$j)
{
   $row = mysql_fetch_row($result);
   echo <<<_END
   <pre>
      ISBN     $row[0];
      Author   $row[1];
      Title    $row[2];
      Category $row[3];
      Year     $row[4];
   </pre>
   <form action="sqltest_2.php" method="post">
      <input type="hidden" name="delete" value="yes"/>
      <input type="hidden" name="isbn"   value="$row[0]"/>
      <input type="submit" value="DELETE RECORD"/>
   </form>
_END;
}

//close connection to database
mysql_close($db_server);

/*user-defined functions: */

function get_post($var)
{
   return mysql_real_escape_string($_POST[$var]);
}

function mysql_entities_fix_string($string)
{
   return htmlentities(mysql_fix_string($string));
}

function mysql_fix_string($string)
{
   if (get_magic_quotes_gpc()) $string = stripslashes($string);
   return mysql_real_escape_string($string);
}
?>