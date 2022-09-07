<?php

class Singleton
{
    /**
     * @var Singleton $singleton
     */
    private static $singleton;

    private function __construct()
    {
        print'シングルトンを生成しました';
    }

    public static function getInstance(): Singleton
    {
        if (!isset(self::$singleton)) {
            self::$singleton = new Singleton();
        }

        return self::$singleton;
    }
}