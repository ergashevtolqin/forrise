<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        // $first = Test::first();

        return view('welcome',[
            // 'first' => $first
        ]);

    }
}
