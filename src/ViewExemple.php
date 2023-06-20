<?php

namespace Vendor\bethojunior\makeview\src;

use Illuminate\Console\Command;

class CreateView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'madgic:view';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init view';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name      = $this->ask('Please enter name view');
        $path_js   = 'public/js/';
        $path_css  = 'public/css/';
        $path_view = 'resources/views/';
        $create_dir_view   = mkdir($path_view.'/'.$name);
        $create_dir_css    = mkdir($path_css.$name);
        $create_module     = mkdir($path_js.'modules/'.$name);
        $create_controller = mkdir($path_js.'controllers/'.$name);

        if(!$create_dir_view){
            return "Error to create directory view";
        }
        if(!$create_dir_css){
            return "Error to create directory css";
        }
        if(!$create_module){
            return "Error to create directory module js";
        }
        if(!$create_controller){
            return "Error to create directory controller js";
        }

        $module_js     = touch($path_js.'modules/'.$name.'/'.$name.'.js');
        $controller_js = touch($path_js.'controllers/'.$name.'/'.$name.'.js');
        $create_css    = touch($path_css.$name.'/'.$name.'.css');
        $create_view   = touch($path_view.$name.'/'.$name.'.blade.php');

        if(!$create_view){
            return "Error to create view .blade";
        }
        if(!$create_css){
            return "Error to create file css";
        }
        if(!$module_js){
            return "Error to create file module js";
        }
        if(!$controller_js){
            return "Error to create file controller js";
        }
    }

}
