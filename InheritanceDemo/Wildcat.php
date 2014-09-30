<?php
/**
 * Created by PhpStorm.
 * User: Alexei
 * Date: 24/08/14
 * Time: 8:20 PM
 */

namespace InheritanceDemo;


class Wildcat
{
   public $fur;

   function __construct()
   {
      $this->fur = "TRUE";
   }

   final function jump()
   {
      //final functions are written when you don't want a subclass to override them.
   }
}
