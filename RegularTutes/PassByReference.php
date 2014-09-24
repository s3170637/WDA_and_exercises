<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 9/09/14
 * Time: 10:47 AM
 */

//Passing by reference:

/*
 * to pass by reference, the variable you're passing must be preceded with an ampersand:
 *
 * $variable = 5;
 *
 * function divide(&$variable)
 * {
 *    return $variable / 2;
 * }
 *
 * this performs operation directly on the variable; & references that var's address in memory, rather than just
 * giving its value to the function.
 *
 * You can use this to also point different values to the same address:
 *
 * $x = 10;
 *
 * $y =& $x;
 *
 *
 */