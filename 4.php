<?php
// overriding of construct function

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
class plazmaTV extends TV {
    function __construct(){

    }
}
$plazma = new plazmaTV;
echo $plazma->model;