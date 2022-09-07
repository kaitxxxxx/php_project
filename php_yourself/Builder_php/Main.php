<?php
require_once 'TextBuilder.php';
require_once 'HTMLBuilder.php';
require_once 'Director.php';

echo "1:plain, 2:html";

$input =(int)(trim(fgets(STDIN)));

if ($input === 1) {
    $text_builder = new TextBuilder();
    $director = new Director($text_builder);

    $result = $text_builder->getResult();
    print $result;
} elseif($input === 2) {
    $html_builder = new HTMLBuilder();
    $director = new Director($html_builder);

    $file_name = $html_builder->getResult();
    print $file_name. 'が作成されました';
} else {
    print '数字が存在しません';
}

