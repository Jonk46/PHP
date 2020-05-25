<?php

class StaticSample
{
    public static $number = 10;
    private static $name = "John Doe";

    public static function sayHello($to = 'world')
    {
        $name = self::$name;
        if (!empty($to)) {
            $name = trim($to); 
        }
        echo sprintf("Hello %s!", $name);
    }

}


// oops, THERE IS NO OBJECT INSTANTIATION HERE...

echo StaticSample::$number;
echo "<br>";
echo StaticSample::sayHello();
echo "<br>";
echo StaticSample::sayHello('John Sally');