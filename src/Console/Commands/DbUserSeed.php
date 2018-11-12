<?php

namespace Wrogati\UserSeed\Console\Commands;

use Illuminate\Support\Facades\Schema;
use Illuminate\Console\Command;
use US;

class DbUserSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:usseed {--op= : Options [d drop table | u create table]}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make changes on table';

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
        $a = new US;
        $a->seeder($this->option('op'));   
    }
}
