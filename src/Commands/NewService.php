<?php

namespace bethojunior\servicerepository\Commands;

use Illuminate\Console\Command;

class CreateService extends Command
{

    protected $signature = 'madgic:create-service {service}';
    protected $description = 'Creates a new service in the service repository pattern';

    public function handle()
    {
        $api = false;
        $createController = false;
        $serviceName = $this->argument('service');
        $askController = $this->ask('Do you want to create the controller for '. $serviceName.'? Press (y) for yes');

        if($askController === 'y')
            $createController = true;

        if ($createController){
            $askApi = $this->ask('Is this service for api? Press (y) for yes');
            if($askApi === 'y')
                $api = true;
        }

        if($createController){

            $this->info('----------------------------');
            $this->info('Creating [' . $serviceName . 'Controller]');
            $this->info('----------------------------');

            if($api){
                $create_dir_service = base_path('/app/Http/Controllers/Api/'.$serviceName.'/');

                if (!file_exists(base_path('/app/Http/Controllers/Api/'. $serviceName .'/')))
                    $create_dir_service = mkdir(base_path('/app/Http/Controllers/Api/'. $serviceName .'/'), 0777, true);

                if (!$create_dir_service) {
                    $this->error('Error creating dir for '.$serviceName.'Service');
                    return false;
                }

                $write_in_service = touch(base_path('/app/Http/Controllers/Api/'.$serviceName.'/'.$serviceName.'Controller.php'));

                if (!$write_in_service) {
                    $this->error('Error writing code in '.$serviceName.'Controller');
                    return false;
                }

            }
            else{
                $create_dir_service = base_path('/app/Http/Controllers/'.$serviceName.'/');

                if (!file_exists(base_path('/app/Http/Controllers/'. $serviceName .'/')))
                    $create_dir_service = mkdir(base_path('/app/Http/Controllers/'. $serviceName .'/'), 0777, true);

                if (!$create_dir_service) {
                    $this->error('Error creating dir for '.$serviceName.'Controller');
                    return false;
                }

                $write_in_service = touch(base_path('/app/Http/Controllers/'.$serviceName.'/'.$serviceName.'Controller.php'));

                if (!$write_in_service) {
                    $this->error('Error writing code in '.$serviceName.'Controller');
                    return false;
                }

            }
        }


        $this->info('----------------------------');
        $this->info('Created [' . $serviceName . 'Controller]');
        $this->info('----------------------------');

        ////////////////////////////////////////////////////////


        $this->info('----------------------------');
        $this->info('Creating [' . $serviceName . 'Service]');
        $this->info('----------------------------');

        $create_dir_service = base_path('/app/Services/User/');

        if (!file_exists(base_path('/app/Services/'. $serviceName .'/')))
            $create_dir_service = mkdir(base_path('/app/Services/'. $serviceName .'/'), 0777, true);

        if (!$create_dir_service) {
            $this->error('Error creating dir for '.$serviceName.'Service');
            return false;
        }

        $write_in_service = touch(base_path('/app/Services/'.$serviceName.'/'.$serviceName.'Service.php'));

        if (!$write_in_service) {
            $this->error('Error writing code in '.$serviceName.'Service');
            return false;
        }

        $this->info('----------------------------');
        $this->info('Created [' . $serviceName . 'Service]');
        $this->info('----------------------------');


        /////////////////////////////////////////////////////

        $this->info('----------------------------');
        $this->info('Creating [' . $serviceName . 'Repository]');
        $this->info('----------------------------');

        $create_dir_service = base_path('/app/Repositories/'.$serviceName.'/');

        if (!file_exists(base_path('/app/Repositories/'. $serviceName .'/')))
            $create_dir_service = mkdir(base_path('/app/Repositories/'. $serviceName .'/'), 0777, true);

        if (!$create_dir_service) {
            $this->error('Error creating dir for '.$serviceName.'Repository');
            return false;
        }

        $write_in_service = touch(base_path('/app/Repositories/'.$serviceName.'/'.$serviceName.'Repository.php'));

        if (!$write_in_service) {
            $this->error('Error writing code in '.$serviceName.'Repository');
            return false;
        }

        $this->info('----------------------------');
        $this->info('Created [' . $serviceName . 'Repository]');
        $this->info('----------------------------');


        $this->info('----------------------------');
        $this->info('Service [' . $serviceName . '] created.');
        $this->info('----------------------------');

    }
}
