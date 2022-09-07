<?php
require_once('JankenFactory.php');

class RockFactory extends JankenFactory
{
    protected function create()
    {
        return new Rock('rock');
    }
}