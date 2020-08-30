<?php

namespace App\Http\Controllers;

use App\Job;
use App\City;
use App\User;
use App\Topic;
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
        $topics = Topic::all();
        $user = User::find(Auth::user()->id);

        if ($user->hasRole('client')) {
            $jobs = Job::with('proposals')->where('employer_id', auth()->id())->get();
        } else {
            $jobs = Job::whereNull('candidate_id')->get();
        }
        return view('freelancers.home', compact(['cities', 'categories', 'topics','jobs']));
    }

    public function freelancerSearch()
    {
        return redirect()->route('freelancer');
    }

    //=======client=========
    
    public function client()
    {
        $cities = City::all();
        $categories = Category::all();
        $topics = Topic::all();
        return view('clients.home', compact(['cities', 'categories', 'topics']));
    }

    public function clientSearch()
    {
        return redirect()->route('client');
    }
}
