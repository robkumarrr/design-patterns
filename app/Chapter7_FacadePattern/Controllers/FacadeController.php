<?php

namespace App\Chapter7_FacadePattern\Controllers;

use App\Chapter7_FacadePattern\Facades\HomeTheaterFacade;
use App\Chapter7_FacadePattern\Models\Amplifier;
use App\Chapter7_FacadePattern\Models\PopcornPopper;
use App\Chapter7_FacadePattern\Models\Projector;
use App\Chapter7_FacadePattern\Models\Screen;
use App\Chapter7_FacadePattern\Models\StreamingPlayer;
use App\Chapter7_FacadePattern\Models\TheaterLights;
use App\Http\Controllers\Controller;

class FacadeController extends Controller
{
    public function index()
    {
        // The subsystem components still exist and can be used directly if needed,
        // the facade just gives the client a simpler way in.
        $homeTheater = new HomeTheaterFacade(
            new Amplifier(),
            new StreamingPlayer(),
            new Projector(),
            new Screen(),
            new TheaterLights(),
            new PopcornPopper(),
        );

        // Output buffering to capture the echo statements for our demonstration
        ob_start();

        // Client: two calls instead of a dozen, and it only knows about the facade.
        echo '<b>Movie night:</b><br>';
        $homeTheater->watchMovie('Raiders of the Lost Ark');

        echo '<br><b>Movie over:</b><br>';
        $homeTheater->endMovie();

        return response(ob_get_clean());
    }
}
