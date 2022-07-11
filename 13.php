<?php
// method chaining
class Personal{
    function First(){
        echo "Inside first method...";
        return $this;
    }

    function Second(){
        echo "Inside second method...";
        return $this;
    }

    function Third(){
        echo "Inside third method...";
    }
}

$pers=new Personal();
// $pers->First();
// $pers->Second();
// $pers->Third();

$pers->First()->Second()->Third();