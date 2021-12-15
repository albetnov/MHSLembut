<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class build_lembut extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'build:lembut {--init}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Perintah untuk membuat Lembut.';

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
     * @return int
     */
    public function handle()
    {
        $check = $this->option('init');
        if ($check) {
            Artisan::call('storage:link');
            Artisan::call('migrate --seed');
            $files = array_diff(scandir(__DIR__ . '/../../../public/files'), ['.', '..']);
            foreach ($files as $file) {
                copy(__DIR__ . '/../../../public/files/' . $file, __DIR__ . '/../../../public/storage/' . $file);
            }
            $this->info('Preparation Complete.');
        } else {
            Artisan::class('migrate:fresh --seed');
        }
    }
}
