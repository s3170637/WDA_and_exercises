<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 24/08/14
 * Time: 7:59 PM
 */

namespace SocialNetworkingTute;
//require_once "User.php";
$subscriber1 = new Subscriber("Alexei Gudimenko", "password", "0421433433", "whispering.gloom@live.com.au");
$subscriber1->setPhone("87070631");
$subscriber1->setName = "Alexei Gudimenko"; //note the setter is used, not the direct property


class Subscriber extends User
{
    private $name, $password, $phone, $email;

    function __construct($name, $password, $phone, $email)
    {
        parent::__construct($name, $password);
        $this->phone = $phone;
        $this->email = $email;
    }

    function getPhone()
    {
        return $this->phone;
    }

    function setPhone($phone)
    {
        $this->phone = $phone;
    }
} 