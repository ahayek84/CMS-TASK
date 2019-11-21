<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->user()->hasRole('student role')) {
            return redirect('/');
        }
        
         if ($request->user()->hasRole('employee role')) {
            return redirect('/');
        }
        
           if ($request->user()->hasRole('employer role')){
            return redirect('/admin/dashboard');
        }

        if ($request->user()->hasRole('admin role')) {
                return redirect('/admin/dashboard');
        }
    }
}
