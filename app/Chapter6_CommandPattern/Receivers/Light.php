<?php

namespace App\Chapter6_CommandPattern\Receivers;

class Light
{
    protected string $location;

    public function __construct(string $location = '')
    {
        $this->location = $location;
    }

    public function on(): void
    {
        echo $this->location . " Light is ON<br>";
    }

    public function off(): void
    {
        echo $this->location . " Light is OFF<br>";
    }
}
