<?php

class MessageBox implements Product
{
    private string $decochar;
    
    public function __construct(string $decochar)
    {
        $this->decochar = $decochar;
    }

    public function use(string $s)
    {
        $length = strlen($s);

        for($i=0;$i<$length+4;$i++){
            echo $this->decochar;
        }

        echo "<br>";

        echo $this->decochar.' ' . $s .' ' .$this->decochar."<br>";

        for($i=0;$i<$length+4;$i++){
            echo $this->decochar;
        }

        echo "<br>";
    }

    public function createClone(Product $p)
    {
        return clone $p;
    }
}