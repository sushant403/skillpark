<?php

namespace App\Http\Controllers;

use App\City;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

class ProfileDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'auth',
            'verified',
        ]);
    }

    public function freelancerProfileDetails()
    {
        $cities = City::all();
        return view('freelancers.freelancerdetails', compact('cities'));
    }

    public function addfreelancerProfileDetails()
    {
        $cities = City::all();
        return view('freelancers.freelancerdetails', compact('cities'));
    }

    //clients below

    public function clientProfileDetails()
    {
        $cities = City::all();
        return view('clients.home', compact('cities'));
    }

    public function addclientProfileDetails()
    {
        $cities = City::all();
        return view('clients.clientdetails', compact('cities'));
        return view('clients.home', compact('cities'));
    }
}
