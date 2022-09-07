<?php
require_once 'JankenInterface.php';

class Rock implements Janken
{
    //ジャンケンの出した手
    private $throw;

    public function __construct($throw) {
        $this->setThrow($throw);
    }

    //getterメソッド
    public function getThrow() :string
    {
        return $this->throw;
    }

    //setterメソッド
    public function setThrow(String $throw)
    {
        $this->throw = $throw;
    }

    //どの手を出すかを定義してある。
    public function poy()
    {
        return $this->getThrow();
    }
}