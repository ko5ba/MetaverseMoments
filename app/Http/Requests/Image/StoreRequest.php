<?php

namespace App\Http\Requests\Image;

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
            'path_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'title' => 'required|string|max:30',
            'promt_for_create' => 'nullable|string',
            'description' => 'nullable|string',
            'category_id' => 'required|integer|exists:categories,id'
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'Ошибка авторизации',
            'user_id.exists' => 'Ваш профиль не найден',
            'path_image.required' => 'Добавьте изображение',
            'path_image.image' => 'Вы пытаетесь добавить не изображение',
            'path_image.mimes' => 'Неверный формат файла, доступен: jpeg,png,jpg,gif,svg',
            'title.required' => 'Введите название',
            'title.max' => 'Максимальное количество символов не должно превышать 30',
            'category_id.required' => 'Выберите категорию',
            'category_id.exists' => 'Такой категории не существует'
        ];
    }
}
