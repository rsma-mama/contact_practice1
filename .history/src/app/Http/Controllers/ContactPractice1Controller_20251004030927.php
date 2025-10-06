<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactPractice1Request;
use App\Models\ContactPractice1;

class ContactPractice1Controller extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last' 'gender', 'email', 'tel', 'address', 'building', 'content']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'building', 'content']);
        ContactPractice1::create($contact);
        return view('thanks');
    }
}
