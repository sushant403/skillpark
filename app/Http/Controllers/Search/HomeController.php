<?php

namespace App\Http\Controllers\Search;

use App\Job;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Location;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searchLocations = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');
        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(7)
            ->get();

        return view('index', compact(['searchLocations', 'searchCategories', 'searchByCategory', 'jobs']));
    }

    public function search(Request $request)
    {
        $jobs = Job::with('company')
            ->searchResults()
            ->paginate(7);

        $banner = 'Search results';

        return view('jobs.index', compact(['jobs', 'banner']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
