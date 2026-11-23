<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
       function index()
    {
        $pageTitle = 'Home';
        return view('home', ['pageTitle' => $pageTitle]);
    }
}

