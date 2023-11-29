<?php

namespace App\Modules\Log\Http\Requests;

use App\Modules\Log\Models\Log;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateLogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user' => ['required', 'string', 'max:255'],
            'information' => ['nullable', 'string'],
        ];
    }
}
