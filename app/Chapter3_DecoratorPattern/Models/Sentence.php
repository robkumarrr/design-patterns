<?php

namespace App\Chapter3_DecoratorPattern\Models;

 class Sentence extends Text
{

    public function __construct(private string $text) {
    }

    public function getText() : string {
        return $this->text;
    }
}
