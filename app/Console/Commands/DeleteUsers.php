<?php

namespace App\Console\Commands;
Use DB;

Use Cache;
use Illuminate\Console\Command;

class DeleteUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'delete users';

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
        $data = array('title'=>"abc");
        DB::table('products')->insert($data);
       
    }
}
