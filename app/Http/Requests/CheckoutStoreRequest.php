<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'totalPrice' => ['required', 'integer'],
            'inp_uang' => ['required', 'gte:totalPrice']
        ];
    }

    public function messages()
    {
        return [
            'totalPrice.required' => 'Terdapat kesalahan pada total harga',
            'totalPrice.integer' => 'Terdapat kesalahan pada total harga ( harus angka )',
            'inp_uang.required' => 'Inputan uang dari pelanggan harus diisi',
            'inp_uang.gte' => 'Uang tidak cukup',
        ];
    }
}
