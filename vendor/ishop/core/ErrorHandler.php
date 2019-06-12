<?php


namespace ishop;


class ErrorHandler
{

    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        } else {
            error_reporting(0);
        }
        set_exception_handler([$this, 'exeseptionHandler']);
    }

    public function exeseptionHandler($e)
    {
        if (DEBUG) {
            error_reporting(-1);
        } else {
            error_reporting(0);
        }

        $this->logError($e->getMessage(), $e->getFile(), $e->getLine());
        $this->showError($e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());

    }

    private function logError($message = '', $file = '', $line = '')
    {
        error_log(date('Y-m-d H-i-s') . ": $message | line: $line \n", 3, TMP . '/errors.log');
    }

    private function showError($str, $file, $line, $code)
    {
        http_response_code($code);
        if ($code == 404 && !DEBUG) {
            require VIEWS . '/errors/404.php';
        } elseif (DEBUG) {
            require  VIEWS . '/errors/dev_error.php';
        } else {
            require VIEWS . '/errors/prod_error.php';
        }
        die();

    }

}