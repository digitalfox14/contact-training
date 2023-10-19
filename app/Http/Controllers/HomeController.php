<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Contact::get();

     return view('home', ['data' => $data]);
    }

    // public function dashboard(){
    //     return view('home');
    // }

    // public function create(){
    //     return view('pages.contact.form');
    // }

    public function store(Request $request)
    {
         Contact::create([
            'name' =>$request->name,
             'contact' =>$request->contact,
             'email' =>$request->email,
             'password' =>$request->password,
        ]);
        return redirect ('home');
    }
}
