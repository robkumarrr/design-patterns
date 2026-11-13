<?php

namespace App\Chapter8_TemplatePattern\Models;

abstract class CaffeineBeverage
{
    public final function prepareRecipe(): string
    {
        $response = $this->boilWater();
        $response .= $this->brew();
        $response .= $this->pourInCup();
        if ($this->customerWantsCondiments()) {
            $response .= $this->addCondiments();
        }

        return $response;
    }

    abstract function brew(): string;

    abstract function addCondiments(): string;

    function boilWater(): string
    {
        return 'Boiling water';
    }

    function pourInCup(): string
    {
        return 'Pouring your caffeinated beverage in a cup!';
    }

    function customerWantsCondiments(): bool {
        return true;
    }
}
