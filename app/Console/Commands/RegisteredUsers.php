<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class RegisteredUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registered-users {count=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command For Get Recently Registered Users';

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
        $this->table(
            ['Name', 'Email','Postcode','Created At'],
            User::latest()->take($this->argument('count'))->get(['name', 'email','postcode','created_at'])->toArray()
        );
    }
}
