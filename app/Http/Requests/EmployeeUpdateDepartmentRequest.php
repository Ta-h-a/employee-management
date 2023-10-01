<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateDepartmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'department' => ['required','string'],
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'department' => strip_tags($this->department),
        ]);
    }
}
