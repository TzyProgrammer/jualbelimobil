<?php

return [

    'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],
    'pembeli' => [
        'driver' => 'session',
        'provider' => 'pembelis',
    ],
    'penjual' => [
        'driver' => 'session',
        'provider' => 'penjuals',
    ],
],

'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\User::class,
    ],
    'pembelis' => [
        'driver' => 'eloquent',
        'model' => App\Models\Pembeli::class,
    ],
    'penjuals' => [
        'driver' => 'eloquent',
        'model' => App\Models\Penjual::class,
    ],
],

];
