<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{


    public function index()
    {
        $viewData = [];
        $viewData["title"] = "User - Shoe's Store";
        $viewData["subtitle"] = "List of user";
        $viewData["user"] = User::all();
        return view('user.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $user = User::findOrFail("$id");
        // $user = UserController::$user[$id - 1];
        $viewData["title"] = $user->getName() . " - Shoe's Store";
        $viewData["subtitle"] = $user->getName() . " - User information";
        $viewData["user"] = $user;
        return view('user.show')->with("viewData", $viewData);
    }
}
