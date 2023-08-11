<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
    }

    // Initial controller
    public function index()
    {
        return view('clients/categories/list');
    }

    public function getCategory($id)
    {
        return view('clients/categories/edit');
    }

    public function showCategories()
    {
    }

    //Add - Get methods
    public function addCategory()
    {
        return view('clients/categories/add');
    }

    public function handleAddCategory(Request $request)
    {
        $allData = $request->input('category_name');
        dd($allData);
        // return redirect(route('categories.add'));
        // return "handle add category";
    }

    //Update categories
    public function updateCategory($id)
    {
        return view('clients/categories/edit');
    }

    public function deletedCategory($id)
    {
        return view('clients/categories/delete');
    }
}
