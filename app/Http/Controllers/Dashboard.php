<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Dashboard extends Controller
{
    public function index()
    {
    	 return view('Dashboard');
    }

    public function Tenants()
    {

    }

    public function Properties()
    {
    	
    }
}
