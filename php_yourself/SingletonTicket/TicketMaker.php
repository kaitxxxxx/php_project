<?php

class TicketMaker
{
    private static $ticket_maker;
    private $ticket = 1000;

    private function __construct()
    {
        print'シングルトンが生成されました';
    }

    public function getNextTicketNumber() {
        return $this->ticket++;
    }

    public static function getInstance(): TicketMaker
    {
        if (!isset(self::$ticket_maker)) {
            self::$ticket_maker = new TicketMaker();
        }
        
        return self::$ticket_maker;
    }

}