<?php


namespace ishop;


use http\Exception\InvalidArgumentException;
use ishop\traits\TSingleton;

class Regestry
{
    use TSingleton;

    private static $properties = [];


    public function setProperty($key, $value)
    {
        if (array_key_exists($key, self::$properties)) {
            throw new InvalidArgumentException("Invalid key given");
        }
        self::$properties[$key] = $value;
    }

    public function getProperty($key)
    {
        if (!isset(self::$properties[$key])) {
            throw new InvalidArgumentException("Invalid key given");
        }
        return self::$properties[$key];
}

    public function getProperties()
    {
        return self::$properties;
    }

}