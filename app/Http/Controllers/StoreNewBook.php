<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException; 

class StoreNewBook extends FormRequest
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
            'isbn' => 'required|max:50',
            'judul' => 'required',
            'author' => 'required',
            'tahun' => 'numeric',

        ];
    }
    public function messages()
    {
        return [
            'isbn.required' => 'ISBN wajib diisi',
            'isbn.max' => 'ISBN maksimal 50 karakter',
            'judul.required' => 'Judul Wajib diisi',
            'author.required' => 'Pengarang Wajib diisi',
            'tahun.required' => 'Tahun Wajib diisi',
        ];
    }

}
