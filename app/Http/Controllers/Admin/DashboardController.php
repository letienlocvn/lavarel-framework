<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Bên trong dashboard controller, chúng ta đều phải xử lý

    public function __construct()
    {
        echo "Khởi động dashboard";
    }

    public function index()
    {
        return "Dashboard Admin";
    }
}
