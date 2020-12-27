<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Table\User;
use Illuminate\Support\Facades\Log;

class UserRegisterRequest extends FormRequest
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
        $all = $this->validationData();//Array
        $all['tel'];

        $vali = [
            'user_id' => 'required|max:16|unique:user_tb,user_id',
            'password' => [
                'required',
                'between:8,32',  
                'regex:/^.*((?=.*[A-Za-z])(?=.*[0-9])|(?=.*[A-Za-z])(?=.*[!_@])|(?=.*[0-9])(?=.*[!_@])).*$/',
                'max:16', //email unique
            ],
            'sex' => 'required',
            'email' => [
                'required',
                'regex:/^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/',
                'unique:user_tb,email'
            ], //email unique
        ];
        if(!empty($all['tel'])){
            return  array_merge($vali,array('tel' => 'numeric|digits_between:8,11'));
        }

        return $vali;

    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'password.regex' => '半角英数字と記号(! _ @)をいずれか二種類以上をご使用ください',
        ];
    }
}
