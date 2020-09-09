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
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(4)
            ->pluck('name', 'id');

        if (!auth()->check()) {
            return view('index', compact(['searchCategories', 'searchByCategory']));
        } else {
            $user = User::find(Auth::user()->id);

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
        $pagination = 10;
        $jobs = Job::whereNull('candidate_id')->get();
        $countJobs = count($jobs);

        if (request()->sort == 'oldest') {
            $jobs = Job::whereNull('candidate_id')->with('categories')->orderBy('created_at')->simplePaginate($pagination);
        } else {
            $jobs = Job::whereNull('candidate_id')->with('categories')->orderBy('created_at', 'desc')->simplePaginate($pagination);
        }

        return view('freelancers.home')->with([
            'jobs' => $jobs,
            'countJobs' => $countJobs
        ]);
    }

    //=======client=========

    public function client()
    {
        $cities = City::all();
        $categories = Category::all();
        $topics = Topic::all();
        return view('clients.home', compact(['cities', 'categories', 'topics']));
    }
}
