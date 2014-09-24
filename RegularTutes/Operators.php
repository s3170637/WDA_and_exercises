<?php
/**
 * Demonstration of arithmetic/increment operators
 * User: Alexei
 * Date: 13/08/14
 * Time: 10:13 AM
 */
$j = 6;
$k = $j;

$l = $k + $j;
//echo $l;
//echo $k + $j;

$j++;

$k += 1;

//echo 6+1;

//logical operators:
if ($j > 6 && $l > j)
    doLunch();

function doLunch()
{
    echo "eating food<br/>";
}

$y = 0;
if ($y-- == 0) echo $y; //will display '-1', because in PHP post-increment the comparison will be evaluated first, then
                            //the increment is applied. If this was (--y == 0), the echo would not print.

/*
 * &&, 'and' operators are usually interchangeable
 * ||, 'or'  operators are also usuall interchangeable
 *
 * however the 'word' versions have lower precedence
 *
 * there are also times when only 'word' versions are acceptable:
 * e.g.:
 *  mysql_select_db($database) or die("Unable to select database");
 *
 * the XOR operator is defined simply as 'xor'
 */

//shorthand string appending:
$string1 = 'I\'m';  //note the single quotation marks. They denote a literal string. Note the 'escaped' single quotation mark
$string2 = " groot";    //double quotation marks force PHP to evaluate this as a variable. However, this also allows the following expressions:
$string3 = "$string1 groot";    //this is known as variable substitution
//echo $string3."<br/>";
$string1 .= $string2;
//echo $string1;

//multi-line printouts:
$out = <<<_END

Headline

First line
Second line
_END;

echo $out;

//defining constants:
define("LOCAL_HOST", "http://127.0.0.1");

$local = LOCAL_HOST;

/*
 * the main thing to remember about constants is that they are not prefaced with a $ sign, and
 * that you can only create them using the "define" keyword, as above.
 */

//shorthand conditional statements:

//condition ? resultIfTrue : resultIfFalse
// e. g.
$b = 5;

$b > 4 ? print "TRUE" : print "FALSE";