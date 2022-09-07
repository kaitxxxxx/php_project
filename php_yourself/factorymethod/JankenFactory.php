<?php
require_once 'Rock.php';
require_once 'Paper.php';
require_once 'Scissors.php';

abstract class JankenFactory
{
    abstract protected function create();

    public function do()
    {
        $throw = $this->create();
        return $throw->poy();
    }
}
