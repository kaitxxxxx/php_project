<?php

/**
 * ループの数え上げを行うもの
 */
interface BookIterator
{
    /**
     * 次の要素が存在するかどうか確認するメソッド
     * @return boolian
     */
    public function hasNext();

    /**
     * 次の要素を獲得するメソッド
     */
    public function next();
}
