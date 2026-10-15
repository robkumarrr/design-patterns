<?php

namespace App\Chapter7_AdapterPattern\Models;

use App\Chapter7_AdapterPattern\Interfaces\ITurkey;

class WildTurkey implements ITurkey
{
    public function gobble(): void
    {
        echo "Gobble Gobble<br>";
    }

    public function fly(): void
    {
        echo "Flap weakly<br>";
    }
}
