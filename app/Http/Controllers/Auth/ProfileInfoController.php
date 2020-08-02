<?php

namespace App\Http\Controllers\Auth;

use App\City;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class ProfileInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'auth',
            'verified',
        ]);
    }

    public function showProfile()
    {
        $cities = City::all();
        return view('auth.register-info', compact('cities')); 
    }


    public function addProfile(Request $request)
    {
        
        auth()->user()->update($request->only(['about', 'city_id', 'tagline']));

        $user = \App\User::find(Auth::user()->id);
        $role = $request['role'];

        $user->syncRoles($role);

        if($user->hasRole('client')){
            return redirect()-> route('client');
        }
            return redirect()-> route('home');
    }
}
