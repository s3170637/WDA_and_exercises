<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 24/08/14
 * Time: 3:27 PM
 */
include "library.php"; //include the file that contains the functions you want
include_once "library_two.php"; //include the file only once - if other libraries you're using may have already included
                                //this file, this avoids inadvertently doing so twice.
require "library_three.php"; //same as 'include', however unlike the previous 'includes', this code says the file MUST
                             //be present, or the program won't run. 'include' code continues to execute under these
                             //conditions.
require_once "library_four.php"; //same as 'include_once', but 'require' version.

//function_exists: checks if the function exists in the version of the PHP you're checking against:
if (function_exists("array_combine"))
{
    echo "OK";
}
else
{
    echo "Need to define function";
}

?>