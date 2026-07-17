<?php

namespace App\Chapter3_DecoratorPattern\Controllers;

use App\Chapter3_DecoratorPattern\Models\BoldDecorator;
use App\Chapter3_DecoratorPattern\Models\Sentence;
use Illuminate\Http\JsonResponse;

class DecoratorController
{
    public function index(): JsonResponse
    {
        $string = new Sentence("This is a test");
        $string = new BoldDecorator($string);

        return response()->json([
            'Formatted Text' => $string->format()
        ]);
    }
}
