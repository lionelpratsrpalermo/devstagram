<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // dd($request);
        // dd($request->get('username'));

        // Validacion
        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed'
        ]);
        /* $validated = $request->validate([
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed'
        ]); */
    }
}
