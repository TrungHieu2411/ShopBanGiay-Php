<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Typepdt;

class TypeProductController extends Controller
{
    // public static $products = [
    //     ["id" => "1", "name" => "TV", "description" => "Best TV", "image" => "game.png", "price" => "1000"],
    //     ["id" => "2", "name" => "iPhone", "description" => "Best iPhone", "image" => "safe.png", "price" => "999"],
    //     ["id" => "3", "name" => "Chromecast", "description" => "Best Chromecast", "image" => "submarine.png", "price" => "30"],
    //     ["id" => "4", "name" => "Glasses", "description" => "Best Glasses", "image" => "game.png", "price" => "100"],
    //     ["id" => "5", "name" => "Casino", "description" => "Best Glasses", "image" => "game.png", "price" => "100"],
    //     ["id" => "7", "name" => "Chirstmart", "description" => "Best Glasses", "image" => "game.png", "price" => "100"],
    //     ["id" => "8", "name" => "Chirstmart", "description" => "Best Glasses", "image" => "game.png", "price" => "100"],
    //     ["id" => "8", "name" => "Chirstmart", "description" => "Best Glasses", "image" => "game.png", "price" => "100"]
    // ];


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
