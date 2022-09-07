<?php
require_once 'factory.php';

if (!isset($argv[1])) {
    print("Usage: php abstract_factory");
    exit;
}

try{
    $factory = Factory::getFactory($argv[0]);
} catch(Exception $e) {
    echo $e->getMessage();
}

$asahi = $factory->createLink('朝日新聞', 'https://www.asahi.com/');
$yomiuri = $factory->createLink('読売新聞', 'https://www.yomiuri.co.jp/');

$us_yahoo = $factory->createLink('yahoo', 'https://www.yahoo.com/');
$jp_yahoo = $factory->createLink('yahoo!japan', 'https://www.yahoo.co.jp/');
$excite = $factory->createLink('excite', 'https://www.excite.co.jp/');
$google = $factory->createLink('google', 'https://www.google.com/');

$tray_news = $factory->createTray('新聞');
$tray_news->add($asahi);
$tray_news->add($yomiuri);

$tray_yahoo = $factory->createTray('yahoo');
$tray_yahoo->add($us_yahoo);
$tray_yahoo->add($jp_yahoo);

$tray_search = $factory->createTray('サーチエンジン');
$tray_search->add($tray_yahoo);
$tray_search->add($excite);
$tray_search->add($google);

$page = $factory->createPage('LinkPage', 'keisuuukey');
$page->add($tray_news);
$page->add($tray_search);
$page->output();


