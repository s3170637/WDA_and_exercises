<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 26/08/14
 * Time: 11:58 AM
 */

/*
 * printf: controls the format of the output by
 *         allowing special formatting strings
 *
 * e.g.: printf("There are %d items in your basket", 3);
 *
 * this will display 3 (in a decimal format) where %d is
 * currently placed.
 *
 * replacing %d with %b will display 3 in binary
 *
 * table:
 *
 * % - display a % character (with no additional arguments)
 * b - display an argument as a binary integer
 * c - display an ASCII char for the argument
 * d - display arg as a signed decimal integer
 * e - display arg using scientific notation
 * f - display arg as floating point
 * o - display arg as an octal integer
 * s - display arg as a string
 * u - display arg as an unsigned decimal
 * x - display arg in lowercase hexadecimal
 * X - display arg in uppercase hexadecimal
 *
 * you can have as many specifiers as you like in
 * a printf function, as long as you pass a matching
 * number of arguments, and as long as each specifier
 * is prefaced by a % symbol.
 *
 * Values to be supplied to the specifiers are to be
 * separated by a comma
 */

//a more practical application of printf:
printf("<font color='#%X%X%X'>Hello</font>", 65, 127, 245);
//note the deprecated tag; typically CSS would be used for
//any formatting, but this is still useful as an example
printf("<font color='#%X%X%X'>Hello</font>", $red, $green, $blue);
//same thing but using variables instead of numbers.

/*
 * you can also set the precision of the displayed result:
 *  e.g.: printf("The result is: $%.2f", 123.42 / 12);
 * will display the result of the division
 */

//more precision examples:

echo "<pre>"; //enables viewing of the spaces

//pad to 15 spaces
    printf("The result is $%15f\n", 123.42 / 12);
//pad to 15 spaces and fill with 0s
    printf("The result is $%015f\n", 123.42 / 12);
//pad to 15 spaces, 2 decimal spaces precision:
    printf("The result is $%15.2f\n", 123.42 / 12);
//pad to 15 spaces, 2 decimal places precision, fill with zeros
    printf("The result is $%015.2f\n", 123.42 / 12);
//pad to 15 spaces, 2 decimal places precision, fill with # symbol
    printf("The result is $%#15.2f\n", 123.42 / 12);

//string padding examples:
echo "<pre>";

$h = 'House';

//Standard string output:
printf("[%s]\n", $h);
//Right-justify with spaces
printf("[%10s]\n", $h);
//Left-justify with spaces
printf("[%-10s]\n", $h);
//Zero padding
printf("[%010s]\n", $h);
//Use a custom padding character (here: #) the ' is a necessary marker
printf("[%'#10s]\n\n", $h);

$d = 'Doctor House';

//Right-justify, cut off 8 characters
printf("[%10.8s]\n", $d);
//Left-justify, cut off 6 characters
printf("[%-10.6s]\n", $d);
//Left-justify, pad '@', cut off 6 characters
printf("[%-'@10.6s]\n", $d);

echo "</pre>"; //close pre-format tag

//to send the result of a print conversion to a variable:
//use the 'sprintf' function, like this:
$hexstring = sprintf("%X%X%X", 65, 127, 245);
$out = sprintf("The result is: $%.2f", 123.42/12);

/**
 * DATES:
 *
 * syntax:
 *  date($format, $timestamp);
 */