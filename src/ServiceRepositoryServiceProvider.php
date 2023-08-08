<?php

namespace bethojunior\servicerepository;

use Illuminate\Support\ServiceProvider;
use bethojunior\servicerepository\Commands\Initialize;

class ServiceRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            Initialize::class,
        ]);
    }
}
