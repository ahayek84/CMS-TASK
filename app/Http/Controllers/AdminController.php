<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        {
            if (request()->user()->hasRole('admin role')) {
                return view('admin.dashboard');
            }

            if (request()->user()->hasRole('employer role')) {
                return view('admin.dashboard');
            }

            if (request()->user()->hasRole('student role')) {
                return redirect('/home');
            }

            if (request()->user()->hasRole('employee role')) {
                return redirect('/home');
            }
        }
    }
}