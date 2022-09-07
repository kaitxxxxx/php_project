<?php
require_once 'PrintWord.php';
require_once 'Banner.php';

class PrintBanner extends Banner implements PrintWord
{
    public function __construct(String $string)
    {
        parent::__construct($string);
    }

    public function printWeek()
    {
        $this->showWithParen();
    }

    public function printStrong()
    {
        $this->showWithAster();
    }
}