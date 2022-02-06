<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'name' => ['required','max:30'],
            'back_number' => ['required'],
            'position' => ['required'],
            'dominant' => ['max:10'],
            'role' => ['max:20']
        ];
    }

    public function attributes()
    {
        return[
            'name' => '名前',
            'back_number' => '背番号',
            'position' => 'ポジション',
            'dominant' => '利き手',
            'role' => '役割'
        ];

    }
}
