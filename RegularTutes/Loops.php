<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 23/08/14
 * Time: 12:00 AM
 */

//loops exercise...

//while:
$fuel = 15;

while ($fuel >= 1)
{
    echo "Keep Driving, fuel qty is $fuel"."<br/>";
    $fuel--;
    if ($fuel == 0)
        echo "Car stopped. Out of fuel"."<br />";
}

//while loop modelling a 12 times table:
$count = 1;

while ($count <= 12) //continue until all 12 operands have been exhausted
{
    echo "$count times 12 is ". $count * 12 ."<br/>";
    ++$count;
}
//alternately...
$count = 0;

while (++$count <= 12)
{
    echo "$count times 12 is ". $count * 12 ."<br/>"; //no need to keep $count++ inside the loop, more elegant :)
}

//do/while variation
$count = 1;
do {
    echo "$count times 12 is ". $count * 12 ."<br/>";
} while (++$count <= 12);

//'for' loop:
for ($count = 1; $count <= 12; $count++)
{
    echo "$count times 12 is ". $count * 12 ."<br/>";
}
/*
 * 'for' loops are composed of:
 *  initialisation ($count = 1;)
 *  condition expression (here - $count <= 12;)
 *  increment/modification ($count++)
 */

//a slightly more complicated loop
for ($i = 1, $j = 1; $i + $j < 10; $i++, $j++)
{
    //...
}

/*
 * a while statement is sometimes more appropriate than a for statement; for example when you want to check for a
 * special input with a "sentinel" value, rather than monitor continuous, regular change to a variable.
 */

//breaking out of a for loop:
$fp = fopen("text.txt", 'wb');

for ($j = 0; $j < 100; ++$j)
{
    $written = fwrite($fp, "data");
    //if ($written == FALSE) break;
    if (!$written) break; //an alternative to the expression above

    //in fact the pair of inner loops can be condensed to the following:
    if (!fwrite($fp, "data")) break;

    /*
     * the 'break' command is even more powerful, because you can specify how many levels of the loop you need
     * to break out from, like this:
     *
     * break 2;
     */
}

fclose($fp); //close file

//'continue' statement...
$j = 10;

while ($j > -10)
{
    $j--;
    if ($j == 0) continue;
    echo (10 / $j) . "<br />";
    /*
     * the 'continue' is similar to the 'break'
     * statement, except it stops just the current
     * iteration of the loop, and moves on to the
     * next iteration.
     */
}



?>

