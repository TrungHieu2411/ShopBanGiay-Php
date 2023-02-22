<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "About - Shoe's Store";
        $viewData["about"] = About::all();
        return view('about.index')->with("viewData", $viewData);
    }
}
