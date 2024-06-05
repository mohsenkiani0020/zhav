<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class GenerateReactUserPanelRoute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:react-user-panel-route';

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
        $allRoutes= collect(Route::getRoutes());
        $routes = $allRoutes->filter(function ($item) {
            return (in_array("api", explode(".", $item->getName()), true) && in_array("user-panel", explode(".", $item->getName()), true))  || $item->getName() === "logout" || $item->getName() === "login"|| $item->getName() === "api.public.temporary-file.store";
        })->map(function ($route) {
            return [
                'uri' => $route->uri(),
                'name' => $route->getName()
            ];
        })->keyBy("name");

        $objected = collect(["routes" => $routes]);
        Storage::disk("resource")->put('js/user-panel/routes.json', $objected);

        $this->info('User Panel React Routes collection file generated successfully.');
        return Command::SUCCESS;
    }
}
