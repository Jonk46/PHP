<?php

class Foo
{
    public    $foo  = 1;
    protected $bar  = 2;
    private   $baz  = 3;

    public function mirror()
    {
        $reflect = new ReflectionClass($this);
        return $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);
    }
}

$foo = new Foo();

$reflect = new ReflectionClass($foo);

$props = $reflect->getProperties(
    ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED
);

foreach ($props as $prop) {
    print $prop->getName() . "\n";
}

echo "<pre>";
print_r($props);
echo "<br><br>";
print_r($foo->mirror());

