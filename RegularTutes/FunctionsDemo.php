<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 23/08/14
 * Time: 9:07 PM
 */
function htmlLineBreak()
{
    echo "<br />";
}

//example 1: calling in-built print function
print ("print is a function"."<br />");

print "print doesn't require parentheses"."<br />";

//parentheses tell PHP you're referring to a function
//however 'print' is a pseudo function, and in this instance
//parentheses are not strictly necessary.

//phpinfo(); //tells you about current php installation

echo strrev(" .dlrow olleH"); //reverse string
htmlLineBreak();
echo str_repeat("Hip ", 2);   //repeat string n times
echo strtoupper("hooray!");   //string to uppercase
htmlLineBreak();

//syntax:
/*
function function_name([parameter [..., ...]])
{
   //do something;
   //[optional] return something;
}
*/

//simple function that'll convert a person's name to lower case
$customer_name = "haRRy SMITH";

function nameToLower($name)
{
    echo strtolower($name);
}

nameToLower($customer_name);
htmlLineBreak();

//$ucfirst function sets the first character of a string to upper case
$ucname = ucfirst($customer_name);
echo $ucname;


echo fix_names("WILLIAM", "henry", "gatEs");

//alternately, you can store the values as an array:
$names = fix_names("WILLIAM", "henry", "gatEs");
echo $names[0]; //etc;

function fix_names($n1, $n2, $n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
    return $n1 . " " . $n2 . " " . $n3;
    //return array($n1, $n2, $n3); //code for array version
}

//a pass-by-reference example:
$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

function fix_names_by_ref(&$n1, &$n2, &$n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
    //return $n1 . " " . $n2 . " " . $n3;
    //return array($n1, $n2, $n3); //code for array version
}

fix_names_by_ref($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3;

/*
 * note that when passing by reference, it is likely
 * that you'll change the original value of the variable,
 * as opposed to passing by value, where a copy of that
 * value is made. So you may want to copy that value first,
 * and store it somewhere else, before passing by reference
 * and applying operations to it.
 */

//global variables version (using the same variables as before)
function fix_names_global()
{
    global $a1; ucfirst(strtolower($a1));
    global $a2; ucfirst(strtolower($a2));
    global $a3; ucfirst(strtolower($a3));
}

?>