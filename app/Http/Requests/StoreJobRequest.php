<?php

namespace App\Http\Requests;

use App\Job;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
{
    public function authorize()
    {
        $user = User::find(Auth::user()->id);
        return $user-> hasRole('client');
    }

    public function rules()
    {
        return [
            'title'         => [
                'required',
            ],
            'description'   => [
                'required',
            ],
            'budget'        => [
                'required',
            ],
            'delivery_time' => [
                'required',
            ],
            'categories.*' => [
                'integer',
            ],
            'categories'   => [
                'array',
            ],
        ];
    }
}
