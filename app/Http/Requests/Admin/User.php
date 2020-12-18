<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class User extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' =>   'required|min:3|max:191',
            'cpf' => (!empty($this->request->all()['id']) ? 'required|min:11|max:14|unique:users,cpf,' . $this->request->all()['id'] : 'required|min:11|max:14|unique:users,cpf'),
            // Access
            'email' => (!empty($this->request->all()['id']) ? 'required|email|unique:users,email,' . $this->request->all()['id'] : 'required|email|unique:users,email'),
            'password' => (empty($this->request->all()['id']) ? 'required' : ''),
            'date_of_birth' => 'required|date_format:d/m/Y',
        ];
    }
}
