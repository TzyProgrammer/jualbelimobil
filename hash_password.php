<?php

require 'vendor/autoload.php'; // Ensure you load Composer's autoloader

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Capsule\Manager as Capsule;

// Initialize Laravel application
$app = require_once __DIR__ . '/bootstrap/app.php';

// Set the application instance
Illuminate\Container\Container::setInstance($app);

// Boot the application
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Database connection
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'dbjualbelimobil',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

// Update passwords for penjuals
$penjuals = Capsule::table('penjual')->get();
foreach ($penjuals as $penjual) {
    $hashedPassword = Hash::make($penjual->password);
    Capsule::table('penjual')->where('id_penjual', $penjual->id_penjual)->update(['password' => $hashedPassword]);
}

echo "Passwords updated successfully.";