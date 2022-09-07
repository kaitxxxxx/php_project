<?php

abstract class Builder
{
    /**
     * タイトルを決める
     */
    public abstract function makeTitle(string $title);

    /**
     * 文字列
     */
    public abstract function makeString(string $str);

    /**
     * 箇条書き
     */
    public abstract function makeItems(array $list);

    /**
     * 完了
     */
    public abstract function close();
}