<?php

namespace App\Http\Controllers;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        {
            if (request()->user()->hasRole('admin role')) {
                return view('employer.dashboard');
            }
            if (request()->user()->hasRole('user role')) {
                return redirect('/home');
            }
        }
    }
}