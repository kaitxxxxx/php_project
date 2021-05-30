<?php
require_once 'triangle.php';

$tri = new triangle();
$tri->setBase(10);
$tri->setHeight('10');

print '面積は'.$tri->getArea();