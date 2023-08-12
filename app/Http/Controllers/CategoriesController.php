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
    public function index(Request $request)
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
        // $allData = $request->input('category_name');
        // dd($allData);

        // $path = $request->path();
        // echo $path;
        // Output: categories/add

        // $url = $request->url();
        // echo 'URL method: ' . $url;
        // Output: URL method: http://127.0.0.1:8000/categories/add


        // $fullPath = $request->fullUrl();
        // echo $fullPath;
        // Output: http://127.0.0.1:8000/categories/add

        // $ip = $request->ip();
        // echo $ip;
        // Output: 127.0.0.1

        $server = $request->server();
        dd($server);

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
