<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $type = '';

        if(auth()->user()->hasRole('realtor')) {
            $type = 'realtor';
        }

        if(auth()->user()->hasRole('landlord')) {
            $type = 'landlord';
        }

        if(auth()->user()->hasRole('tenant')) {
            $type = 'tenant';
        }


        return view('home', compact('type'));
    }
}
