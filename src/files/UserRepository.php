<?php

namespace App\Repositories\User;

use App\Contracts\Repository\AbstractRepository;
use App\Models\User;

class UserRepository extends AbstractRepository
{

    public function __construct()
    {
        $this->setModel(User::class);
    }

}
