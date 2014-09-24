<?php
/**
 * Tutorial file. Examples from the OReilly book
 *
 * User: Alexei
 * Date: 12/08/14
 * Time: 6:13 PM
 */

//variables, strings, assignments
$new_string = "Fred Smith";
$username = $new_string;

//arrays
$names = array($new_string, $username, "Joe");
$users = array('Joe', 'Bill', 'Alex');
echo $users[2]."<br/>";
echo $names[1];

$temp = "The date is ";
//echo $temp . longdate(time());

function longdate($timestamp)
{
    return date("l F jS Y", $timestamp);
} //longdate

function test()
{
    static $count = 0; //note that for static vars you can assign a simple value, but not result of an expression
    echo $count;
    $count++;
}
#end tag may be omitted if the file contains only PHP code

?>

