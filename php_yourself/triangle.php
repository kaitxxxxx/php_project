<?php
class Triangle {
    private $base;
    private $height;

    //コンストラクターで値を初期化
    public function __construct() {
        $this->setBase(1);
        $this->setHeight(1);
    }

    //getterメソッド（base取得）
    public function getBase(): float
    {
        return $this->base;
    }

    //setterメソッド(値を代入)
    public function setBase(float $base) 
    {
        if ($base >= 0) {
            $this->base = $base;
        }
    }

    //getterメソッド（height取得）
    public function getHeight(): float
    {
        return $this->height;
    }

    //setterメソッド(値を代入)
    public function setHeight(float $height) 
    {
        if ($height >= 0) {
            $this->height = $height;
        }
    }

    public function getArea(): float
    {
        return $this->getBase() * $this->getHeight() /2;
    }
}