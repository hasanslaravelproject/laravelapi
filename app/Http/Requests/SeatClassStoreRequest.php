<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeatClassStoreRequest extends FormRequest
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
            'seat_plan_id' => ['nullable', 'max:255'],
            'name' => ['required', 'max:255', 'string'],
            'seat_color' => ['required', 'max:255', 'string'],
        ];
    }
}
