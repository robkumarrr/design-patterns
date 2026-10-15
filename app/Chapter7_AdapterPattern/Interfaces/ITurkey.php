<?php

namespace App\Chapter7_AdapterPattern\Interfaces;

/**
 * Adaptee: an existing interface that doesn't match IDuck.
 */
interface ITurkey
{
    public function gobble(): void;

    public function fly(): void;
}
