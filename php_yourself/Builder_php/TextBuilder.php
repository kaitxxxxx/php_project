<?php
require_once 'Builder.php';

class TextBuilder extends Builder
{
    private string $str;

    public function makeTitle(string $title)
    {
        $this->str = '=========================='.PHP_EOL;
        $this->str.= '['. $title. ']'.PHP_EOL;
        $this->str.= PHP_EOL;

    }

    public function makeString(string $str)
    {
        $this->str.= '■' .$str. PHP_EOL;
        $this->str.= PHP_EOL;
    }

    public function makeItems(array $items)
    {
        foreach($items as $item){
            $this->str.= ' ・'. $item . PHP_EOL;
        }
        $this->str.= PHP_EOL;
    }

    public function close()
    {
        $this->str.= '=========================='.PHP_EOL;
    }

    public function getResult()
    {
        return $this->str;
    }
}