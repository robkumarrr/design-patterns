<?php

namespace App\Chapter6_CommandPattern\Controllers;

use Illuminate\Routing\Controller;
use App\Chapter6_CommandPattern\Invokers\RemoteControl;
use App\Chapter6_CommandPattern\Receivers\Light;
use App\Chapter6_CommandPattern\Receivers\Stereo;
use App\Chapter6_CommandPattern\Commands\LightOnCommand;
use App\Chapter6_CommandPattern\Commands\LightOffCommand;
use App\Chapter6_CommandPattern\Commands\StereoOnWithCDCommand;
use App\Chapter6_CommandPattern\Commands\StereoOffCommand;

class RemoteController extends Controller
{
    public function index()
    {
        // 1. Create the Invoker (Remote)
        $remoteControl = new RemoteControl();

        // 2. Create the Receivers (Devices)
        $livingRoomLight = new Light("Living Room");
        $kitchenLight = new Light("Kitchen");
        $stereo = new Stereo("Living Room");

        // 3. Create the Commands
        $livingRoomLightOn = new LightOnCommand($livingRoomLight);
        $livingRoomLightOff = new LightOffCommand($livingRoomLight);

        $kitchenLightOn = new LightOnCommand($kitchenLight);
        $kitchenLightOff = new LightOffCommand($kitchenLight);

        $stereoOnWithCD = new StereoOnWithCDCommand($stereo);
        $stereoOff = new StereoOffCommand($stereo);

        // 4. Load the Invoker
        $remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
        $remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
        $remoteControl->setCommand(2, $stereoOnWithCD, $stereoOff);

        // Output buffering to capture the echo statements for our demonstration
        ob_start();

        echo "<h3>Remote Configuration:</h3>";
        echo $remoteControl;

        echo "<br><h3>Testing Buttons:</h3>";
        
        echo "<b>Pushing Slot 0 (Living Room Light ON):</b><br>";
        $remoteControl->onButtonWasPushed(0);
        
        echo "<br><b>Pushing Slot 0 (Living Room Light OFF):</b><br>";
        $remoteControl->offButtonWasPushed(0);
        
        echo "<br><b>Pushing UNDO:</b><br>";
        $remoteControl->undoButtonWasPushed();
        
        echo "<br><b>Pushing Slot 1 (Kitchen Light ON):</b><br>";
        $remoteControl->onButtonWasPushed(1);
        
        echo "<br><b>Pushing Slot 2 (Stereo ON with CD):</b><br>";
        $remoteControl->onButtonWasPushed(2);
        
        echo "<br><b>Pushing UNDO:</b><br>";
        $remoteControl->undoButtonWasPushed();

        echo "<br><b>Pushing Empty Slot (Slot 3 ON):</b><br>";
        $remoteControl->onButtonWasPushed(3); // Should use NoCommand

        $output = ob_get_clean();

        return response($output);
    }
}
