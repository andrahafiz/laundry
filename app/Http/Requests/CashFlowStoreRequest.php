<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CashFlowStoreRequest extends FormRequest
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
            'no_akun' => ['required', 'string'],
            'tanggal' => ['required', 'date'],
            'keterangan' => ['required', 'string'],
            'jumlah' => ['required', 'numeric'],
            'jenis' => ['required', 'in:1,2']
        ];
    }
}
