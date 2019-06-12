<?php


namespace ishop;


use ishop\libs\Debag;

class App
{

    public static $app = [];


    public function __construct()
    {
        $url = trim($_SERVER['QUERY_STRING'], '/');
        self::$app = Regestry::getInstance();
        $this->getParams();
        Router::despatch($url);

    }

    protected function getParams()
    {
        $params = require_once CONFIG . '/params.php';

        if (!empty($params)) {
            foreach ($params as $key => $value) {
                self::$app->setProperty($key, $value);
            }
        }

    }

}