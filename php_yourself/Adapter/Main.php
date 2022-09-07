<?php
require_once 'PrintWord.php';
require_once 'PrintBanner.php';
require_once 'Banner.php';

/** 
 * @return PrintWord
 * */
$p = new PrintBanner('Hello');

$p->printWeek();
$p->printStrong();
