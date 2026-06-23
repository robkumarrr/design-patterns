<?php

namespace App\Chapter3_DecoratorPattern\Models;

class ConcertTicket extends Ticket
{
    private string $description;
    public function __construct()
    {
        $this->description = "Concert Ticket";
    }

    public function cost(): float
    {
        return 50;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
