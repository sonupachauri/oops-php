<?php
// inheritence 

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
class TVWithTimer extends TV {
    public $timer = true;
}
$tv= new TVWithTimer('LG',3);
echo $tv->model;
