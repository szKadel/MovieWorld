<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFavouriteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required|int',
            'imdb_id' => 'required|int',
            'poster_path' => 'string',
            'my_rate' => 'float',
            'watch_list' => 'bool',
            'favourtie' => 'bool',
            'watched' => 'bool',
        ];
    }
}
