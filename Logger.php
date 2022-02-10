<?php

class Logger
{

    private String $string;
    public static ?Logger $instance = null;

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new Logger();
        }

        return static::$instance;
    }

    private function __construct(String $string = "Hello")
    {
        $this->$string = $string;
    }
}

$firstCall = Logger::getInstance();

function pri($firstCall)
{
    echo 'Sage' . $firstCall;
}
