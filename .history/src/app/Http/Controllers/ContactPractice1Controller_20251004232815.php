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
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building',
        'inquiry_type', 'content']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building',
        'inquiry_type', '']);
        ContactPractice1::create($contact);
        return view('thanks');
    }
}
