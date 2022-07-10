<?php
// encapsulation
class TV{
    private $volume;
    protected $model;
    
    public function volumeUp(){
        $this->volume++;
    }
    public function volumeDown(){
        $this->volume--;
    }
     //getter function add 
    private function getModel(){
        return $this->model;
    }
    function __construct($m,$v){
        $this->model=$m;
        $this->volume=$v;
    }
}
// $tv= new TV('abc',1);
// echo $tv->getModel();

class Plazma extends TV{
    public function getModel(){
        return $this->model;
    }
}

$tv= new Plazma('abc',1);
echo $tv->getModel();