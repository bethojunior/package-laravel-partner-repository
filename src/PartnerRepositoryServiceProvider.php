<?php

namespace bethojunior\partnerrepository;

use Illuminate\Support\ServiceProvider;
use bethojunior\partnerrepository\Commands\Initialize;

class PartnerRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            Initialize::class,
        ]);
    }
}
