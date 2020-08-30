<?php

namespace App\Http\Controllers\Auth;

use App\City;
use App\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $topics = Topic::all();

        $user = Auth::user();
        
        if ($user->hasAnyRole(['freelancer', 'client'])) {
            
            if($user->hasRole('freelancer')){
                return redirect()-> route('freelancer');
            }
                return redirect()->route('client');
        }
        else{
            return view('auth.register-info', compact('cities','topics'));
        } 
    }

    public function addProfile(Request $request)
    {
        
        auth()->user()->update($request->only(['about', 'city_id', 'tagline']));

        $user = \App\User::find(Auth::user()->id);
        $role = $request['role'];

        $user->syncRoles($role);

        if($user->hasRole('freelancer')){
            return redirect()-> route('freelancer');
        }
            return redirect()-> route('client');
    }
}
