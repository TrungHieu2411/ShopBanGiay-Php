<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Item - Shoe's Store";
        $viewData["subtitle"] = "List of Item";
        $viewData["item"] = Item::all();
        return view('item.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $item = Item::findOrFail($id);
        $viewData["title"] = $item->getQuantity() . " - Shoe's Store";
        $viewData["subtitle"] = $item->getQuantity() . " - Item information";
        $viewData["item"] = $item;
        return view('item.show')->with("viewData", $viewData);
    }
}
