<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangKiRequest extends FormRequest
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
            'name'=>'required',
            'age'=>'required|numeric',
            'phone'=>'required|numeric',
            'web'=>'required|active_url',
            'address'=>'required',
            'mail'=>'required'
            //
        ];
    }
    function messages(){
        return [
            'name.required' => ' Khong duoc de trong name',
            'age.required' => ' Khong duoc de trong age',
            'age.numeric' => ' age phai la so',
            'phone.required' => ' Khong duoc de trong phone',
            'phone.numeric' => ' Phone phai la so',
            'web.required' => ' Khong duoc de trong web',
            'web.active_url' => ' phai co http',
            'address.required' => ' Khong duoc de trong address',
            'mail.required' => ' Khong duoc de trong mail',
        ];}
}
