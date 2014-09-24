<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 24/08/14
 * Time: 8:24 PM
 */

namespace InheritanceDemo;

$object = new Tiger();
echo "Tigers have ... "."<br />";
echo "Fur: " . $object->fur . "<br />";
echo "Stripes: " . $object->stripes . "<br />";

class Tiger extends Wildcat
{
    public $stripes;

    function __construct()
    {
        parent:: __construct();
        $this->stripes = "TRUE";
    }
} 