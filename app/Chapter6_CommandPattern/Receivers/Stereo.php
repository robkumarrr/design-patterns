<?php

namespace App\Chapter6_CommandPattern\Receivers;

class Stereo
{
    protected string $location;

    public function __construct(string $location = '')
    {
        $this->location = $location;
    }

    public function on(): void
    {
        echo $this->location . " Stereo is ON<br>";
    }

    public function off(): void
    {
        echo $this->location . " Stereo is OFF<br>";
    }

    public function setCD(): void
    {
        echo $this->location . " Stereo is set for CD input<br>";
    }

    public function setVolume(int $volume): void
    {
        echo $this->location . " Stereo volume set to " . $volume . "<br>";
    }
}
