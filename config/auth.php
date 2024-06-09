<?php

return [

    'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],
    'pembeli' => [
        'driver' => 'session',
        'provider' => 'pembeli',
    ],
    'penjual' => [
        'driver' => 'session',
        'provider' => 'penjual',
    ],
],

'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\User::class,
    ],
    'pembeli' => [
        'driver' => 'eloquent',
        'model' => App\Models\Pembeli::class,
    ],
    'penjual' => [
        'driver' => 'eloquent',
        'model' => App\Models\Penjual::class,
    ],
],

];
