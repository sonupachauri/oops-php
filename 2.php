<?php
// object & functions declaration
class TV{

    public $volume;
    public $model;

    function volumeUp(){
        $this->volume++;
    }

    function volumeDown(){
        $this->volume--;
    }

    function __construct($m,$v){
        $this->model=$m;
        $this->volume=$v;
    }

}

$tv=new TV('sam',2);
echo $tv->model;