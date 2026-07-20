<?php

namespace App\Chapter5_SingletonPattern\Controllers;

use App\Chapter5_SingletonPattern\Services\IMusicService;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class SingletonController extends Controller
{
    public function index(IMusicService $musicService): JsonResponse {

        $testText = $musicService->getServiceName();

        return response()->json([
            "test" => $testText
        ]);
    }
}
