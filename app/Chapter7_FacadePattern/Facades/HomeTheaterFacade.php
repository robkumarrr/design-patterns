<?php

namespace App\Chapter7_FacadePattern\Facades;

use App\Chapter7_FacadePattern\Models\Amplifier;
use App\Chapter7_FacadePattern\Models\PopcornPopper;
use App\Chapter7_FacadePattern\Models\Projector;
use App\Chapter7_FacadePattern\Models\Screen;
use App\Chapter7_FacadePattern\Models\StreamingPlayer;
use App\Chapter7_FacadePattern\Models\TheaterLights;

/**
 * Facade: one simple interface over the whole home theater subsystem.
 *
 * Not to be confused with Laravel's Illuminate\Support\Facades, which are
 * static proxies to objects in the service container, not the GoF Facade.
 */
class HomeTheaterFacade
{
    public function __construct(
        protected Amplifier $amp,
        protected StreamingPlayer $player,
        protected Projector $projector,
        protected Screen $screen,
        protected TheaterLights $lights,
        protected PopcornPopper $popper,
    ) {
    }

    public function watchMovie(string $movie): void
    {
        echo "<i>Get ready to watch a movie...</i><br>";
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setStreamingPlayer($this->player);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->player->on();
        $this->player->play($movie);
    }

    public function endMovie(): void
    {
        echo "<i>Shutting movie theater down...</i><br>";
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->player->stop();
        $this->player->off();
    }
}
