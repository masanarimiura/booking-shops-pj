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
            'datetime' => 'required|after:now',
            'number' => 'required|integer|between:1,20',
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
