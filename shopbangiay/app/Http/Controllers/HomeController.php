<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Shoe's Store";
        return view('home.index')->with("viewData", $viewData);
    }


    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Shoe' Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "Shoe's Store - GIÀY THỂ THAO THỜI TRANG GIÁ TỐT";
        $viewData["author"] = "Developed by: Group 4";
        return view('home.about')->with("viewData", $viewData);
    }
}
