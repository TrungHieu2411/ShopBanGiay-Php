<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Order - Shoe's Store";
        $viewData["subtitle"] = "List of Order";
        $viewData["order"] = Order::all();
        return view('order.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $order = Order::findOrFail($id);
        $viewData["title"] = $order->getTotal() . " - Shoe's Store";
        $viewData["subtitle"] = $order->getTotal() . " - Order information";
        $viewData["order"] = $order;
        return view('order.show')->with("viewData", $viewData);
    }
}
