<?php
require_once 'BusinessPerson.php';

class EliteBusinessPerson extends BusinessPerson
{
    //オーバーライド
    public function work()
    {
        print $this->firstName.$this->lastName.'はめちゃめちゃ働いています。'."<br>";
    }
}