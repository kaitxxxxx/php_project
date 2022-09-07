<?php
require_once 'ScissorsFactory.php';
require_once 'PaperFactory.php';
require_once 'RockFactory.php';

//入力する
$file_name = 'Janken.txt';
$fp = fopen($file_name, 'r');
$throws = explode(' ', fgets($fp));

foreach ($throws as $num => $throw) {

    if ($throw === 'paper') {
        $person[$num] = new PaperFactory();
        continue;
    }

    if ($throw === 'rock') {
        $person[$num] = new RockFactory();
        continue;
    }

    if ($throw === 'scissors') {
        $person[$num] = new ScissorsFactory();
        continue;
    }

    throw new Exception("Can't create an instance");
}


$person[0]->do();
$person[1]->do();

if ($person[0]->do() === $person[1]->do()) {
    print 'あいこです';
} 

if (
    $person[0]->do() ==='rock' && $person[1]->do() ==='scissors'||
    $person[0]->do() ==='scissors' && $person[1]->do() === 'paper' ||
    $person[0]->do() ==='paper' && $person[1]->do() === 'rock'
) {
    print 'Aの勝ちです';
}

if (
    $person[0]->do() ==='rock' && $person[1]->do() ==='paper'||
    $person[0]->do() ==='scissors' && $person[1]->do() === 'rock' ||
    $person[0]->do() ==='paper' && $person[1]->do() === 'scissors'
) {
    print 'Aの負けです';
}
