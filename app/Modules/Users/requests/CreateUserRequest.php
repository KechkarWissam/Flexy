<?php

namespace App\Modules\Users\requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Modules\Users\models\User;

class CreateUserRequest extends FormRequest
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
        return User::getCreateRules();
    }
}
