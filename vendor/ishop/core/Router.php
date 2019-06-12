<?php


namespace ishop;


class Router
{

    private static $routes = [];
    private static $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function dispatch($url)
    {
        if (self::matchRoute($url)) {
            echo 'OK';
        } else {
            echo 'NO';
        }

    }

    private static function matchRoute($url)
    {
        return false;
    }


}