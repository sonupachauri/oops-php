<?php
// abstract classes

abstract class BaseEmployee{
    protected $firstName;
    protected $lastName;
   
    public function getFullName(){
        return $this->firstName.''.$this->lastName;
    }

    public abstract function getMonthlySalary();
    
    public function __construct($fname,$lname){
       $this->firstName=$fname;
       $this->lastName=$lname;
    }
}

class FullTimeEmployee extends BaseEmployee{
    protected $annualSalary;

    public function getMonthlySalary(){
        return $this->annualSalary/12;
    }
}

class ContractEmployee extends BaseEmployee{
    protected $hourRate;
    protected $totalHours;
    
    public function getMonthlySalary(){
        return $this->hourRate*$this->totalHours;
    }
}

$fullTimeEmp=new FullTimeEmployee("FullTime " ,"Employee");
echo $fullTimeEmp->getFullName();
echo $fullTimeEmp->getMonthlySalary();

$contractEmp=new ContractEmployee("Contract " ,"Employee");
echo $contractEmp->getMonthlySalary();


