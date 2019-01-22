<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrochureController extends Controller
{
    public function about()
    {
        return view('brochure.about');
    }

    public function contact()
    {
        return view('brochure.contact');
    }

    public function tenants()
    {
        return view('brochure.tenants');
    }

    public function landlords()
    {
        return view('brochure.landlords');
    }

    public function realtors()
    {
        return view('brochure.realtors');
    }



    
}
