<?php
require_once 'TicketMaker.php';

$obj_1 = TicketMaker::getInstance();
print $obj_1->getNextTicketNumber();

$obj_2 = TicketMaker::getInstance();
print $obj_1->getNextTicketNumber();