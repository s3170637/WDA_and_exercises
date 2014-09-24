<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 25/08/14
 * Time: 1:14 PM
 */

//array written in a typical manner:

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

print_r($paper);

$p1 = array("Copier", "Inkjet", "Laser", "Photo"); //assignment using the regular structure

//using a for-each loop on a regular array:
$j = 0; //counter variable

foreach($paper as $item)
{
    echo "$j: $item<br />";
    ++$j;
}

/*
 * in the example above, every time you add an element into the array it goes to the next vacant slot (unlike typical
 * Java or C# arrays, the PHP ones are weakly typed, and so expandable just as an ArrayList would be, for example.
 * [check how similar this functionality is, however].
 *
 * However the disadvantage is that the indexes where the elements are positioned are still just numbers: 0, 1, 2, 3...
 * so they don't tell us much. A better solution for something like this is an associative array:
 */

$paper_type['copier'] = "Copier & Multipurpose";
$paper_type['inkjet'] = "Inkjet Printer";
$paper_type['laser']  = "Laser Printer";
$paper_type['photo']  = "Photographic Paper";

echo $paper_type['laser']; //we can call the value stored in the array by its key phrase we associated with it.

/*
 * thus, what you are doing is essentially creating a key-value pair, that makes the maximum use of the array structure
 * by creating more meaningful, human-readable connections. Keys may still be referred to as indexes.
 */

//assignment using associative arrays:
$p2 = array('copier' => "Copier & Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser'  => "Laser Printer",
            'photo'  => "Photographic Paper");

/*
 * in the above example, you are assigning associative identifiers (left hand side) and the longer product descriptions
 * to the array using the 'index => value' syntax. The => is similar to the usual assignment operator, except in this
 * instance it is assigning a value to an index, not a variable. The index then is inextricably linked to that value,
 * unless assigned a new one.
 *
 * Note that if you declare an associative array, you will not be able to use $myarray[int index] syntax, since the
 * associated keys are strings, not integers. Vice versa, you are not able to use the associative keys on a regular
 * array. Both will produce errors.
 */

//using a 'foreach' on an associative array:
foreach ($paper as $item => $description)
{
    echo "$item: $description<br/>";
    //as associative arrays do not require numeric indexes, the counter variable $j is not required here.
    //the 'item' field takes its place, and the information from the 'key' part of the pair is fed into it.
}

//an alternative to 'for-each ... as' combination is a 'while/list' option. It is written as so:
while (list($item, $description) = each($paper))
    echo "$item: $description<br/>";

/*
 * in this instance, a while loop is set up, which will continue until the 'each' function returns a value of 'false'.
 * this will happen once there are no more pairs to return
 *
 * lists can be created using the following syntax:
 * list($a, $b) =  array('Alice', 'Bob');
 * echo "a=$a, b=$b";
 */


/*
 *  MULTIDIMENSIONAL ARRAYS: (associative used as example)
 */

$products = array(
    'paper' => array(
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser'  => "Laser Printer",
        'photo'  => "Photographic Paper"
    ),
    'pens'  => array(
        'ball' => "Ball Point",
        'hilite' => "Highlighters",
        'marker' => "Markers"
    ),
    'misc'  => array(
        'tape' => "Sticky Tape",
        'glue' => "Adhesives",
        'clips' => "Paper Clips"
    )
);

echo "<pre>";
foreach ($products as $section => $items)
    foreach($items as $key => $value)
        echo "$section:\t$key\t($value)<br/>";
echo "</pre>";

/*
 * nested foreach loops: the outer loops extracts the main sections, and the inner loop prints the key-value pairs for
 * the inner arrays.
 *
 * <pre></pre> tag lets the browser know that pre-formatted text has been used, and to apply it to the output, rather
 * than use default html rules.
 */

//you can also directly access the elements in the array using square brackets, such as:
echo $products['misc']['glue'];

/**
 * USING ARRAY FUNCTIONS:
 *
 * is_array() - checks if the variable is an array
 *
 * eg: echo (is_array($fred)) ? "Is an array" : "Is not an array";
 *
 * count() - counts how many elements are in an array
 *
 * eg: count($fred);
 *
 * for multidimensional arrays, you can use this syntax:
 *
 * count($myarray, [int $array_num]); , where the second parameter is optional, and describes a mode to be used. It can
 * be either 0 - limit, counting only to the top level, or set to 1 for recursive counting of all subarray elements too.
 *
 */
count ($products, 1);

/**
 * ARRAY FUNCTIONS (CONT'D):
 *
 * sort(): acts directly on the array (rather than making a new array), returns TRUE on success/FALSE on failure,
 *  and supports a number of flags.
 *
 * eg: sort($products, SORT_NUMERIC);
 *     sort($products, SORT_STRING);
 *
 * you can also sort in reverse order:
 *
 *     rsort($products);
 *
 * it also supports the same flags.
 *
 * shuffle($myarray) puts the elements in random order
 *
 *
 * explode() - separates a string of characters by a given separator ( a character or a string of characters )
 *              and places the result into an array, returns TRUE on success
 */

//explode() example:

$temp = explode(' ', "This is a sentence with seven words");
print_r($temp);

$temp2 = explode('***', "This***is***a***sentence***with***asterisks");
print_r($temp2);

/**
 * extract() - sometimes it's convenient to turn key/value pairs from an array into PHP variables.
 *
 * This is particularly useful when working with $_GET and $_POST variables. The values from those variables are normally
 * stored as associative arrays, but using extract() you can assign those arrays to a variable for later use.
 *
 * e.g.: extract($_GET);
 *
 * so, for example, if a query string parameter 'q' is sent to a php script with the associated value "Hi there", a new
 * variable $q will be created and assigned that value
 *
 * To avoid overwriting existing variables using this approach, it's best to use the following:
 * extract($_GET, EXTR_PREFIX_ALL, 'fromget'); - this ensures that all new variables will begin with this prefix string
 * followed by an underscore (in this example, - $fromget_q)
 *
 * compact() - this is the inverse of the extract() function. E. g. :
 *
 * $fname = "blah";
 * $lname = "blah";
 * $email = "blah@blah.net";
 *
 * $contact = compact('fname', 'lname', 'email');
 *
 * reset() - if the code ever needs to return to the start of the array
 *
 * end() - moves the array pointer to the end of the array (opposite to reset())
 *
 *
 */



?>