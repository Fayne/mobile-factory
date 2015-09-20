<?php

use Laracasts\Validation\FormValidator;

class NicknameForm extends FormValidator {

    /**
     * Validation rules for nickname form.
     *
     * @var array
     */
    protected $rules = [
        'nickname' => 'required|min:3',
    ];
} 