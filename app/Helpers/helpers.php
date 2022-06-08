<?php
if (!function_exists('camelToSnake')) {
    function camelToSnake($camel)
    {
        $snake = preg_replace_callback('/[A-Z]/', function ($match) {
            return '_' . strtolower($match[0]);
        }, $camel);
        return ltrim($snake, '_');
    }
}
