<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Typepdt;

class TypeProductController extends Controller
{


    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Type Product - Shoe's Store";
        $viewData["subtitle"] = "List of type products";
        $viewData["typepdts"] = Typepdt::all();
        // $viewData["products"] = ProductController::$products;
        return view('typepdt.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        // $product = ProductController::$products[$id - 1];
        $typepdt = Typepdt::findOrFail($id);
        $viewData["title"] = $typepdt->getType() . " - Shoe's Store";
        $viewData["subtitle"] = $typepdt->getType() . " - Type Product information";
        $viewData["typepdt"] = $typepdt;
        return view('typepdt.show')->with("viewData", $viewData);
    }
}
