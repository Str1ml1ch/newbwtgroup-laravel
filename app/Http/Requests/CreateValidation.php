<?php

namespace ParsPogoda\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use ParsPogoda\User;
use Illuminate\Validation\Rule;

class CreateValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $useri = new User();
        return [
            'regname'=>'min:2|max:100',
            'regsur'=>'min:2|max:100',
            //'regmail'=>'min:2|max:100|email|unique:User',
            'Email' => Rule::unique('User')->ignore($useri->id, 'user_id'),
            'regpassword'=>'min:5|max:16'
        ];
    }
}
