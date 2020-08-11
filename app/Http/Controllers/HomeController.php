<?php

namespace App\Http\Controllers;

use App\City;
use App\Skill;
use App\Category;
use Illuminate\Http\Request;

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
        return view('index');
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
        return redirect()->route('home');
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
