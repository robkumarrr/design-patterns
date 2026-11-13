<?php

namespace App\Chapter8_TemplatePattern\Models;

use App\Chapter8_TemplatePattern\Models\CaffeineBeverage;

class Coffee extends CaffeineBeverage
{
    function brew(): string
    {
        return 'Brewing Coffee';
    }

    function addCondiments(): string
    {
        return 'Adding Sugar and Spice and Something Nice';
    }

    function customerWantsCondiments(): bool
    {
        return parent::customerWantsCondiments();
    }
}
