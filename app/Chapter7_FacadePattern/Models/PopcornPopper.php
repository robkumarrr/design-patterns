<?php

namespace App\Chapter7_FacadePattern\Models;

/**
 * Subsystem component.
 */
class PopcornPopper
{
    public function on(): void
    {
        echo "Popcorn popper on<br>";
    }

    public function pop(): void
    {
        echo "Popcorn popper popping popcorn!<br>";
    }

    public function off(): void
    {
        echo "Popcorn popper off<br>";
    }
}
