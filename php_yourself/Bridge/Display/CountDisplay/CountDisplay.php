<?php

class CountDisplay extends Display
{
    public function __construct(DisplayImpl $display_impl)
    {
        parent::__construct($display_impl);
    }

    public function multiDisplay(int $times)
    {
        print PHP_EOL;

        $this->open();
        print PHP_EOL;

        for($i=0; $i<$times; $i++){
            $this->print();
            print PHP_EOL;
        }

        print PHP_EOL;

        $this->close();
    }
}