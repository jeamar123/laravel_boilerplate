<?php

namespace App\Modules\Shop\Http\Requests;

use App\Modules\Shop\Models\Shop;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateShopRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'image' => ['nullable'],
            'email' => ['required', 'email', Rule::unique(Shop::class, 'email')->ignore($this->shop)],
            'login_type' => ['nullable'],
            'status' => ['nullable'],
        ];
    }
}
