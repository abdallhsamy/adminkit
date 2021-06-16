<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:125',
            'guard_name' => 'nullable|string|max:125',
            'permissions' => 'nullable|array',
            'permissions.*' => 'nullable|integer:exists:permissions,id',
        ];
    }
}
