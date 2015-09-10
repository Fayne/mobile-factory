<?php

use Laracasts\Validation\FormValidator;

class LoginForm extends FormValidator {

    /**
     * Validation rules for login form.
     *
     * @var array
     */
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];
} 