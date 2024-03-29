<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Engine\WebEngineClass;

class EmailPdf extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:pdf';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        parent::__construct();
    }*/

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $engine = new WebEngineClass();
        $engine->generatePdf();
    }
}
