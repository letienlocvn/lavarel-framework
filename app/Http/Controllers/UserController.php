<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showProfile()
    {
        $url = route('profile'); // Tạo URL dựa trên tên tuyến
        $user = auth()->user(); // Lấy thông tin người dùng hiện tại (đây là ví dụ, bạn cần cung cấp cách lấy thông tin người dùng của bạn)

        return view('user.profile', ['url' => $url, 'user' => $user]);
    }
}
