<?php

require_once 'AbstractDisplay.php';

class CharDisplay extends AbstractDisplay
{

    private $char_display;
    public function __construct($char)
    {
        $this->char_display = $char;
    }

    public function open()
    {
        echo '＜＜';
    }

    public function print()
    {
        echo $this->char_display;
    }

    public function close()
    {
        echo '＞＞';
    }
}