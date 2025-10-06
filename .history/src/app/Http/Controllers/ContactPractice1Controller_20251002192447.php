<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Contact

class ContactPractice1Controller extends Controller
{
    public function contact()
    {
        return view('contact');
    }
}
