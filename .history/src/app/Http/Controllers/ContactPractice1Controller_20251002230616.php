<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactPractice1Request;

class ContactPractice1Controller extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function confirm()
}
