<?php
require_once (sprintf('%s/components/classes/Autoload.php', __DIR__));

function autoloadComponents($name)
{
    $map = new Map;
    Autoload::checkComponentInMap($map::$map, $name);
}
spl_autoload_register('autoloadComponents');