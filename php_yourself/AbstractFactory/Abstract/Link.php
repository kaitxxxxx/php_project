<?php
require_once 'Item.php';

abstract class Link extends Item
{
    protected string $url;

    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption);

        $this->url = $url;
    }
}