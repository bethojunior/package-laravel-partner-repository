<?php

namespace bethojunior\partnerrepository;

class Start
{
    public static function run()
    {

        exec("php artisan make:command PartnerRepository");

        $path = '../../../../app/Console/Commands/PartnerRepository.php';
        $file = 'View.php';

        copy($file,$path);

        exec("php artisan madgic:partner-repository");

    }
}
