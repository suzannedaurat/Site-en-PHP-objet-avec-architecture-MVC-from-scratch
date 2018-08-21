<?php

class Session 
{
    function __construct()
    {}

    function write($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    function read($key)
    {
        return $_SESSION[$key];
    }
}