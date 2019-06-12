<?php


namespace ishop\libs;


class Debag
{
    static public function printExpression($expression)
    {
        echo "<pre>" . var_dump($expression) . "</pre>";
    }


}