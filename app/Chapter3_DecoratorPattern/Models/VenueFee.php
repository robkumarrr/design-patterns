<?php

namespace App\Chapter3_DecoratorPattern\Models;

use App\Chapter3_DecoratorPattern\Models\TicketDecorator;

class VenueFee extends TicketDecorator
{
    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    public function cost(): float
    {
        return $this->ticket->cost() + 10;
    }

    public function getDescription(): string
    {
        return $this->ticket->getDescription() . ", Venue Fee";
    }
}
