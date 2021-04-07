<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => ['required', 'email', 'exists:users,email', 'ends_with:@gmail.com'],
            'password' => ['required', 'between:6,32']
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email không được bỏ trống!',
            'email.email' => 'Email không đúng định dạng!',
            'email.exists' => 'Email không tồn tại!',
            'email.ends_with' => 'Email không đúng định dạng!',
            'password.required' => 'Mật khẩu không được bỏ trống!',
            'password.between' => 'Mật khẩu phải có độ dài từ 6 đến 32 ký tự!',
        ];
    }
}
