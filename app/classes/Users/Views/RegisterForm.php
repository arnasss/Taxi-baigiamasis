<?php

namespace App\Users\Views;

class RegisterForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'attr' => [
                'id' => 'register-form',
                'method' => 'POST',
            ],
            'fields' => [
                'name' => [
                    'label' => 'Name*',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_not_longer',
                            'validate_no_numbers'
                        ]
                    ],
                ],
                'surname' => [
                    'label' => 'Surname*',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_not_longer',
                            'validate_no_numbers'
                        ]
                    ],
                ],
                'email' => [
                    'label' => 'Email*',
                    'type' => 'email',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_mail',
                            'validate_is_email'
                        ]
                    ],
                ],
                'password' => [
                    'label' => 'Password*',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],
                'password_repeat' => [
                    'label' => 'Password repeat*',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],
                'phone_number' => [
                    'label' => 'Phone number',
                    'type' => 'text',
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Registruotis',
                ],
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'password_repeat'
                ]
            ],
            'callbacks' => [
                'success' => 'form_success',
            ],
        ];
    }

}
