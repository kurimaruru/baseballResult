<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'image' => 'image|mimes:jpg,jpeg,png|max:2048',
            'position' => 'required|integer',
            'throw' => 'required|string|max:10',
            'hitting' => 'required|string|max:10',
        ];
    }
}
