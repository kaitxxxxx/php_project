<?php
require_once 'DisplayImpl/DisplayImpl.php';

class Display
{
    private DisplayImpl $impl;

    public function __construct(DisplayImpl $display_impl)
    {
        $this->impl = $display_impl;
    }

    public function open()
    {
        $this->impl->rawOpen();
    }

    public function print()
    {
        $this->impl->rawPrint();
    }

    public function close()
    {
        $this->impl->rawClose();
    }

    public function display()
    {
        print PHP_EOL;

        $this->open();

        print PHP_EOL;

        $this->print();

        print PHP_EOL;

        $this->close();
    }
}