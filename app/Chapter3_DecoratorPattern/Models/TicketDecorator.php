<?php

namespace App\Chapter3_DecoratorPattern\Models;

abstract class TicketDecorator extends Ticket
{
    public Ticket $ticket;
    public function getDescription(): string
    {
        return $this->ticket->getDescription();
    }
}
