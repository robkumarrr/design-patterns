<?php

namespace App\Chapter8_TemplatePattern\Controllers;

use App\Chapter8_TemplatePattern\Models\Coffee;
use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    public function index()
    {
        $coffee = new Coffee();
        $coffee->prepareRecipe();
    }
}
