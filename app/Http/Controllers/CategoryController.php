<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('add_category');

        # code...
    }
    public function data(Request $request)
    {

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return back();
        # code...
    }

    //
}
