<?php

namespace bethojunior\servicerepository\Commands;

use Illuminate\Console\Command;

class Initialize extends Command
{
    protected $signature = 'madgic:partner-repository';
    protected $description = 'Creating files for partner repository';

    public function handle()
    {

        $this->info('----------------------------');
        $this->info('Creating AbstractRepository');
        $this->info('----------------------------');

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
        $this->info('----------------------------');
        $this->info('Creating AbstractService');
        $this->info('----------------------------');

        $create_dir_abstract_repository = mkdir(base_path('/app/Contracts/Service/'), 0777, true);

        if (!$create_dir_abstract_repository) {
            $this->error('Error creating dir for AbstractService');
            return;
        }

        $write_in_abstract_repository = touch(base_path('/app/Contracts/Repository/AbstractService.php'));

        if (!$write_in_abstract_repository) {
            $this->error('Error writing code in AbstractService');
            return;
        }

        $this->info('AbstractService created');
        $this->info('----------------------------');
        $this->info('Creating CustomException');
        $this->info('----------------------------');


        $create_dir_custom_exceptions = base_path('/app/Exceptions/');

        if (!file_exists(base_path('/app/Exceptions/')))
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
        $this->info('----------------------------');
        $this->info('Creating UserModel');
        $this->info('----------------------------');

        $create_dir_user_model = base_path('/app/Models/User/');

        if (!file_exists(base_path('/app/Models/User/')))
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
        $this->info('----------------------------');
        $this->info('Creating UserService');
        $this->info('----------------------------');

        $create_dir_user_service = base_path('/app/Services/User/');

        if (!file_exists(base_path('/app/Services/User/')))
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
        $this->info('----------------------------');
        $this->info('Creating UserRepository');
        $this->info('----------------------------');

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
        $this->info('----------------------------');

        $path = base_path('/vendor/bethojunior/partnerrepository/src/files/');

        $abstractRepository = base_path('/app/Contracts/Repository/AbstractRepository.php');
        $textAbstractRepository = $path.'AbstractRepository.txt';
        $fillAbstractRepository = file_get_contents($textAbstractRepository);
        file_put_contents($abstractRepository, $fillAbstractRepository);

        $this->info('UserRepository populated');
        $this->info('----------------------------');

        $customException = base_path('/app/Exceptions/CustomException.php');
        $textCustomException = $path.'CustomException.txt';
        $fillCustomException = file_get_contents($textCustomException);
        file_put_contents($customException, $fillCustomException);

        $this->info('CustomException populated');
        $this->info('----------------------------');

        $userService = base_path('/app/Services/User/UserService.php');
        $textUserService = $path.'UserService.txt';
        $fillUserService = file_get_contents($textUserService);
        file_put_contents($userService, $fillUserService);

        $this->info('UserService populated');
        $this->info('----------------------------');

        $userRepository = base_path('/app/Repositories/User/UserRepository.php');
        $textUserRepository = $path.'UserRepository.txt';
        $fillUserRepository = file_get_contents($textUserRepository);
        file_put_contents($userRepository, $fillUserRepository);

        $this->info('UserService populated');
        $this->info('----------------------------');


        $this->info('Command executed successfully');
    }
}
