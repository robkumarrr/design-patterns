<?php

namespace App\Chapter4_FactoryPattern\Models;

abstract class Pizza
{
    public string $name;
    public string $dough;
    public string $sauce;
    public array $toppings;

    public function prepare(): void {
        echo "<br>Preparing " . $this->name . "...<br>";
    }
    public function bake(): void {
        echo "Baking " . $this->name . "...<br>";
    }
    public function cut(): void {
        echo "Cutting " . $this->name . "...<br>";
    }
    public function box(): void {
        echo "Boxing " . $this->name . "...<br>";
    }
    public function getName(): string {
        return $this->name;
    }
}
