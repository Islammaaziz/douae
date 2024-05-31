<?php
return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class, // Utilisation d'un modèle commun pour les utilisateurs
        ],
        'employes' => [
            'driver' => 'eloquent',
            'model' => App\Models\Employe::class, // Utilisation du modèle Employe pour le fournisseur 'employes'
        ],
        'stagiaires' => [
            'driver' => 'eloquent',
            'model' => App\Models\Stagiaire::class, // Utilisation du modèle Stagiaire pour le fournisseur 'stagiaires'
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
