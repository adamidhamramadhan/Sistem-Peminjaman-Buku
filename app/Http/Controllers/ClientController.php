<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        // Memastikan hanya klien yang bisa mengakses controller ini
        $this->middleware('role:client');
    }

    public function index()
    {
        return view('client.dashboard');
    }
}
