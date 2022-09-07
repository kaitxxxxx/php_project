<?php

require_once 'Product.php';

class Manager
{
    private $showcase = [];
    private Product $p;

    //インターフェースに依存している。
    //
    public function register(string $name, Product $proto)
    {
        $this->showcase[$name] = $proto;
    }

    public function create(string $proto_name)
    {
        $p = $this->showcase[$proto_name];
        return $p->createClone($p);
    }
}