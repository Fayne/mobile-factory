<?php

use Laracasts\Validation\FormValidator;

class RegisterForm extends FormValidator {

    /**
     * Validation rules for register form.
     *
     * @var array
     */
    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required',
    ];
} 