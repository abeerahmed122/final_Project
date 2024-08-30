<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // استرجع بيانات المستخدم لعرضها في لوحة التحكم
        return view('dashboard');
    }
}
