<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

    	 // Code put here will run when you navigate to /show_products 
    // This creates an instance of the Shopify API wrapper and 
    // authenticates our app. 
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
    } 
    // return view('welcome', ['products' => $products]);
    	// return view('welcome');
    }
}
