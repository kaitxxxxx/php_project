<?php
require_once 'ResultFactory.php';
$result_factory_A = new ResultFactory();
$result_factory_B = new ResultFactory();

$file_name = 'Janken.txt';
$fp = fopen($file_name, 'r');
$throws = explode(' ', fgets($fp));

$result_throw_A = $result_factory_A->create($throws[0]);
$result_throw_B = $result_factory_B->create($throws[1]);

$result_throw_A->poy();
$result_throw_B->poy();

if ($result_throw_A->poy() === $result_throw_B->poy()) {
    print 'あいこです';
} 

if (
    $result_throw_A->poy() ==='rock' && $result_throw_B->poy() ==='scissors'||
    $result_throw_A->poy() ==='scissors' && $result_throw_B->poy() === 'paper' ||
    $result_throw_A->poy() ==='paper' && $result_throw_B->poy() === 'rock'
) {
    print 'Aの勝ちです';
}

if (
    $result_throw_A->poy() ==='rock' && $result_throw_B->poy() ==='paper'||
    $result_throw_A->poy() ==='scissors' && $result_throw_B->poy() === 'rock' ||
    $result_throw_A->poy() ==='paper' && $result_throw_B->poy() === 'scissors'
) {
    print 'Aの負けです';
}
