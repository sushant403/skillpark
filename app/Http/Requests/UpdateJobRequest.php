<?php

namespace App\Http\Requests;

use App\Job;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateJobRequest extends FormRequest
{
    public function authorize()
    {
        $user = User::find(Auth::user()->id);
        return $user-> hasRole('client');
    }

    public function rules()
    {
        return [
        ];
    }
}
