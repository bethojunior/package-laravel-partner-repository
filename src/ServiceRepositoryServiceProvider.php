<?php

namespace bethojunior\servicerepository;

use Illuminate\Support\ServiceProvider;
use bethojunior\servicerepository\Commands\Initialize;
use bethojunior\servicerepository\Commands\NewService;

class ServiceRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            Initialize::class,
            NewService::class
        ]);
    }
}
