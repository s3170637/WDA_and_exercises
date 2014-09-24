<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 24/08/14
 * Time: 3:55 PM
 */

namespace SocialNetworkingTute;

$object = new User('name', 'password');
$second_object = new User('name', 'password');
print_r($object);
echo "<br />";

//set value for parameters              //note the global scope of this code (anything set to private in a class
                                        //would not be accessible here unless a get method is written for it.
$object->name = "Joe";                  //note the lack of the $ sign when accessing the obj property
$object->password = "my_password";      //note that this would normally be set to private, and a setter would be used
print_r($object); echo "<br />";
$object->save_user();

//using 'clone' operator, you can create a new instance of the class, with values copied over from the original instance
//to the new, cloned instance. This is used to avoid overwriting the original with new values, among other things.
$object1 = new User('name', 'password');
$object1->name = "Alice";
$object2 = clone $object1;
$object2->name = "Amy";

//calling a static method:
User::pwd_string();
User::lookup_default();

//note that unlike primitives (strings, integer vars etc), objects are passed by reference; that is, they're not copied
//in their entirety, but a reference to the actual object is handed down, when it's passed as a parameter
class User
{
    public $name, $password; //object (or class) properties

    //constants declaration
    const DEFAULT_USER = 'admin';
    const DEFAULT_PASSWORD = 'password';

    /*
     * properties can be declared implicitly, ie you could declare a class just so:
     *
     * class User {}
     *
     * and it would still be legal. Then you could type, $object = new User(); $object->name = "Alice"; and
     * PHP would implicitly create that property for the class. However this is not the best practice, and
     * it is always preferable to explicitly declare properties inside your classes.
     *
     * the other advantage of explicitly declaring your properties here is that you can assign default values to them.
     * the rule is that it must be a constant, not a result of a function or expression.
     */

    function save_user()
    {
        //save_user code goes here.
        echo "save_user() code goes here";
    }

    //constructor option1:
    function User()
    {
        //constructor statements go here
    }

    //constructor option2: (preferred)
    function __construct($param1, $param2)  //two underscore chars
    {
        //constructor statements go here
        $this->name = $param1;
        $this->password = $param2;
    }

    //destructors - use once last reference has been made to the object
    function __destruct()
    {
        //destructor code goes here
    }

    function get_name()
    {
        return $this->name;
    }

    function get_password()
    {
        return $this->password;
    }

    static function pwd_string()
    {
        echo "please enter your password:\n";
    }

    static function lookup_default()
    {
        echo self::DEFAULT_USER."\t".self::DEFAULT_PASSWORD; //constants can be referenced directly with a self:: keyword
    }

    /*
     * use of public, protected, private:
     *
     * - methods are assumed to be private by default
     *
     * public - when OUTSIDE code SHOULD ACCESS this member, and SUBCLASSES SHOULD INHERIT it.
     * protected - when OUTSIDE code SHOULD NOT ACCESS this member, but SUBCLASSES SHOULD INHERIT it.
     * private - when OUTSIDE code SHOULD NOT ACCESS this member, and SUBCLASSES SHOULD NOT INHERIT it.
     *
     * this is slightly different from typical object oriented languages, such as Java or C#.
     *
     * keywords 'var' and 'public' are interchangeable, although 'var' is deprecated, it is retained for legacy support
     */

    private function admin()
    {
        //private function code goes here. this will not be accessible outside of the class. however an accessor method
        //to retrieve a result is still possible.
    }

}

?>