<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Table\Shop;
use Illuminate\Support\Facades\Log;



class ShopRegisterRequest extends FormRequest
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

        $vali = [
            'shop_id' => 'required|max:16|unique:shop_tb,shop_id',
            'password' => [
                'required',
                'between:8,32',  
                'regex:/^.*((?=.*[A-Za-z])(?=.*[0-9])|(?=.*[A-Za-z])(?=.*[!_@])|(?=.*[0-9])(?=.*[!_@])).*$/',
                'max:16', //email unique
            ],
            'shop_email' => [
                'required',
                'regex:/^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/',
                'unique:shop_tb,shop_email'
            ], //email unique
            'shop_name' =>[
                'required'
            ],
            'shop_address' =>[
                'required'
            ],
            'shop_seat' =>[
                'required',
                'numeric'
            ],

        ];

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
