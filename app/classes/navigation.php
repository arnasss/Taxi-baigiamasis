<?php

namespace App;

class Navigation extends \Core\View {
    
    public $navigation = [
        'image' => 'media/icon.png',
        'links' => [
            [
                'url' => '/drinks.php',
                'title' => 'Drinks'
            ],
            [
                'url' => '/register.php',
                'title' => 'Register'
            ],
            [
                'url' => '/login.php',
                'title' => 'Login'
            ],
            [
                'url' => '/drinks.php#',
                'title' => 'Logout'
            ]
        ]
    ];
    
    public function __construct() {
        parent::__construct($this->navigation);
    }
}