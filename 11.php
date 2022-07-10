<?php
//traits

trait hello{
    public function hello(){
        return "Hello World!";
    }
}

trait bye{
    public function bye(){
        return "bye World!";
    }
}


class base{
    use hello,bye;

}
$baseObj=new base();
echo $baseObj->hello();
echo $baseObj->bye();