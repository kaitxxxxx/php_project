<?php

class UnderlinePen implements Product
{
    private string $ulchar;

    public function __construct(string $ulchar)
    {
        $this->ulchar = $ulchar;
    }

    public function use(string $s)
    {
        $length = strlen($s);
        echo ("\"".$s."\"")."<br>";
        echo(" ");
        for($i=0;$i<$length;$i++){
            echo $this->ulchar;
        }
        echo "<br>";
    }

    public function createClone(Product $p)
    {
        return clone $p;
    }
}