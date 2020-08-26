<?php

namespace App\Http\Requests;

use App\User;
use App\Proposal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProposalRequest extends FormRequest
{
    public function authorize()
    {
        $user = User::find(Auth::user()->id);
        return $user-> hasRole('freelancer');
    }

    public function rules()
    {
        return [
            'proposal_text' => [
                'required',
            ],
        ];
    }
}
