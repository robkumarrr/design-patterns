<?php

namespace App\Chapter7_FacadePattern\Models;

/**
 * Subsystem component: the facade drives this, the client never touches it directly.
 */
class Amplifier
{
    public function on(): void
    {
        echo "Amplifier on<br>";
    }

    public function setStreamingPlayer(StreamingPlayer $player): void
    {
        echo "Amplifier setting input to {$player->name}<br>";
    }

    public function setSurroundSound(): void
    {
        echo "Amplifier surround sound on (5 speakers, 1 subwoofer)<br>";
    }

    public function setVolume(int $level): void
    {
        echo "Amplifier setting volume to {$level}<br>";
    }

    public function off(): void
    {
        echo "Amplifier off<br>";
    }
}
