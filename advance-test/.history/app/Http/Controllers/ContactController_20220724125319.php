<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact');
    }

    public function post(ClientRequest $request)
    {
        return view('contact');
    }
}
