<?php
require_once 'Product.php';

abstract class Factory
{
    /**
     * 抽象クラスに依存
     */
    private Product $p;

    public function create(string $owner, string $pc)
    {

        $this->p = $this->createProduct($owner, $pc);
        $this->registerProduct($this->p);

        return $this->p;
    }

    /**
     * インスタンスの生成を行う
     */
    protected abstract function createProduct($owner, $pc);

    /**
     * インスタンスの保存を行う
     */
    protected abstract function registerProduct($owner);
}