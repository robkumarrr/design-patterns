<?php

namespace App\Chapter4_FactoryPattern\Models;

abstract class Pizza
{
    function prepare()
    {
        echo 'Preparing Pizza';
    }

    function bake()
    {
        echo 'Baking Pizza';
    }

    function cut()
    {
        echo 'Cutting Pizza';
    }

    function box()
    {
        echo 'Boxing Pizza';
    }
}
