<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHotelRequest extends FormRequest
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
            'group' => 'required',
            'name' => 'required',
            'sex' => 'required',
            'phone' => 'required',
            'cccd' => 'required',
            'email' => 'required',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'group.required' => 'Nhóm nhân viên không được để trống',
            'name.required' => 'Trường name không được để trống',
            'sex.required' => 'Trường sex không  được để trống',
            'phone.required' => 'Trường phone không được để trống',
            'cccd.required' => 'Trường cccd không được để trống',
            'email.required' => 'Trường email không được để trống',
            'address.required' => 'Trường address không được để trống',
        ];
    }
}
