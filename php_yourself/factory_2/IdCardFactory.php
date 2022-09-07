<?php

require_once 'factory.php';

class IdCartFactory extends Factory
{
    public $owners = [];

    protected function createProduct($owner, $type)
    {
        //ここが物によって今後増えていく
        if ($type === 'IdCard') {
            return new Idcard($owner);
        } else if ($type === 'pc') {
            return new Pc($owner);
        }
    }

    protected function registerProduct($owner)
    {
        array_push($this->owners,$owner->getOwner());
    }
}