<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class RegistrationController extends Controller
{
    public function index()
    {
      $registrations = Registration::all();

      return view('admin.index', compact('registrations'));
    }


    public function show(Registration $registration)
    {
      return view('registrations.show', compact('registration'));
    }


    public function create()
    {
      return view('create');
    }

    public function store()
    {
      $this->validate(request(), [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|unique:registrations,email'
      ]);

      $registration = new Registration;

      $registration->first_name = request('first_name');
      $registration->last_name = request('last_name');
      $registration->email = request('email');


      $registration->save();

      return redirect ('/')->with(['message' => 'Jūs sėkmingai užsiregistravote']);
    }

    public function edit()
    {
      return view('edit');
    }


}
