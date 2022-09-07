<?php
require_once 'Triple.php';

for ($i = 0; $i < 9; $i++) {
    $triple = Triple::getInstance($i%3);
    $triple->text();
}

print 'end';