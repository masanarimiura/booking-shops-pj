<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DateTimeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'datetime' => 'after:now',
            'number' => 'integer | between:1,30'
        ];
    }

    protected function prepareForValidation()
    {
        $datetime = ($this->filled(['date', 'time'])) ? $this->date .' '. $this->time : '';
        $this->merge([
            'datetime' => $datetime
        ]);
    }
}
