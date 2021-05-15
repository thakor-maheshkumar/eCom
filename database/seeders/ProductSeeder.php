<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	[
        	'name'=>'Oppo Mobile',
        	'price'=>'2000',
        	'description'=>'Our smart phone with the for8 gb much',
        	'category'=>'mobile',
        	'gallery'=>'https://gadgets.ndtv.com/lg-w11-price-in-india-98321'
        ],
        [
        	'name'=>'LG Mobile',
        	'price'=>'1000',
        	'description'=>'Our smart phone with the for4 hgb much',
        	'category'=>'mobile',
        	'gallery'=>'https://www.lg.com/in/tvs/lg-32LM636BPTB#none'
        ],
        [
        	'name'=>'Panasonic Tv',
        	'price'=>'5000',
        	'description'=>'Our Great tv',
        	'category'=>'Tv',
        	'gallery'=>'https://gadgets.ndtv.com/lg-w11-price-in-india-98321'
        ],
        [
        	'name'=>'Sony Tv',
        	'price'=>'1000',
        	'description'=>'Our Great Tv',
        	'category'=>'Tv',
        	'gallery'=>'https://gadgets.ndtv.com/lg-w11-price-in-india-98321'
        ],
        [
        	'name'=>'Test',
        	'price'=>'10000',
        	'description'=>'Test Tv',
        	'category'=>'test',
        	'gallery'=>'public/images/test.jpg'
        ],
        ]);
    }
}
