<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // Memastikan hanya admin yang bisa mengakses controller ini
        $this->middleware('role:admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}
