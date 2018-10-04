<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        //Poišče vse uporabnike v bazi podatkov
        $users = User::all();
        //Vrne view 'profile' z variablo $user, ki ima shranjene podatke iz baze
        return view('user')->with('users', $users);
    }
    /*public function show($id)
    {
        $user = User::find($id);
        return view('user.showuser')->with('user', $user);
    }
    */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.showuser')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edituser')->with('user', $user);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'lastname'=>'required',
            'email'=>'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->save();
        
        return view('user.showuser')->with('user',$user->id);
    }

}
