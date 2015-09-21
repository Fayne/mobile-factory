<?php

use Laracasts\Validation\FormValidator;

class SignatureForm extends FormValidator {

    /**
     * Validation rules for signature form.
     *
     * @var array
     */
    protected $rules = [
        'signature' => 'required|min:3',
    ];
} 