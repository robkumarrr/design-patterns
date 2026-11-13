<?php

namespace App\Chapter7_FacadePattern\Models;

/**
 * Subsystem component.
 */
class TheaterLights
{
    public function dim(int $level): void
    {
        echo "Theater ceiling lights dimming to {$level}%<br>";
    }

    public function on(): void
    {
        echo "Theater ceiling lights on<br>";
    }
}
