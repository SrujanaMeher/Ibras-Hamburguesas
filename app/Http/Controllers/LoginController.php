<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use App\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('login.create');
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
    }


//my custom function

        public function login(request $request)
    {
        // $request->validate([
        // 'u_name'=>'required|alpha_num',
        // 'u_password'=>'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        //  ]); 
        $unameZ=$request->input('u_name');
        //$output;
        $passwordZ=$request->input('u_password');
        $data=DB::select('select u_password from registers where u_name=?', [$unameZ,$passwordZ]);
$fetchedPwd;
        foreach ($data[0] as $key => $val) {
            echo "$key => $val \n";
$fetchedPwd = $val;
         }



        //if($this->$data[0]->cmppwd==$passwordZ)
         if($fetchedPwd == $passwordZ)
        {
          $request->session()->put('uname',$unameZ);
          $output=$request->session()->get('uname');
          if($request->session()->get('uname')=='vamc')
          {
            return redirect('/admin');
          }
          elseif($request->session()->get('uname')!='vamc'&&session()->has('uname'))
          {
            return redirect('/user');
          }
        }
        else
        {
            return redirect('/login')->with('error', 'invalid login');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
