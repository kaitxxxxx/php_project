<?php

class StringDisplayImpl extends DisplayImpl
{
    private string $string;

    private int $width;

    public function __construct(String $string)
    {
        $this->string = $string;
        $this->width = strlen($this->string);

        var_dump($this->width);
    }

    public function rawOpen()
    {
        $this->printLine();
    }

    public function rawPrint()
    {
        echo "|". $this->string ."|";
    }

    public function rawClose()
    {
        $this->printLine();
    }

    public function printLine()
    {
        echo '+';

        for($i=0; $i<$this->width; $i++){
            echo '-';
        }

        echo '+';
    }

}