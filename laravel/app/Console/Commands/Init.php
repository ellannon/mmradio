<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Init extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executa de forma automàtica les comandes per iniciar el projecte';

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
        $this->call('migrate');
        $this->call('vendor:publish');
        $this->call('db:seed');
        $this->call('migrate', [
			'--path' => "vendor/backpack/langfilemanager/src/database/migrations"
		]);
        $this->call('db:seed', [
			'--class' => "Backpack\LangFileManager\database\seeds\LanguageTableSeeder"
		]);
        $this->call('vendor:publish', [
			'--provider' => "Backpack\LangFileManager\LangFileManagerServiceProvider",
			'--tag' => "config"
		]);
        $this->call('vendor:publish', [
			'--provider' => "Backpack\LangFileManager\LangFileManagerServiceProvider",
			'--tag' => "lang"
		]);
    }
}
