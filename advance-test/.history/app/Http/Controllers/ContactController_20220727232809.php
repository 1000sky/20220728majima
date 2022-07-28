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
    
    public function contact()
    {
        $items = Contact::all();
        return view('contact', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Contact::$rules $messages();
        $form = $request->all();
        Contact::create($form);   
        return redirect('/create');
    }

    
    //confirmation
    public function confirmation()
    {
        $items = Contact::all();
        return view('confirmation', ['items' => $items]);
    }
    
    //management
    public function management()
    {
        $items = Contact::all();
        return view('management', ['items' => $items]);
    }
    public function search(Request $request)
    {
        $item = Contact::where('name','gender','created_at','LIKE BINARY',"%{$request->input}%")->get();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('management', $param);
    }

    public function page()
    {
        $items = Contact::Paginate(10);
        return view('management', ['items' => $items]);
    }

}
    


