<?php

namespace App\Chapter3_DecoratorPattern\Models;

class SportsTicket extends Ticket
{
    private string $description;

    public function __construct()
    {
        $this->description = "Sports Ticket";
    }

    public function cost(): float
    {
        return 100;
    }
}
