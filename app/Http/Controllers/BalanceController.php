<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('amartaka.dashboard');
    }

    public function add()
    {
        $data = ['pagehead'=>'Add Balance'];
        //return view('amartaka.balance.create',$data);
        return view('amartaka.blank',$data);
    }

    public function withdraw()
    {
        $data = ['pagehead'=>'Request for Balance Withdraw'];
        return view('amartaka.blank',$data);
    }

    public function balance_history()
    {
        $data = ['pagehead'=>'History of Add Balance'];
        return view('amartaka.blank',$data);
    }

    public function withdraw_history()
    {
        $data = ['pagehead'=>'History of Withdraw Balance'];
        return view('amartaka.blank',$data);
    }
}
