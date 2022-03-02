<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'code'=>'required|unique:products',
            'quantity'=>'required|numeric|max:1000',
            'price'=>'required|numeric|digits:15',
            'description'=>'required|max:255',
            'status'=>'required',
            'image'=>'required|mimes:jpg,png'
        ];
    }
}
