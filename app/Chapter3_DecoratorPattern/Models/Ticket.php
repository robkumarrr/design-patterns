<?php

namespace App\Chapter3_DecoratorPattern\Models;

abstract class Ticket
{
    private string $description = "Unknown ticket type";

    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;
}
