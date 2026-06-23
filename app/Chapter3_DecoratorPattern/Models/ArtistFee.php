<?php

namespace App\Chapter3_DecoratorPattern\Models;

use App\Chapter3_DecoratorPattern\Models\TicketDecorator;

class ArtistFee extends TicketDecorator
{
    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    public function cost(): float
    {
        return $this->ticket->cost() + 5;
    }

    public function getDescription(): string
    {
        return $this->ticket->getDescription() . ", Artist Fee";
    }
}
