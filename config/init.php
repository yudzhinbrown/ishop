<?php

define("DEBUG", false);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop/core');
define("LIBS", CORE . '/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'default');
define("TMP", ROOT . '/tmp');

define("VIEWS", APP . '/views');

define("PATH", "http://ishop.loc");

define("ADMIN", PATH . '/admin');

require_once ROOT . "/vendor/autoload.php";





