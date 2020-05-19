<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
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
        $data = ['pagehead'=>'Enroll Patient'];
        return view('patient.create',$data);
    }

    public function all()
    {
        $data = ['pagehead'=>'Patients Database'];
        return view('patient.blank',$data);
    }

    public function single()
    {
        $data = ['pagehead'=>'Patient Profile'];
        return view('patient.blank',$data);
    }
}