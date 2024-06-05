<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateReactRoute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:react-route';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->warn('User Panel React Routes generating started...');
        $this->call('generate:react-user-panel-route');

        $this->warn('User Admin React Routes generating started...');
        $this->call('generate:react-admin-panel-route');

        $this->warn('User Manager React Routes generating started...');
        $this->call('generate:react-manager-panel-route');

    }
}
