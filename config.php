<?php

return [
    'database' => [
          'connection' => 'mysql:host=127.0.0.1',
          'database' => 'phplearn',
          'username' => 'root',
          'password' => 'password',
          'options' => [
              PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
          ]
     ]
];