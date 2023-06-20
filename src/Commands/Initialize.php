<?php

namespace bethojunior\partnerrepository\Commands;

use Illuminate\Console\Command;

class Initialize extends Command
{
    protected $signature = 'madgic:partner-repository';
    protected $description = 'Creating files for partner repository';

    public function handle()
    {
        $this->info('Creating AbstractRepository');

        $create_dir_abstract_repository = mkdir(base_path('/app/Contracts/Repository/'), 0777, true);

        if (!$create_dir_abstract_repository) {
            $this->error('Error creating dir for AbstractRepository');
            return;
        }

        $write_in_abstract_repository = touch(base_path('/app/Contracts/Repository/AbstractRepository.php'));

        if (!$write_in_abstract_repository) {
            $this->error('Error writing code in AbstractRepository');
            return;
        }

        $this->info('AbstractRepository created');
        $this->info('Creating CustomException');

        $create_dir_custom_exceptions = mkdir(base_path('/app/Exceptions/'), 0777, true);

        if (!$create_dir_custom_exceptions) {
            $this->error('Error creating dir for CustomException');
            return;
        }

        $write_in_custom_exceptions = touch(base_path('/app/Exceptions/CustomException.php'));

        if (!$write_in_custom_exceptions) {
            $this->error('Error writing code in CustomException');
            return;
        }

        $this->info('CustomException created');
        $this->info('Creating UserModel');

        $create_dir_user_model = mkdir(base_path('/app/Models/User/'), 0777, true);

        if (!$create_dir_user_model) {
            $this->error('Error creating dir for UserModel');
            return;
        }

        $write_in_user_model = touch(base_path('/app/Models/User/User.php'));

        if (!$write_in_user_model) {
            $this->error('Error writing code in UserModel');
            return;
        }

        $this->info('UserModel created');
        $this->info('Creating UserService');

        $create_dir_user_service = mkdir(base_path('/app/Services/User/'), 0777, true);

        if (!$create_dir_user_service) {
            $this->error('Error creating dir for UserService');
            return;
        }

        $write_in_user_service = touch(base_path('/app/Services/User/UserService.php'));

        if (!$write_in_user_service) {
            $this->error('Error writing code in UserService');
            return;
        }

        $this->info('UserService created');
        $this->info('Creating UserRepository');

        $create_dir_user_repositories = mkdir(base_path('/app/Repositories/User/'), 0777, true);

        if (!$create_dir_user_repositories) {
            $this->error('Error creating dir for UserRepository');
            return;
        }

        $write_in_user_repository = touch(base_path('/app/Repositories/User/UserRepository.php'));

        if (!$write_in_user_repository) {
            $this->error('Error writing code in UserRepository');
            return;
        }

        $this->info('UserRepository created');
    }
}
