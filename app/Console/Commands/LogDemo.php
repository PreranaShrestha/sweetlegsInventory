<?php

namespace App\Console\Commands;
Use DB;

Use Cache;
use Illuminate\Console\Command;

use Illuminate\Support\Facades\App;
class LogDemo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch product ever 10 min';

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
       $shopify = App::make('ShopifyAPI', [ 
        'API_KEY'       => '4db96834be4df2a8c158ee1479ec8295', 
        'API_SECRET'    => 'afbd023f1838aa3332bb9d3afc0aee8d', 
        'SHOP_DOMAIN'   => 'sweetlegs.myshopify.com', 
        'ACCESS_TOKEN'  => 'aaa3e7786a4c8263e312b7da8d11f235' 
        ]);

        // Gets a list of products 
        $result = $shopify->call([ 
            'METHOD'    => 'GET', 
            'URL'       => '/admin/products.json?page=1' 
        ]); 
        $products = $result->products; 

        // Print out the title of each product we received 
        foreach($products as $product) { 
            echo ' ' . $product->id . ': ' . $product->title . ' ';
             $data = array('title'=>$product->title);
             DB::table('products')->insert($data); 
        } 

    }
}
