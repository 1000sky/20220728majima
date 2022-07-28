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
    
    public function confirmation()
    {
        $items = Contact::all();
        return view('confirmation', ['items' => $items]);
    }
    
    public function management()
    {
        $items = Contact::all();
        return view('management', ['items' => $items]);
    }
    public function search(Request $request)
    {
        $item = Contact::where('name , gender' $request->input)->get();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('management', $param);
    }

}
    


