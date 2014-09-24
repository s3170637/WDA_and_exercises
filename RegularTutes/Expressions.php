<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 21/08/14
 * Time: 4:48 PM
 */

/*
 * Expressions
 */

//boolean operations:

echo "a: [" . (20 > 9) . "]<br />";
echo "b: [" . (5 == 6) . "]<br />";
echo "c: [" . (1 == 0) . "]<br />";
echo "d: [" . (1 == 1) . "]<br />";

/*
 * note that a and d will print [1], because they evaluate to TRUE.
 * b and c will print simply [], because in PHP, FALSE is defined as NULL.
 *
 * Take note of this, because in some languages FALSE is defined as 0 or -1, so refer to language API when using it.
 */

/*
 * Literals:
 *
 * a simplest form of expression, meaning that it simply evaluates to itself, such '73' or 'hello'
 */
