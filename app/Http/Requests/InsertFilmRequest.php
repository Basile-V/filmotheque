<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertFilmRequest extends FormRequest
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
            'titre' => ['require', 'string', 'max:100'],
            'anneeSortie' => ['require', 'numeric', 'max:'.date('Y')],
            'description' => ['require', 'string', 'max:200'],
            'categorie_id' => ['require', 'numeric', 'max:20']
        ];
    }
}
