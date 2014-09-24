<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 3/09/14
 * Time: 8:25 PM
 */

require_once('login.php');

$link = mysqli_connect($db_hostname,$db_username,$db_password,$db_database);

$sql = "SELECT region_name FROM region GROUP BY region_name;";

$result = mysqli_query($link,$sql);
if ($result != 0) {
   echo '<label>City:';
   echo '<select name="city">';
   echo '<option value="">all</option>';

   $num_results = mysqli_num_rows($result);
   for ($i=0;$i<$num_results;$i++) {
      $row = mysqli_fetch_array($result);
      $name = $row['region_name'];
      echo '<option value="' .$name. '">' .$name. '</option>';
   }

   echo '</select>';
   echo '</label>';
}

mysqli_close($link);