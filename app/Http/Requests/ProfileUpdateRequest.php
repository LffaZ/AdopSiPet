<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Models\PetContributor;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Config;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $guard = Config::get('auth.defaults.guard');
        if ($guard == 'petcontributor') {
            return [
                'nama' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(PetContributor::class)->ignore($this->user()->id)],
            ];
        } else {
            return [
                'nama' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            ];
        }
    }
}
