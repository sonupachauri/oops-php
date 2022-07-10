<?php
//Late static binding
// php > 5.3
//self replace to static keyword when accessing variables

class DB{
    protected static $table='baseTable';

    public function select(){
        return "select * from".static::$table;
    }
    public function insert(){
        return "insert into ".static::$table;
    }
}

class abc extends DB{
    protected static $table = 'abc';
}
$abc=new abc();
echo $abc->select();
echo $abc->insert();
