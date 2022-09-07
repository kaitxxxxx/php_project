<?php

require_once 'AbstractDisplay.php';

class StringDisplay extends AbstractDisplay
{
    private String $string_display;
    private int $width;

    public function __construct(String $string)
    {
        $this->string_display = $string;
        $this->width = strlen($this->string_display);
    }

    public function open()
    {
        $this->printLine();
    }

    public function close()
    {
        $this->printLine();
    }

    public function print()
    {
        echo '|' . $this->string_display . '|' .'<br>';
    }

    public function printLine()
    {
        echo '<br>';
        
        echo '+';
        for ($i=0; $i<$this->width; $i++) {
            echo'-';
        }
        echo '+';

        echo '<br>';
    }
}