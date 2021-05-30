<?php
class Person 
{
    public $firstName = '';
    public $lastName ='圭祐';

    public function show() {
        print "僕の名前は{$this->firstName}{$this->lastName}です";
    }
}
?>