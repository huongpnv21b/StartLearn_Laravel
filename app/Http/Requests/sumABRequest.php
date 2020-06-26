<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sumABRequest extends FormRequest
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
    { //khai bao cac rule rang buoc
        return [
            'soa'=>'required|numeric',
            'sob'=>'required|numeric'
            //
        ];
    }

    public function messages(){
        return [
            'soa.numeric' => ' A phai la so', 
            'soa.required' => 'Vui long nhap so A ',
            'sob.required' => 'Vui long nhap so B ',
            'sob.numeric' => 'B phai la so',
        ];
    }
}

