<?php

namespace App\Http\Requests\NFT;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'user_id' => 'required|integer|exists:users,id',
            'title' => 'required|string|max:50',
            'description' => 'nullable|string|max:255',
            'path_image' => 'required|string',
            'token_id' => 'required|integer|unique:nfts,token_id',
            'contact_address' => 'nullable|string'
        ];
    }
}
