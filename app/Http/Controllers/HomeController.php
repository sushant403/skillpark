<?php

namespace App\Http\Controllers;

use App\City;
use App\User;
use App\Skill;
use App\Category;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        if (!auth()->check()) {
            return view('index');
        } else {
            $user = Auth::user();

            if ($user->hasAnyRole(['freelancer', 'client'])) {

                if ($user->hasRole('freelancer')) {
                    return redirect()->route('freelancer');
                }
                return redirect()->route('client');
            } else {
                return redirect()->route('addprofile');
            }
        }
    }

    public function freelancer()
    {
        $cities = City::all();
        $categories = Category::all();
        $skills = Skill::all();
        return view('freelancers.home', compact(['cities', 'categories', 'skills']));
    }

    public function freelancerSearch()
    {
        return redirect()->route('freelancer');
    }

    public function client()
    {
        $cities = City::all();
        $categories = Category::all();
        $skills = Skill::all();
        return view('clients.home', compact(['cities', 'categories', 'skills']));
    }

    public function clientSearch()
    {
        return redirect()->route('client');
    }
}
