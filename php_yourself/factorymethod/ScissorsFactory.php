<?php
require_once('JankenFactory.php');

class ScissorsFactory extends JankenFactory
{
    protected function create()
    {
        return new Scissors('scissors');
    }
}