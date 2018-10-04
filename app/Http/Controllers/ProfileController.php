<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class ProfileController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Poišče id trenutnega uporabnika
        $id = Auth()->User()->id;
        //Poišče trenutnega uporabnika v bazi podatkov
        $user = User::find($id);
        //Vrne view 'profile' z variablo $user, ki ima shranjene podatke iz baze
        return view('profile')->with('user', $user);
    }

}
