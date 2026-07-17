<?php

namespace App\Chapter3_DecoratorPattern\Models;

abstract class Text
{
    private string $text;

    public abstract function getText(): string;
}
