<?php

class NonStaticSample
{
    public $number = 10;
    private $name = "John Doe";

    public function sayHello($to = 'world')
    {
        $name = $this->name;
        if (!empty($to)) {
            $name = trim($to); 
        }
        echo sprintf("Hello %s!", $name);
    }
    
}


$obj = new NonStaticSample;

echo $obj->number;
echo "<br>";
echo $obj->sayHello();
echo "<br>";
echo $obj->sayHello('John Sally');