<?php

namespace App\Chapter7_AdapterPattern\Adapters;

use App\Chapter7_AdapterPattern\Interfaces\IDuck;
use App\Chapter7_AdapterPattern\Interfaces\ITurkey;

/**
 * Adapter: wraps a turkey so it can be used anywhere an IDuck is expected.
 */
class TurkeyAdapter implements IDuck
{
    public function __construct(public ITurkey $turkey)
    {
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    /**
     * Turkeys only fly short distances, so fly five times to keep up with a duck.
     */
    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
