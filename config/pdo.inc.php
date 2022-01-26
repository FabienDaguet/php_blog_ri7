<?php

    $dns = "mysql:host=" .DB_HOST . "; dbname=" .DB_NAME;
    $pdo = new PDO ($dns, DB_USER, DB_PASSWORD);
