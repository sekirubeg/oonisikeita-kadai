<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            //
            'first_name'      => 'required|string|max:255', // 姓
            'last_name'       => 'required|string|max:255', // 名
            'gender'          => 'required|in:男性,女性,その他', // 性別（選択）
            'email'           => 'required|email', // メール形式
            'tel1'            => 'required|digits:3', // 電話番号（最初の3桁）
            'tel2'            => 'required|digits:4', // 電話番号（中間4桁）
            'tel3'            => 'required|digits:4', // 電話番号（最後の4桁）
            'address'         => 'required|string|max:255', // 住所
            'category_id'     => 'required|integer', // お問い合わせの種類（選択）
            'detail'          => 'required|string|max:120', // お問い合わせ内容（120文字以内）
        ];
    }
    public function messages()
    {
        return [
            'first_name.required'   => '姓を入力してください',
            'last_name.required'    => '名を入力してください',
            'gender.required'       => '性別を選択してください',
            'gender.in'             => '性別を選択してください',
            'email.required'        => 'メールアドレスを入力してください',
            'email.email'           => 'メールアドレスはメール形式で入力してください',
            'tel1.required'         => '電話番号を入力してください',
            'tel1.digits'           => '電話番号は5桁までの数字で入力してください',
            'tel2.required'         => '電話番号を入力してください',
            'tel2.digits'           => '電話番号は5桁までの数字で入力してください',
            'tel3.required'         => '電話番号を入力してください',
            'tel3.digits'           => '電話番号は5桁までの数字で入力してください',
            'address.required'      => '住所を入力してください',
            'category_id.required'  => 'お問い合わせの種類を選択してください',
            'detail.required'       => 'お問い合わせ内容を入力してください',
            'detail.max'            => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}

