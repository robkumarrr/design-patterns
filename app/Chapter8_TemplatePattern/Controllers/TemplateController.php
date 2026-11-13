<?php

namespace App\Chapter8_TemplatePattern\Controllers;

use App\Chapter8_TemplatePattern\Models\Coffee;
use App\Chapter8_TemplatePattern\Models\Tea;
use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    public function index()
    {
        $coffee = new Coffee();
        $tea = new Tea();

        $response = '<b>Making coffee...</b><br>';
        $response .= $coffee->prepareRecipe();

        $response .= '<br><b>Making tea...</b><br>';
        $response .= $tea->prepareRecipe();

        return response($response);
    }
}
