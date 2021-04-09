<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //'u_name', 'u_email', 'u_password', 'u_address', 'u_role'
//echo $request;


$validatedData = $request->validate([
            'u_name' => 'required',
            'u_email' => 'required',
            'u_password' => 'required',
            'u_address' => 'required'
        ]);
$validatedData['user'] = 'user';
        $show = Register::create($validatedData);

        // $request->validate([
        //     'u_name' => 'required',
        //     'u_email' => 'required',
        //     'u_password' => 'required',
        //     'u_address' => 'required'
        // ]);
  
        // Register::create($request->all());
   
        return redirect('/register')->with('success','User registered successfully.');

               // return redirect('/register')->with('success', 'user Case is successfully saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
