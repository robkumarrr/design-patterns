<?php

namespace App\Chapter3_DecoratorPattern\Models;

abstract class FormatDecorator extends Text
{
    public Text $textObject;

    public abstract function format(): string;

    public abstract function getText(): string;
}
