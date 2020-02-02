<?php
namespace Reinsys\Lib;

class Util{
    public static function env($key, $default = null) {
        $dotenv = new \Symfony\Component\Dotenv\Dotenv();
        $dotenv->load(__DIR__.'/../../.env');

        $value = $_ENV[$key];

        if ($value === false) {
            return $default;
        }
        return $value;
    }
}