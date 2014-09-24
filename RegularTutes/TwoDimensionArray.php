<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 12/08/14
 * Time: 11:21 PM
 */

//tic tac toe example; multi-dimensional arrays
//are created by nesting more arrays within one array
$oxo = array(array('x', '','o'),
             array('o','o','x'),
             array('x','o', ''));

//then to print a third element of the second array, we can use the following:

echo $oxo[1][2];
?>