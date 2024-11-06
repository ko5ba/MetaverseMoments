<?php

namespace App\Http\Requests\NFT;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'user_id' => 'nullable|integer|exists:users,id',
            'title' => 'nullable|string|max:50',
            'description' => 'nullable|string|max:255',
            'path_image' => 'nullable|string',
            'token_id' => 'nullable|integer|unique:nfts,token_id',
            'contact_address' => 'nullable|string'
        ];
    }
}
