<?php
// static members
// call without object // object independent

class ObjectCount{
     public static $objectCount=0;

     public static function getCount(){
        return self::$objectCount;
     }
     public function __construct(){
         self::$objectCount++;
     }

}
$a=new ObjectCount();
$a=new ObjectCount();
$a=new ObjectCount();
$a=new ObjectCount();
echo ObjectCount::getCount();