<?php
require_once 'Person2.php';

class Foreiner extends Person 
{
    public $middlewareName;

    public function __construct(string $firstName, string $middlewareName, string $lastName)
    {
        //スーパークラスを呼び出し
        parent::__construct($firstName, $lastName);
        $this->middlewareName = $middlewareName;
    }

    public function show()
    {
        print "僕の名前は{$this->firstName}.{$this->middlewareName}.{$this->lastName}です";
    }
}
