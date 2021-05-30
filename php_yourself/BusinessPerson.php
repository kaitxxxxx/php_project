<?php
//継承先のファイルをインポート
require_once 'Person2.php';

class BusinessPerson extends Person {
    //サブクラス独自のメソッドを追加
    public function work()
    {
        print $this->firstName.$this->lastName.'は働いています。'."<br>";
    }
}