<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DateTimeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date' => 'required|date',
            'time' => 'required|date_format:H:i'
        ];
    }

    protected function prepareForValidation()
    {
    $date_time = ($this->filled(['date', 'time'])) ? $this->date .' '. $this->time : '';
    $this->merge([
        'date_time' => $date_time
    ]);
}
}
