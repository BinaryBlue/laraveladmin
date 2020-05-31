<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = ['pagehead'=>'Dashboard'];
        if(Auth::user()->roles[0]->name=='investor'){
            return view('amartaka.dashboard',$data);
        }
        else{
            $data['total_investor'] = User::role('investor')->count();
            return view('amartaka.admin.dashboard',$data);
        }
        
    }
}
