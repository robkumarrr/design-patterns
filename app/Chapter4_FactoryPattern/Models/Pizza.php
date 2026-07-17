<?php

namespace App\Chapter4_FactoryPattern\Models;

abstract class Pizza
{
    public string $name;
    public string $dough;
    public string $sauce;
    public array $toppings;

    public function prepare(): void {
        echo "Preparing" . $this->name . "...";
    }
    public function bake(): void {
        echo "Baking" . $this->name . "...";
    }
    public function cut(): void {
        echo "Cutting" . $this->name . "...";
    }
    public function box(): void {
        echo "Boxing" . $this->name . "...";
    }
    public function getName(): string {
        return $this->name;
    }
}
