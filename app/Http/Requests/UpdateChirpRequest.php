<?php

namespace App\Http\Requests;

use App\Models\Chirp;
use Illuminate\Foundation\Http\FormRequest;

class UpdateChirpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('update', Chirp::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'message' => 'required|string|max:255'
        ];
    }
}
