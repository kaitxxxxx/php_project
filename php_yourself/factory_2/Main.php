<?php

require_once 'IdCard.php';
require_once 'Pc.php';
require_once 'IdCardFactory.php';

$factory = new IdCartFactory();

$id_card_factory_1 = $factory->create('namba keisuke', 'IdCard');
$id_card_factory_2 = $factory->create('namba mika', 'pc');
$id_card_factory_3 = $factory->create('namba tetsuo', 'pc');
$id_card_factory_1->use();
$id_card_factory_2->use();
$id_card_factory_3->use();

print_r($factory->owners);
