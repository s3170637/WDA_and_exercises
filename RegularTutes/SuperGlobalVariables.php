<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 21/08/14
 * Time: 2:55 PM
 */

/**
 * These are structured as associative arrays.
 *
 * Some predefined vars:
 *
 * $GLOBALS     All variables that are currently defined in the global scope of the script. The variable names are
 *              keys of the array.
 * $_SERVER     Information such as headers, paths and script locations. The entries in this array are created by the
 *              web server and there is no guarantee that every web server will provide any or all of these
 * $_GET        Variables passed to the current script via the HTTP GET method
 *
 * $_POST       Variables passed to the current script via the HTTP POST method
 *
 * $_FILES      Items uploaded to the current script via the HTTP POST method
 *
 * $_COOKIE     Variables passed to the current script via HTTP cookies
 *
 * $_SESSION    Session variables available to the current script
 *
 * $_REQUEST    Contents of information passed from the browser; by default $_GET, $_POST, $_COOKIE
 *
 * $_ENV        Variables passed to the current script via the environment method
 */

//to use these variables is not difficult. For example, if you wanted to know the URL that referred the user to the
//current webpage...

$came_from = $_SERVER['HTTP_REFERRER']; //$came_from will also be set to an empty string if your page was navigated to
                                        //straight by the user, without referrals

//because superglobal vars are susceptible to malicious use, it's always the best practice to sanitise them, just so:
$came_from = htmlentities($_SERVER['HTTP_REFERRER']);
//this converts all the characters into html entities

