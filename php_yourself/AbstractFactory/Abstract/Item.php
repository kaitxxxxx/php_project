<?php

abstract class Item
{
    protected string $caption;

    public function __construct(string $caption)
    {
        $this->caption = $caption;


        
    }

    abstract public function makeHTML();
}