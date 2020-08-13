<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function freelancerDashboard()
    {
        return view('freelancers.dashboard');
    }

    public function clientDashboard()
    {
        return view('clients.dashboard');
    }

    public function editProfile()
    {
        $cities = City::all();
        return view('userprofile.editprofile.personal', compact('cities'));
    }

    public function task()
    {
        return view('services.task');
    }

    public function auth()
    {
        return view('userprofile.editprofile.auth');
    }

    public function serviceList()
    {
        return view('services.service-list');
    }

    public function serviceSingle()
    {
        return view('services.service-single');
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
