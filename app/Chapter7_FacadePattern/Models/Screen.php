<?php

namespace App\Chapter7_FacadePattern\Models;

/**
 * Subsystem component.
 */
class Screen
{
    public function down(): void
    {
        echo "Theater screen going down<br>";
    }

    public function up(): void
    {
        echo "Theater screen going up<br>";
    }
}
