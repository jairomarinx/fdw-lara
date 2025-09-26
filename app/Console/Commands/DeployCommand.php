<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeployCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:deploy-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Running JDeploy';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $this->info("Starting Deploy...");
        $this->runCmd('git fetch origin');
        $this->runCmd('git reset --hard origin/main');
        $this->runCmd('composer install --no-interaction --prefer-dist --optimize-autoloader');
        $this->runCmd('php artisan migrate --force');
        $this->runCmd('php artisan config:cache');
        $this->runCmd('php artisan route:cache');
        $this->runCmd('php artisan view:cache');
    }

    protected function runCmd(string $command)
    {
        $basePath = '/var/www/html/fdw-lara';         
        $this->info("Running: $command");
        $fullCommand = "cd $basePath && $command";
        $output = shell_exec($command . ' 2>&1');
        $this->line($output);
    }

}
