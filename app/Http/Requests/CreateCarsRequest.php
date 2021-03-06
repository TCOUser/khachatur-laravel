<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarsRequest extends FormRequest
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
            'brand'=> 'required|min:3|max:64',
            'color'=> 'required|min:3|max:64',
            'price' => 'required|min:2|max:900000|numeric',
            'category_id' => 'required',
            'img' => 'file|mimes:jpg,png|max:2048'
        ];
    }
}
