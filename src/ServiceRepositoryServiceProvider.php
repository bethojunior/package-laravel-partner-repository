<?php

namespace bethojunior\servicerepository;

use Illuminate\Support\ServiceProvider;
use bethojunior\servicerepository\Commands\Initialize;
use bethojunior\servicerepository\Commands\CreateService;

class ServiceRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            Initialize::class,
            CreateService::class
        ]);
    }
}
