<?php
require_once 'Display/Display.php';
require_once 'Display/CountDisplay/CountDisplay.php';
require_once 'DisplayImpl/StringDisplayImpl/StringDisplayImpl.php';


    $d1= new Display(new StringDisplayImpl("Hello Japan."));
    $d2 = new Display(new StringDisplayImpl("Hell world."));
    $d3 = new CountDisplay(new StringDisplayImpl(("Hell Universe.")));

    $d1->display();
    $d2->display();
    $d3->display();
    $d3->multiDisplay(5);
