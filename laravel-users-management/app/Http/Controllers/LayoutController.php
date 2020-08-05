<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function showDashBoard(){
        return view('layout.dashboard');
    }
}
