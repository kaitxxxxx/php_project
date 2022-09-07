<?php

class Triple
{
    /**
     * クラスプロパティー
     */
    private static $triple = [];

    public $id;

    private function __construct(int $id)
    {
        print $id.'のインスタンスが作成されました'."<br>";
        $this->id = $id;
    }

    public static function getInstance(int $id): Triple
    {
        if (!isset(self::$triple[0]) && $id === 0) {
            self::$triple[0] = new Triple(0);
        }

        if (!isset(self::$triple[1]) && $id === 1) {
            self::$triple[1] = new Triple(1);
        }

        if (!isset(self::$triple[2]) && $id === 2) {
            self::$triple[2] = new Triple(2);
        }

        return self::$triple[$id];
    }

    public function text()
    {
        print '[triple id : '. $this->id . ']'."<br>";
    }
}