<?php
class Autoload
{
    private static $path;
    private static $component;

    public static function checkComponentInMap($map, $name)
    {
        if (isset($map[$name])) {
            self::$path = $map[$name];
            self::$component = $name;
        }
        include_once(self::getFilePath());

    }

    public static function getFilePath()
    {
        $filePath = sprintf("%s/../%s/%s.php", __DIR__, self::$path, self::$component);
        return $filePath;
    }
}
