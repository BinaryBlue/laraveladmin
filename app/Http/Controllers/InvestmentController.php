<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        $data = ['pagehead'=>'Purchase Share'];
        return view('amartaka.blank',$data);
    }

    public function active()
    {
        $data = ['pagehead'=>'Active Investments'];
        return view('amartaka.blank',$data);
    }
}
