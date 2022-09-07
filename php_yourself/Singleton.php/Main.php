<?php
require_once 'Singleton.php';

$singleton_test_1 = Singleton::getInstance();
$singleton_test_2 = Singleton::getInstance();

var_dump($singleton_test_1);
var_dump($singleton_test_2);

if ($singleton_test_1 == $singleton_test_2) {
    print '1と2は同じインスタンスです';
} else {
    print '1と2は同じインスタンスではありません';
}

$test = new Singleton();