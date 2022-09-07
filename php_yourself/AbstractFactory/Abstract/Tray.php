<?php
require_once 'Item.php';

abstract class Tray extends Item
{
    protected array $tray= [];

    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }

    public function add(Item $item)
    {
        $tray[] = $item;
    }
}