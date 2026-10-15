<?php

namespace App\Chapter7_AdapterPattern\Controllers;

use App\Chapter7_AdapterPattern\Adapters\TurkeyAdapter;
use App\Chapter7_AdapterPattern\Interfaces\IDuck;
use App\Chapter7_AdapterPattern\Models\MallardDuck;
use App\Chapter7_AdapterPattern\Models\WildTurkey;
use App\Http\Controllers\Controller;

class AdapterController extends Controller
{
    public function index()
    {
        $mallardDuck = new MallardDuck();

        $wildTurkey = new WildTurkey();

        $turkeyAdapter = new TurkeyAdapter($wildTurkey);

        // Output buffering to capture the echo statements for our demonstration
        ob_start();

        echo '<b>The Turkey says:</b><br>';
        $wildTurkey->gobble();
        $wildTurkey->fly();

        echo '<br><b>The Duck says:</b><br>';
        $this->testDuck($mallardDuck);

        echo '<br><b>The TurkeyAdapter says:</b><br>';
        $this->testDuck($turkeyAdapter);

        return response(ob_get_clean());
    }

    /**
     * Client: only knows about IDuck, so it can't tell the adapter apart from a real duck.
     */
    protected function testDuck(IDuck $duck): void
    {
        $duck->quack();
        $duck->fly();
    }
}
