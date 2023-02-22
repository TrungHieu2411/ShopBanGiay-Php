<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminAboutController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - About - Shoe's Store";
        $viewData["abouts"] = About::all();
        return view('admin.about.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
        ]);
        $newAbout = new About();
        $newAbout->setName($request->input('name'));
        $newAbout->setMainDescription($request->input('maindes'));
        $newAbout->setRatio1($request->input('ratio1'));
        $newAbout->setRatio2($request->input('ratio2'));
        $newAbout->setDescription($request->input('description'));
        $newAbout->save();
        return back();
    }
    public function delete($id)
    {
        About::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit About Product - Shoe's Store";
        $viewData["about"] = About::findOrFail($id);
        return view('admin.about.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required|max:255",
        ]);

        $about = About::findOrFail($id);
        $about->setName($request->input('name'));
        $about->setMainDescription($request->input('maindes'));
        $about->setRatio1($request->input('ratio1'));
        $about->setRatio2($request->input('ratio2'));
        $about->setDescription($request->input('description'));
        $about->save();
        return redirect()->route('admin.about.index');
    }
}
