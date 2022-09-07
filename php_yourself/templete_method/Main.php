<?php
require_once 'CharDisplay.php';
require_once 'StringDisplay.php';


$char_string = new CharDisplay('a');
$char_string->display();
echo '<br>';

$long_string = new StringDisplay('Hello, world.');
$long_string->display();

$japanese_strign = new StringDisplay('こんにちは');
$japanese_strign->display();
