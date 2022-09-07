<?php
require_once('JankenFactory.php');

class PaperFactory extends JankenFactory
{
    protected function create()
    {
        return new Paper('paper');
    }
}