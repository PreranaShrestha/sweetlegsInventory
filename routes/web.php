<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/show_products','ProductController@index');
//  function() { 
//     // Code put here will run when you navigate to /show_products 
//     // This creates an instance of the Shopify API wrapper and 
//     // authenticates our app. 
//     $shopify = App::make('ShopifyAPI', [ 
//         'API_KEY'       => '4db96834be4df2a8c158ee1479ec8295', 
//         'API_SECRET'    => 'afbd023f1838aa3332bb9d3afc0aee8d', 
//         'SHOP_DOMAIN'   => 'sweetlegs.myshopify.com', 
//         'ACCESS_TOKEN'  => 'aaa3e7786a4c8263e312b7da8d11f235' 
//     ]);

//     // Gets a list of products 
//     $result = $shopify->call([ 
//         'METHOD'    => 'GET', 
//         'URL'       => '/admin/products.json?page=1' 
//     ]); 
//     $products = $result->products;
//     foreach($products as $product) { 
//         echo ' ' . $product->id . ': ' . $product->title . ' '; 
//         $data = array('title'=>$product->title);
//         DB::table('products')->insert($data);
//     } 

//       // $name = "prerana";
//       // $email ="prerana@gmail.com";
//       // $password ="lovepresu";
//       // $data = array('name'=>$name,"email"=>$email,"password"=>$password);
//       // DB::table('users')->insert($data);
    
     
  
//     // return view('welcome', $some_data);
// });