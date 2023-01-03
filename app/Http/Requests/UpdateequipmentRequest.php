<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateequipmentRequest extends FormRequest
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
            "type_id" => "integer|min:1|max:20",
            "name" => "string|max:50",
            "manufacturer_id" => "integer|min:1|max:30",
            "size_id" => "integer|min:1|max:30",
            "color_id" => "integer|min:1|max:30",
            "description" => "string|max:100",
        ];
    }
}
