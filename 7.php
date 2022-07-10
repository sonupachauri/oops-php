<?php
//interface

abstract class ABC{
    private $variable;
    private function Test(){

    }
}

interface a{
    // we cant declare variables 
    // we cant declare private/public functions
    // we declare function only in interface. can implement in child classess. 
    public function Test();
}
interface b{

}
class c implements a,b{
  public function Test(){
    
  }
}