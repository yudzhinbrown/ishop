<?
session_start();

require_once "../config/init.php";
require_once CONFIG ."/routes.php";

use ishop\App;
use ishop\ErrorHandler;


new App();
new ErrorHandler();















