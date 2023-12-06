<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendonorStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'jk' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
            'gol_darah' => 'required',
            'kode_p' => 'required',
            'password' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
