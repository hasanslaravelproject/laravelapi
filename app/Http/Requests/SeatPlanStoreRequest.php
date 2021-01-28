<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeatPlanStoreRequest extends FormRequest
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
            'class_wise_seat_qty' => ['required', 'max:255', 'string'],
            'seat_quantity' => ['required', 'numeric'],
        ];
    }
}
