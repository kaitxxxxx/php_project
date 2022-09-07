<?php
require_once 'Rock.php';
require_once 'Paper.php';
require_once 'Scissors.php';

class ResultFactory
{
    public function create($throw)
    {
        if ($throw === 'rock') {
            return new Rock($throw);
        }

        if ($throw === 'paper') {
            return new Paper($throw);
        }

        if ($throw === 'scissors') {
            return new Scissors($throw);
        }

        throw new Exception("Can't create an instance");
    }
}
