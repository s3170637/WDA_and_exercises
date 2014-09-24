<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 22/08/14
 * Time: 7:52 PM
 */

$a = "1000";
$b = "+1000";

if (a != $b) echo "1";
if (a !== $b) echo "2";

/*
 * the first statement in this case will not
 * output anything, because in its case the
 * code is checking whether a and b are numerically
 * not equal to each other.
 *
 * the second statement will print, because the
 * code is asking whether a and b are not identical
 * to each other in their present operand types,
 * which is TRUE
 */

/*
 * the OR operator should be used with care; PHP
 * uses shorthand evaluation, meaning if the first
 * value in the OR operation evaluates to true,
 * the second one is not evaluated.
 *
 *
 */

//so, the following statement:


if ($finished == 1 OR getnext() == 1) exit;

//should be written as follows:
$getNext = getnext();
if ($finished == 1 OR $getNext == 1) exit;

//conditionals:

//1: 'if' condition. Contents of this can be any valid php expression, such as equality, comparison, tests for 0 and NULL

//typically, form is if(condition){action}, however braces can be omitted if only one line of code is to be executed
//within 'if' action block.

/*
 * 'if' statement is used on its own when there's only one condition to check. An 'if-else' block gives you two choices;
 * either one or the other is executed, - if the condition evaluates to true (including negation, such as !$variable -
 * in which case it's like saying 'it is true that not $variable is the state of this condition'), then the 'if' part
 * is executed, otherwise the 'else' part is executed.
 * 'if-else if-else' blocks are used for when there are multiple conditions to evaluate
 */

//if-elseif-else
if ($bank_balance < 100)
{
    $money += 1000;
    $bank_balance += $money;
}
elseif ($bank_balance > 200)
{
    $savings += 100;
    $bank_balance -= 100;
}
else{
    $savings += 50;
    $bank_balance -= 50;
}

//the next option is to use the 'switch' statement, -
//this is best used if the number of elseif statements begins to increase dramatically.

//this statement is also useful where one variable can
//have different values, which could trigger a different
//function

//so:
switch ($page)
{
    case "Home": echo "You selected Home";
        break;
    case "About": echo "You selected About";
        break;
    case "News": echo "You selected News";
        break;
    case "Login": echo "You selected Login";
        break;
    case "Links": echo "You selected Links";
        break;
    default: echo "Unrecognised selection"; //break is not required for default case at the end,
        break;                              //but it's still safest/better practice to use it
}

//alternate syntax:
switch ($page2):
    case "Home" : echo "You selected Home";
        break;
    case "Links" : echo "You selected Links";
        break;
endswitch;

//ternary conditional:
echo $fuel <= 1 ? "Fill tank now" : "There is enough fuel";


?>

