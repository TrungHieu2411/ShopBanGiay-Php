<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Typepdt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTypeProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Type Product - Shoe's Store";
        $viewData["typepdts"] = Typepdt::all();
        return view('admin.typepdt.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
            "type" => "required|max:255",
        ]);
        $newTypepdt = new Typepdt();
        $newTypepdt->setType($request->input('type'));
        $newTypepdt->save();
        return back();
    }
    public function delete($id)
    {
        Typepdt::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Type Product - Shoe's Store";
        $viewData["typepdt"] = Typepdt::findOrFail($id);
        return view('admin.typepdt.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "type" => "required|max:255",
        ]);

        $typepdt = Typepdt::findOrFail($id);
        $typepdt->setType($request->input('type'));
        $typepdt->save();
        return redirect()->route('admin.typepdt.index');
    }
}
