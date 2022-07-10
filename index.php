<?php

class TV{

    public $volume=1;
    public $model = "BPL";

    function volumeUp(){
        $this->volume++;
    }

    function volumeDown(){
        $this->volume--;
    }

}

$tv=new TV();
echo $tv->volume;
$tv->volumeUp();
echo $tv->volume;
$tv->model="Samsung";
echo $tv->model;