<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_shop')->insert([
            [
                "product_id" => 1,
                "shop_id" => 1
            ],
            [
                "product_id" => 1,
                "shop_id" => 2
            ],
            [
                "product_id" => 1,
                "shop_id" => 3
            ],
            [
                "product_id" => 1,
                "shop_id" => 4
            ],
            [
                "product_id" => 2,
                "shop_id" => 1
            ],
            [
                "product_id" => 2,
                "shop_id" => 3
            ],
            [
                "product_id" => 3,
                "shop_id" => 1
            ],
            [
                "product_id" => 3,
                "shop_id" => 2
            ],
            [
                "product_id" => 3,
                "shop_id" => 3
            ],
            [
                "product_id" => 3,
                "shop_id" => 4
            ],
            [
                "product_id" => 4,
                "shop_id" => 2
            ],
            [
                "product_id" => 4,
                "shop_id" => 4
            ]
        ]);
    }
}
