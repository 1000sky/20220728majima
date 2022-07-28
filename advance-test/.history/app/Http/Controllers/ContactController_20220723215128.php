<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class ContactController extends Controller
{
    public function post(ClientRequest $request)
    {
        return view('contact');
    }
}
