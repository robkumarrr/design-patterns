<?php

namespace App\Chapter7_FacadePattern\Models;

/**
 * Subsystem component.
 */
class StreamingPlayer
{
    public string $name = 'Streaming Player';

    public function on(): void
    {
        echo "{$this->name} on<br>";
    }

    public function play(string $movie): void
    {
        echo "{$this->name} playing \"{$movie}\"<br>";
    }

    public function stop(): void
    {
        echo "{$this->name} stopped<br>";
    }

    public function off(): void
    {
        echo "{$this->name} off<br>";
    }
}
