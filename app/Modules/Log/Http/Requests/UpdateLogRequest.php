<?php

namespace App\Modules\Log\Http\Requests;

use App\Modules\Log\Models\Log;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateLogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'information' => ['nullable', 'string'],
        ];
    }
}
