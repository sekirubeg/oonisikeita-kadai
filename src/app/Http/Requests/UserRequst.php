<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'      => 'required|string|', // 姓
            'email'           => 'required|email', // メール形式
            'password'          => 'required|string|' // お問い合わせ内容（120文字以内）
        ];
    }
    public function messages()
    {
        return [
            'name.required'   => '姓を入力してください',
            'email.required'        => 'メールアドレスを入力してください',
            'email.email'           => 'メールアドレスは「ユーザ名＠ドメイン」形式で入力してください',
            'password'            => 'パスワードを入力してください'
        ];
    }
}
