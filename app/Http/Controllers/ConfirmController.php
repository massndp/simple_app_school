<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            return redirect()->route('home');
        }else{
            return redirect()->route('login');
        }

        
    }
}
