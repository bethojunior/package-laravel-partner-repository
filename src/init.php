<?php

exec("php artisan make:command PartnerRepository");

$path = './app/Console/Command/PartnerRepository.php';
$file = './src/View.php';

copy($file,$path);
