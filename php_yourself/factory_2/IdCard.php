<?php

require_once 'Product.php';

class IdCard extends Product
{
    private $owner;
    public function __construct(String $owner)
    {
        echo $owner.'のカードを作成します'."<br>";
        $this->owner = $owner;
    }

    public function use()
    {
        echo $this->owner.'のカードを使用します'."<br>";
    }

    public function getOwner()
    {
        return $this->owner;
    }
}