<?php

  $databases['default']['default'] = [
    'driver' => 'mysql',
    'database' => getenv('DB_NAME'),
    'username' => getenv('DB_USER'),
    'password' => getenv('DB_PASS'),
    'host' => getenv('DB_HOST'),
    'port' => '3306',
    'init_commands' => [
      'isolation_level' => 'SET SESSION TRANSACTION ISOLATION LEVEL READ COMMITTED',
    ],
  ];

$settings['hash_salt'] = getenv('HASH_SALT');

