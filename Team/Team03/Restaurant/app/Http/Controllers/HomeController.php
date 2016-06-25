<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('enduser.index');
    }

    public function about() {
        return view('enduser.about');
    }

    public function contact() {
        return view('enduser.contact');
    }
}
