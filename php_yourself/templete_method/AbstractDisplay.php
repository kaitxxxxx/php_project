<?php

abstract class  AbstractDisplay{

    abstract public function open();

    abstract public function close();

    abstract public function print();

    public function display()
    {
        $this->open();

        for ($i = 0; $i< 5; $i++) {
           $this->print();
        }

        $this->close();
    }
}