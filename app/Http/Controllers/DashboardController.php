<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
// use App\Models\Apps;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {

    }
    
    public function index()
    {
        return view('portal.dashboard.index');
    }
}