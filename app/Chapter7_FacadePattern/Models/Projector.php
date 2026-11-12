<?php

namespace App\Chapter7_FacadePattern\Models;

/**
 * Subsystem component.
 */
class Projector
{
    public function on(): void
    {
        echo "Projector on<br>";
    }

    public function wideScreenMode(): void
    {
        echo "Projector in widescreen mode (16x9 aspect ratio)<br>";
    }

    public function off(): void
    {
        echo "Projector off<br>";
    }
}
