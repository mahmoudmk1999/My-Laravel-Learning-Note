<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required','max:50'],
            'body' => 'required|max:500',
        ];
    }

    public function messages()
    {
        return[
          'title.required' => 'يرجى ادخال عنوان البوست',
          'title.max' => 'يرجى ادخال عدد احرف اقل ',
          'body.required' => 'يرجى ادخال معلومات البوست',
        ];
    }
}
