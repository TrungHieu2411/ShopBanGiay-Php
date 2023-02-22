<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
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
        $viewData["title"] = "Products - Shoe's Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        // $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        // $product = ProductController::$products[$id - 1];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName() . " - Shoe's Store";
        $viewData["subtitle"] = $product->getName() . " - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
