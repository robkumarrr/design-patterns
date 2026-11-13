<?php

namespace App\Chapter8_TemplatePattern\Models;

use App\Chapter8_TemplatePattern\Models\CaffeineBeverage;

class Tea extends CaffeineBeverage
{
    function brew(): string
    {
        return 'Steeping Tea';
    }

    function addCondiments(): string
    {
        return 'Steeping Lemon Slice';
    }

    function customerWantsCondiments(): bool
    {
        return parent::customerWantsCondiments();
    }
}
