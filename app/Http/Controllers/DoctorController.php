<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        #return view('home');
    }

    public function create()
    {
        $data = ['pagehead'=>'Enroll Doctor'];
        return view('doctor.blank',$data);
    }

    public function all()
    {
        $data = ['pagehead'=>'Doctors Database'];
        return view('doctor.blank',$data);
    }

    public function single()
    {
        $data = ['pagehead'=>'Doctors Profile'];
        return view('doctor.blank',$data);
    }
}