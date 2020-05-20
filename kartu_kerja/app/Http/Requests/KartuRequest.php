<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KartuRequest extends FormRequest
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
            'no_ktp' => 'required|size:10|unique:kartus',
            'nama' => 'required',
            'alamat' => 'required',
            'nama_ortu' => 'required',
            'nominal' => 'required',
            'program' => 'required',
            'foto' => 'required|file|image|max:1000'
        ];
    }
}
