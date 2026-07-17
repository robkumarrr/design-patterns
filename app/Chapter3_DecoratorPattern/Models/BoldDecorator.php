<?php

namespace App\Chapter3_DecoratorPattern\Models;

class BoldDecorator extends FormatDecorator
{
    public function __construct(Text $textObject) {
        $this->textObject = $textObject;
    }

    public function format(): string {
        // Bold the text here
        return "<b>{$this->textObject->getText()}</b>";
    }

    public function getText(): string {
        return $this->format();
    }
}
