<?php
//type hinting

class School{
    public function getNames(Student $names){
       foreach($names->Name() as $name){
          echo $name."<br/>";
       }
    }
}

class Student{
    public function Name(){
        return ["ram","shyam","karim"];
    }
}

$sch=new School();
$stu=new Student();

$sch->getNames($stu);
