<?php

namespace App\Chapter7_AdapterPattern\Interfaces;

/**
 * Target: the interface the client expects.
 */
interface IDuck
{
    public function quack(): void;

    public function fly(): void;
}
