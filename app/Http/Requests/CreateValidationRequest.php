<?php

namespace ParsPogoda\Http\Requests;

use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;

class CreateValidationRequest extends FormRequest
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
        return [
            'sendname'=>'min:2|max:100',
            'sendsur'=>'min:2|max:100',
            'sendmail'=>'min:2|max:100|email',
            'feedb'=>'min:10|max:150'
        ];
    }
}
